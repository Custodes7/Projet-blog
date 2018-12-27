<?php
require_once'controller.php';

if  (isset($_GET['action'])) {
    if ($_GET['action'] == 'admin') {
        require'admin.php';
    }
    else if ($_GET['action'] == 'view') {
		controllerViewPost();
    }
    else if ($_GET['action'] == 'update') {
        controllerUpdatePost();
    }
    else if ($_GET['action'] == 'delete') {
		controllerDeletePost();
    }
    else if ($_GET['action'] == 'insert') {
        controllerInsertPost();
    }
}
else
{
	require 'homeView.php';
}
