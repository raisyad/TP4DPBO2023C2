<?php
  class Department extends DB {
    function getDepartmentById($id) {
        $query = "SELECT * FROM department WHERE department_id='$id'";
        return $this->execute($query);
    }
    function getDepartment() {
        $query = "SELECT * FROM department";
        return $this->execute($query);
    }

    function add($data) {
        $name = $data['name'];
        $query = "INSERT into department values ('', '$name')";
        // Mengeksekusi query
        return $this->execute($query);
    }

    function update($data){
        // var_dump($data);
        // exit;
        $id = $data["id"];
        $name = $data["name"];

        $query = "UPDATE department set department_name='$name' where department_id='$id'";
        // $result = $conn->query($sql);
        return $this->executeAffected($query);
    }

    function delete($id)
    {
        $query = "DELETE FROM department WHERE department_id = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
    
  }
?>