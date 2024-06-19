<?php

class UserModel{
    public function getHome(){
        $data = ["title"=> "Home", "desc"=>"Ini adalah halaman beranda"];
        return $data;
    }
    public function getAbout(){
        $data = ["title"=> "About", "desc"=>"Ini adalah halaman tentang"];
        return $data;
    }
}