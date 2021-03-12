<?php
require_once("../model/model.php");
$conn = new Model();
$show = $conn -> showData();
$search = $conn -> search();

$i = $_REQUEST["accion"];

switch ($i) {
    case "login":
        $login = new Controller();
        $login -> login();
    break;

    case "insert":
        $insert = new Controller();
        $insert -> insert();
    break;

    case "search":
        $search = new Controller();
        $search -> search();
    break;

    case "delete":
        $delete = new Controller();
        $delete -> delete();
    break;
}

class Controller{

    private $model;

    function login(){
        $model = new Model();
        $model-> login();
    }

    function insert(){
        $model = new Model();
        $model -> insert();
    }

    function search(){
        $model = new Model();
        $model -> search();
    }

    function delete(){
        $model = new Model();
        $model -> delete();
    }
}
?>