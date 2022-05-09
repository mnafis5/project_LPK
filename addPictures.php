<div class="container">

    <form action="<?= BASEURL; ?>/daftar/uploadImg" method="post" enctype="multipart/form-data">
        
        <label for="img">Image:</label>
        <input type="file" id="newPicture" name="img" required>
        
        <button type="submit">Tambah Data</button>
    </form>
</div>