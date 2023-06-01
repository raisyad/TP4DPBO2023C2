<?php

include_once("App/models/Template.model.php");
include_once("App/models/DB.model.php");
include_once("App/controllers/MembersController.controller.php");
include_once("App/controllers/DepartmentController.controller.php");

$member = new MembersController();
$department = new DepartmentController();

// Bagian Department
if (isset($_POST['submitDepartement'])) {
  $department->store($_POST);
} else if (isset($_POST['simpanDepartment'])) {
  $department->update($_POST);
} else if (!empty($_GET['id_editDepartement'])) {
  $id = $_GET['id_editDepartement'];
  $department->edit($id);
} else if (!empty($_GET['addDepartment'])) {
  $department->add();
}
// Bagian Home/Members 
else if (isset($_POST['submit'])) {
  $member->store($_POST);
} else if (isset($_POST['simpan'])) {
  $member->update($_POST);
} else if (!empty($_GET['id_edit'])) {
  $id = $_GET['id_edit'];
  $member->edit($id);
} else{
  $member->add();
}

// if (isset($_POST['submitDepartement'])) {
//   $department->store($_POST);
// } else if (isset($_POST['submit'])) {
//   $member->store($_POST);
// } else if (isset($_POST['simpanDepartment'])) {
//   $department->update($_POST);
// } else if (isset($_POST['simpan'])) {
//   $member->update($_POST);
// } else if (!empty($_GET['id_editDepartement'])) {
//   $id = $_GET['id_editDepartement'];
//   $department->edit($id);
// } else if (!empty($_GET['id_edit'])) {
//     $id = $_GET['id_edit'];
//     $member->edit($id);
// } else if (!empty($_GET['addDepartment'])) {
//   $department->add();
// } else{
//     $member->add();
// }