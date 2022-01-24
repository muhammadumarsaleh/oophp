<?php

// class Nama{
//     const NAMA = "MUHAMMAD UMAR SALEH";
// }
// Echo Nama::NAMA; 


// echo __DIR__;

class CobaA{
    public static function Makan(){
        return __CLASS__;
    }
}

echo CobaA::Makan();

?>