<?php

  class MemberView {
    public function render($data){
      $count = 1;
      $active = "";
      $dataMember = null;
      $dataDepartment = null;
      foreach($data['members'] as $val){
        $dataMember .= "<tr>
                <td>" . $count . "</td>
                <td>" . $val['name'] . "</td>
                <td>" . $val['department_name'] . "</td>
                <td>" . $val['email'] . "</td>
                <td>" . $val['phone'] . "</td>
                <td>" . $val['join_date'] . "</td>"
                ;
        $dataMember .= "
            <td>
              <a href='create.php?id_edit=" . $val['member_id'] .  "' class='btn btn-warning' '>Edit</a>
              <a href='index.php?id_hapus=" . $val['member_id'] . "' class='btn btn-danger' '>Hapus</a>
            </td>";
        $dataMember .= "</tr>";
        $active = "index";
        $count = $count + 1;
      }
      $dataMemberHeader = "<tr>
                <th> No </th>
                <th> Nama </th>
                <th> Department Asal </th>
                <th> Email </th>
                <th> Phone </th>
                <th> Join Date </th>
                <th> Action </th>
              </tr>";
      $linked = "create.php";


      $view = new Template("templates/table.html");
      $view->replace("LINKED", $linked);
      $view->replace("ACTIVE", $active);
      $view->replace("DATA_HEADER", $dataMemberHeader);
      $view->replace("OPTION", $dataDepartment);
      $view->replace("DATA_TABLE", $dataMember);
      $view->write(); 
    }
  }
?>