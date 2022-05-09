<?php

class Flasher{

    public static function setFlash($pesan)
    {
        $_SESSION['flash'] =
        [
            'pesan' => $pesan
        ];
    }
    
    public static function Flash()
    {
        if(isset($_SESSION['flash']) )
        {
            echo "none";
        }
        unset($_SESSION['flash']);
    }
}