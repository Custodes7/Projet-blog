<?php
require_once'controller/controller.php';

switch ($_GET['action']) {
    case 'user':
        controllerUserView();
        break;
    case 'admin':
       controllerAdminTable();
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
   
