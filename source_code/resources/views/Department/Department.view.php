<?php

  class DepartmentView {
    public function render($data){
      $count = 1;
      $dataDepartment = null;
      foreach($data['department'] as $val){
        $dataDepartment .= "<tr>
                <td>" . $count . "</td>
                <td>" . $val['department_name'] . "</td>";
        $dataDepartment .= "
            <td>
              <a href='create.php?id_editDepartement=" . $val['department_id'] .  "' class='btn btn-warning' '>Edit</a>
              <a href='department.php?id_hapus=" . $val['department_id'] . "' class='btn btn-danger' '>Hapus</a>
            </td>";
        $dataDepartment .= "</tr>";
        $count = $count + 1;
      }
      $dataDepartmentHeader = "<tr>
                <th> No </th>
                <th> Nama Department </th>
                <th> Action </th>
              </tr>";
      $linked = "create.php?addDepartment=" . true;

      $view = new Template("templates/table.html");

      $view->replace("LINKED", $linked);
      $view->replace("DATA_HEADER", $dataDepartmentHeader);
      $view->replace("DATA_TABLE", $dataDepartment);
      $view->write(); 
    }
  }
?>