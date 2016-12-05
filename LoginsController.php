<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class LoginsController extends AppController {
    var $name = "Logins";
    public function index() {
        $login = 'login';
//        $this->layout = false;
//        $this->redirect(LoginsController::login);
//        $this->autoRender = false;
        $data = $this->Book->find("all");
//		$this->set("data",$data);
        var_dump($data);
//        $this->setAction($login);
    }
    public function test() {
        $sql = "SELECT * FROM books;";
        $data = $this->Book->query($sql);
//        $data = $this->set('books', $this->Book->find('all'));
//        $data = $this->Book->find("all");
//		$this->set("data",$data);
        var_dump($data);
//        $this->setAction($login);
    }
    public function login() {
        $this->layout = false;
        echo "Login in here";
    }
    public function checklogin() {
        $this->autoRender = false;
//        $params = array($_POST['id'], $_POST['password']);
        $sql = array(
                        "conditions"=> array(
                                                "id  = "=> $_POST['id'],
                                                "password = " =>$_POST['password'],
                                            )
                    );
                    var_dump($sql);
        $data = $this->User2->find("all",$sql);
        print_r($data);
    }
}
