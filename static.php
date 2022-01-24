<?php


class Nama{
    public static $nama = 1;

    public static function panggilNama() {
        echo "HALO!!!" . self::$nama++ . " KEREN" ;
    }
}

echo Nama::panggilNama();
echo Nama::panggilNama();


?>