<?php

class Picture extends Controller{
    private $table = 'student';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function create(){
        //take data from $_FILES[namefile,sizefile,error,tmp_name]
        $nameFile = $_FILES['img']['name'];
        $sizeFile = $_FILES['img']['size'];
        $error = $_FILES['img']['error'];
        $tmpName = $_FILES['img']['tmp_name'];
        //check if the data is image file 
        $imageExtentionsValid = ['jpg','png'];
        $imageExtention;
        $imageExtention = explode('.',$nameFile);
        $imageExtention = strtolower(end($imageExtention));
        if (!in_array($imageExtention,$imageExtentionsValid)) {
            echo 
            "<script>
            alert('Yang anda upload bukan gambar');
  
        </script>";

        echo 'Back to daftar page';
        }
        //check if the size of data is not bigger than the maximum
        if ($sizeFile > 2000000) {
            echo "<script>
            alert('Yang anda upload bukan gambar');
  
        </script>";

        echo 'Back to daftar page';
        }
        //combine the name of file + . + extention file using uniqid()
        $newPictureName;
        $newPictureName = uniqid();
        $newPictureName .= '.';
        $newPictureName .= $imageExtention;
        //having been combined, move them into a new folder using move_uploaded_file(tmp_name,folder_destination . $newPictureName)
        move_uploaded_file($tmpName, 'img/' . $newPictureName);
        //return output $newNameOfFile
        return $newPictureName;
        //then go to insert of file
        
        
    }

    public function saveImg()
    {
        //upload the image but check it first if it's an image
        $image = $this->create();
        //insert into query where id = id
        $query = "INSERT INTO student VALUE(img = '$image')";
        $this->db->query($query);

        return $this->db->rowCount();

        header('Location: ' . BASEURL . '/daftar');
    }
}