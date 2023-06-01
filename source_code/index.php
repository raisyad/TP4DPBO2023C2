<?php

include_once("App/models/Template.model.php");
include_once("App/models/DB.model.php");
include_once("App/controllers/MembersController.controller.php");

$member = new MembersController();

if (isset($_POST['add'])) {
  //memanggil add
  $member->add($_POST);
} else if (!empty($_GET['id_hapus'])) {
  //memanggil add
  $id = $_GET['id_hapus'];
  $member->destroy($id);
} else{
  $member->index();
}
