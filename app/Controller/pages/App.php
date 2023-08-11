<?php 

namespace App\Controller\Pages;

use App\Utils\View;

class App {
    // 
    public static function getApp() {
        return View::render('app');
    }
}