<?php

namespace Geekbrains\Application1\Controllers;

use Geekbrains\Application1\Render;
use Geekbrains\Application1\Models\User;

class UserController {

    public function actionIndex() {
        // $users = User::getAllUsersFromStorage();
        
        // $render = new Render();

        // if(!$users){
        //     return $render->renderPage(
        //         'user-empty.tpl', 
        //         [
        //             'title' => 'Список пользователей в хранилище',
        //             'message' => "Список пуст или не найден"
        //         ]);
        // }
        // else{
        //     return $render->renderPage(
        //         'user-index.tpl', 
        //         [
        //             'title' => 'Список пользователей в хранилище',
        //             'users' => $users
        //         ]);
        // }

            if (isset($_GET['name']) && isset($_GET['birthday'])) {
                $name = $_GET['name'];
                $birthday = $_GET['birthday'];
                $user = new \Geekbrains\Application1\Models\User($name);
                $user->setBirthdayFromString($birthday);

                $address = $_SERVER['DOCUMENT_ROOT'] . '/storage/birthdays.txt';
                $file = fopen($address, 'a');
                fwrite($file, "{$name},{$birthday}\n");
                fclose($file);

                $render = new Render();
                return $render->renderPage('user-empty.tpl', [
                    'title' => 'Пользователь сохранен',
                    'message' => "Пользователь {$name} успешно сохранен!"
                ]);
            } else {
                return "Параметры name и birthday обязательны!";
            }

        

    }

    public function actionSave() {        
        $name = $_GET['name'] ?? null;
        $birthday = $_GET['birthday'] ?? null;

        if ($name && $birthday) {            
            $user = new User($name);
            $user->setBirthdayFromString($birthday);
            
            $storagePath = $_SERVER['DOCUMENT_ROOT'] . '/storage/birthdays.txt';
            $data = $name . ',' . $birthday . PHP_EOL;
            file_put_contents($storagePath, $data, FILE_APPEND);

            return "Пользователь {$name} с днем рождения {$birthday} сохранен успешно !";
        } else {
            return "Ошибка : отсутствуют имя или дата рождения.";
        }
    }
}