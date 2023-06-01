<?php

include_once("App/models/Template.model.php");
include_once("App/models/DB.model.php");
include_once("App/controllers/DepartmentController.controller.php");

$department = new DepartmentController();

if (isset($_POST['add'])) {
  //memanggil add
  $department->add($_POST);
} else if (!empty($_GET['id_hapus'])) {
  //memanggil add
  $id = $_GET['id_hapus'];
  $department->destroy($id);
} else{
  // var_dump("masuk");
  // die();
  $department->index();
}
