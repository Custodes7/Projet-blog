<?php
require_once'controller/controller.php';

switch ($_GET['action']) {
    case 'user':
        require'view/userView.php';
        break;
    case 'admin':
        require 'admin.php';
        break;
    case 'view':
        controllerViewPost();
        break;
    case 'update':
        controllerUpdatePost();
        break;
    case 'delete':
        controllerDeletePost();
        break;
    case 'insert':
        controllerInsertPost();
        break;
    default:
        require 'view/homeView.php';
        break;
}
   
