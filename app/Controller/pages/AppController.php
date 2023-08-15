<?php 

namespace App\Controller\Pages;

use App\Utils\View;

class AppController {
    /**
     * Método responsável ppor retornar o conteúdo (view) do App
     * @return string
     */
    public static function getApp() {
        return View::render('pages/app', [
            'title' => 'Agenda Telefônica'
        ]);
    }
}