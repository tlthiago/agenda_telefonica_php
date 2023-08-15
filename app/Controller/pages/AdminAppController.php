<?php 

namespace App\Controller\Pages;

use App\Models\AppModel;
use App\Utils\View;

class AdminAppController {
    /**
     * Método responsável ppor retornar o conteúdo (view) do App
     * @return string
     */
    public static function getApp() {
        return View::render('pages/adminApp', [
            'title' => 'Painel de administração'
        ]);
    }
}