<?php
  class AddDepartmentView {
    public function render($data){
      $dataTambah = null;
      $dataDepartment = null;
      $title = "";
      if(!empty($data['department'])){
        $department = $data['department'][0];
        // list($id, $nama) = $data['department'][0];
        $dataTambah .= "<label> NAME: </label>
        <input type='hidden' name='id' class='form-control' value='".$department['department_id']."'> <br>
        <input type='text' name='name' class='form-control' value='".$department['department_name']."'> <br>
       
       
        <button class='btn btn-success' type='submit' name='simpanDepartment'> Save </button><br>
        <a class='btn btn-info' type='submit' name='cancel' href='department.php'> Cancel </a><br>";
        $title = "Ubah Data Department";
      }else{
        $dataTambah .= "<label> NAME: </label>
        <input type='text' name='name' class='form-control'> <br>
        
        
        <button class='btn btn-success' type='submit' name='submitDepartement'> Submit </button><br>
        <a class='btn btn-info' type='submit' name='cancel' href='index.php'> Cancel </a><br>";
        $title = "Tambah Data Department";
      }

      $linkTambah = "create.php?submitDepartement=" . true;


      $view = new Template("templates/create.html");
      $view->replace("TITLE", $title);
      $view->replace("LINK_TAMBAH", $linkTambah);
      $view->replace("DATA_TABLE", $dataTambah);
      $view->write(); 
    }
  }
?>