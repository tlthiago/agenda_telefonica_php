<?php 

namespace App\Controller\Pages;

use App\Models\AppModel;
use App\Utils\View;

class AppController {
    private $model;

    function __construct()
    {
        $this->model = new AppModel();
    }

    // Retonra o conteúdo da view app
    public static function getApp() {
        return View::render('pages/app', [
            'title' => 'Agenda Telefônica'
        ]);
    }
}