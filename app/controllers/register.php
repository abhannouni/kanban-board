<?php

Class register extends Controller 
{
    function index(){
        $user = $this->loadModel("user");
        $data['page_title'] = "book";
        $data['stat'] = "login";
        $data['stat'] = "logout";
        if(isset($_POST['submitSignup'])){
            $user->signup($_POST);
        }
        if(isset($_POST['submitSignin'])){
            $user->login($_POST);
        }
        $this->view('register',$data);
        
    }
}
