<?php
class Tienda{
    public $Producto;
    function totalizar_compra($Cantidad){
        if($this->Producto == "Samsung Galaxy S6"){
            return $Cantidad * 790;
        }
        else if($this->Producto == "iPhone 6S"){
            return $Cantidad * 890;
        }
        else if($this->Producto == "LG G4"){
            return $Cantidad * 720;
        }
        else if($this->Producto == "Samsung Galaxy A23"){
            return $Cantidad * 260;
        }
        else if($this->Producto == "Samsung Galaxy S24 Ultra"){
            return $Cantidad * 1750;
        }
        else if($this->Producto == "Honor 90"){
            return $Cantidad * 869;
        }
        else if($this->Producto == "Xiaomi Redmi Note 13 Pro"){
            return $Cantidad * 599;
        }

        else{
            return 0;
        }
    }
}
?>