<?php
namespace Geekbrains\Application1\Controllers;

use Geekbrains\Application1\Render;

class ErrorController {
    public function actionNotFound() {
        header("HTTP/1.0 404 Not Found");
        $render = new Render();
        return $render->renderPage('error-404.tpl', [
            'title' => 'Страница не найдена',
            'message' => 'Страница, к которой Вы обращаетесь, не существует.'
        ]);
    }
}