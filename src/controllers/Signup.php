<?php

require_once(__DIR__.'/../models/UserLoginModel.php');

$login_model = new UserLoginModel();
if($_POST){

  $data = $login_model->registrateUser();
 
      if($data['success']==1){
          $_SESSION["errorMessage"] = $data['message'];
      
      }else{
          $_SESSION["errorMessage"] = $data['message'];
          
      }
      echo json_encode($data);
      exit;
}     
