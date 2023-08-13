<?php 

use \App\Http\Response;
use \App\Controller\Pages;

// ROTA APP
$obRouter->get('/', [
    function() {
        return new Response (200, Pages\AppController::getApp());
    }
]);

// ROTA ADMIN APP
$obRouter->get('/adminApp', [
    function() {
        return new Response (200, Pages\AdminAppController::getApp());
    }
]);