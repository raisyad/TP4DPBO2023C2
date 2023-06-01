<?php
include_once("config/Conf.php");
include_once("App/models/Department.model.php");
include_once("App/models/Members.model.php");
include_once("resources/views/Department/Department.view.php");
include_once("resources/views/Department/AddDepartment.view.php");

class DepartmentController {
  private $department, $member;

  function __construct(){
    $this->department = new Department(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    $this->member = new Members(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->department->open();
    $this->department->getDepartment();
    
    $data = array(
      'department' => array()
    );
    while($row = $this->department->getResult()){
      array_push($data['department'], $row);
    }
    $this->department->close();

    $view = new DepartmentView();
    $view->render($data);
  }

  
  function add(){
    
    $data = array(
      'department' => array()
    );

    $view = new AddDepartmentView();
    $view->render($data);
  }

  function store($data){
    $this->department->open();
    $this->department->add($data);
    $this->department->close();
    
    header("location:department.php");
  }

  function edit($id){
    $this->department->open();
    $this->department->getDepartmentById($id);
    
    $data = array(
      'department' => array()
    );
    while($row = $this->department->getResult()){
      array_push($data['department'], $row);
    }
    $this->department->close();
    // var_dump($data);
    $view = new AddDepartmentView();
    $view->render($data);
  }

  function update($data){
    $this->department->open();
    $this->department->update($data);
    $this->department->close();

    header("location:department.php");
  }

  function destroy($id){
    $this->member->open();
    $this->member->getMemberByDepartmentId($id);
    $check = "";
    $check = $this->member->getResult();
    if (empty($check)) {
      $this->department->open();
      $this->department->delete($id);
      $this->department->close();

      header("location:department.php");
    } else {
      echo "
      <script>
          alert('Data gagal dihapus, Data sedang dipakai oleh member !');
          document.location.href = 'department.php';
      </script>"
      ;
    }
  }

}