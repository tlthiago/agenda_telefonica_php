<?php 

namespace App\Utils;

class View {
    /**
     * Método responsável por retornar o conteúdo de uma view
     * @param string $view
     * @return string
     */
    private static function getContentView($view) {
        $file = __DIR__.'/../../resources/views/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : 'Arquivo não encontrado';
    }
    /**
     * Método responsável por retornar o conteúdo renderizado de uma view
     * @param string $view
     * @return string
     */
    public static function render($view) {
        // CONTEÚDO DA VIEW
        $contentView = self::getContentView($view);

        // RETORNA O CONTEÚDO RENDERIZADO
        return $contentView;
    }
}