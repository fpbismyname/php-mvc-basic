<?php
class User{
    protected $data;
    public function __construct(){
        $this->data = new UserModel();
    }
    public function index(){
        $data = $this->data->getHome();
        include "../app/views/home.php";
    }
    public function about(){
        $data = $this->data->getAbout();
        include "../app/views/about.php";
    }
    public function notFoundPage(){
        include "../app/views/404notfound.php";
    }
}