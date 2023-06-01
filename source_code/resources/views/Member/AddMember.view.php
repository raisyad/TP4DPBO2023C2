<?php 
  class AddMemberView {
    public function render($data) {
    $dataTambah = null;
    // exit;
    if (isset($_GET['id_edit'])) {
      $member = $data['members'][0];
      $title = "";
      $dataTambah .= "<label> NAME: </label>
      <input type='hidden' name='id_member' class='form-control' value='" . $member['member_id'] . "'> <br>
      <input type='text' name='name' class='form-control' value='" . $member['name'] . "'> <br>
      
      <label> EMAIL: </label>
      <input type='text' name='email' class='form-control' value='" . $member['email'] . "'> <br>
      
      <label> PHONE: </label>
      <input type='text' name='phone' class='form-control' value='" . $member['phone'] . "'> <br>
      
        <label> Department: </label>";


      $dataTambah .= "<select class='form-select' name='department_id' required>
        <option value=''>-- Pilih Department --</option>";

      foreach ($data['department'] as $row) {
        $dataTambah .= "<option value=" . $row['department_id'] . " " . (($row['department_id'] == $member['department_id']) ? "selected" : " ") . ">" . $row['department_name'] . "</option>";
      }
      $dataTambah .= "</select>";
      $dataTambah .= "<button class='btn btn-success' type='submit' name='simpan'> Save </button><br>
        <a class='btn btn-info' type='submit' name='cancel' href='index.php'> Cancel </a><br>";
      $title = "Ubah Data Member";
    } else {
      // var_dump($data['organisasi']);
      $dataTambah .= "<label> NAME: </label>
        <input type='text' name='name' class='form-control' required> <br>
       
        <label> EMAIL: </label>
        <input type='text' name='email' class='form-control' required> <br>
       
        <label> PHONE: </label>
        <input type='text' name='phone' class='form-control' required> <br>
        <label> Department: </label>";


      $dataTambah .= "<select class='form-select' name='department_id' required>
      <option value=''>-- Pilih Department --</option>";
      foreach ($data['department'] as $row) {
        // var_dump($row);
        $dataTambah .= "<option value=" . $row['department_id'] . ">" . $row['department_name'] . "</option>";
      }
      $dataTambah .= "</select>";
      $dataTambah .= "<button class='btn btn-success' type='submit' name='submit'> Submit </button><br>
        <a class='btn btn-info' type='submit' name='cancel' href='index.php'> Cancel </a><br>";
      $title = "Tambah Data Member";
    }
    $linked = "create.php";

    
    
    $view = new Template("templates/create.html");
    $view->replace("TITLE", $title);
    $view->replace("LINKED", $linked);
    $view->replace("DATA_TABLE", $dataTambah);
    $view->write();
  }
  }
?>