<?php 
class homeController {
    public function __construct()
    {
        header('Location:'.BASE_URL.'home');
    }
}