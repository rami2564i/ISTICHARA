<?php

$page = $_GET['page'] ?? 'home';


switch ($page) {

     case 'home':
        include 'controllers/UserController.php';
        $controller = new UserController();
        $controller->index();
        break;

     case 'serch':
        include'controllers/UserController.php';
        $controller= new UserController();
        $controller->serch();
        break;
       case 'add_lawyer':
        include 'controllers/UserController.php';
        $controller = new UserController();
        $controller->addLawyer();
        break;
          case 'add_huissiers':
        include 'controllers/UserController.php';
        $controller = new UserController();
        $controller->addHuissiers();
        break;
    }