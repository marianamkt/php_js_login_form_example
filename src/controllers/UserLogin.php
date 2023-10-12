<?php
require_once(__DIR__.'/../models/UserLoginModel.php');
$login_model = new UserLoginModel();
$data = array();


if(isset($_POST['email']) && isset($_POST['password'])){

    $data = $login_model->loginUser();

        if($data['data']['success']==1){
            $_SESSION["errorMessage"] = $data['message'];
        }else{
            $_SESSION["errorMessage"] = $data['message'];
            
        }
        echo json_encode(array("success"=>1));
        //exit;
 } 

 
if($_SERVER['REQUEST_URI'] == '/user/logout'){

        $login_model ->logout();
        header('Location:/');
        
    
}
/*
if($_SERVER['REQUEST_URI'] == '/user/login'){

    $data = array();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $data = $login_model->loginExitingUser();
        if($data['success']==1){
            header('Location:/');
            
        }else{
            $_SESSION["errorMessage"] = $data['message'];
          //  header('Location:/');
            
        }

    }else{
        header('Location:/');
    }      
}
*/
if($_SERVER['REQUEST_URI'] == '/user/signup'){

    $data = array();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $data = $login_model->registratedUser();
       // if($data['success']==1){
           
        //    header('Location:/');
       // }  
    }

}
echo  $_SESSION["errorMessage"];
require(__DIR__.'/../views/index.php');




