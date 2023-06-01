<?php
  include_once("config/Conf.php");
  include_once("App/models/Members.model.php");
  include_once("App/models/Department.model.php");
  include_once("resources/views/Member/Members.view.php");
  include_once("resources/views/Member/AddMember.view.php");

  class MembersController {
    private $member;
    private $department;

    function __construct(){
      $this->member = new Members(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
      $this->department = new Department(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    public function index() {
      $this->member->open();
      $this->department->open();
      $this->member->getMemberJoin();
      $this->department->getDepartment();
      
      $data = array(
        'members' => array(),
      );
      
      while($row = $this->member->getResult()){
        array_push($data['members'], $row);
      }
        
      $this->member->close();
      
      $view = new MemberView();
      $view->render($data);
    }
    
    function add(){
      $this->member->open();
      $this->department->open();
      $this->member->getMemberJoin();
      $this->department->getDepartment();
      
      $data = array(
        'members' => array(),
        'department' => array(),
      );

      while($row = $this->member->getResult()){
        array_push($data['members'], $row);
      }

      while($row = $this->department->getResult()){
        array_push($data['department'], $row);
      }

      $this->member->close();
      $this->department->close();

      $view = new AddMemberView();
      $view->render($data);
    }
  
    function store($data){
      $this->member->open();
      $this->member->add($data);
      $this->member->close();
      
      header("location:index.php");
    }
  
    function edit($id){
      $this->member->open();
      $this->department->open();
      $this->member->getMemberById($id);
      $this->department->getDepartment();
      
      $data = array(
        'members' => array(),
        'department' => array(),
      );

      while($row = $this->member->getResult()){
        array_push($data['members'], $row);
      }

      while($row = $this->department->getResult()){
        array_push($data['department'], $row);
      }

      $this->member->close();
      $this->department->close();
  
      $view = new AddMemberView();
      $view->render($data);
    }
    function update($id){
      $this->member->open();
      $this->member->update($id);
      $this->member->close();
  
      header("location:index.php");
    }
  
    function destroy($id){
      $this->member->open();
      $this->member->delete($id);
      $this->member->close();
  
      header("location:index.php");
    }


  }

?>