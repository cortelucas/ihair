<?php


namespace App\Controllers;


class HomeController
{
    public static function index()
    {
        require '../src/View/Home/index.php';
    }
}