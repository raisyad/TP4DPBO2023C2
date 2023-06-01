<?php

class Members extends DB {
    function getMember() {
      $query = "SELECT * FROM members";
      return $this->execute($query);
    }

    function getMemberById($id){
      $query = "SELECT * FROM members JOIN department ON members.department_id=department.department_id WHERE members.member_id = $id";
      return $this->execute($query);
    }

    function getMemberJoin(){
      $query = "SELECT * FROM members JOIN department ON members.department_id=department.department_id ORDER BY members.member_id";
      return $this->execute($query);
    }

    function getMemberByDepartmentId($id)
    {
        $query = "SELECT * FROM members WHERE department_id = $id";
        return $this->execute($query);
    }

    function add($data){
      // var_dump($data);
      // die();
      $name = $data['name'];
      $department_id = $data['department_id'];
      $email = $data['email'];
      $phone = $data['phone'];
      $date = date('Y-m-d');
      $query = " INSERT INTO members VALUES ('', '$name', '$email', '$department_id', '$phone', '$date')";

      // Mengeksekusi query
      return $this->executeAffected($query);
    }

    function update($data) {
      $id = $data["id_member"];
      $name = $data["name"];
      $department_id = $data["department_id"];
      $email = $data["email"];
      $phone = $data["phone"];

      $query = "UPDATE members 
          set department_id='$department_id', 
          name='$name', 
          email='$email', 
          phone='$phone'
          where member_id='$id'";
      // $result = $conn->query($sql);
      return $this->executeAffected($query);
    }

    function delete($id) {
      // $id = $data['id'];
      $query = "DELETE from members where member_id=$id";

      // Mengeksekusi query
      return $this->executeAffected($query);
    }

    
}


?>