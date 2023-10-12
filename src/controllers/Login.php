<?php

require_once(__DIR__.'/../models/UserLoginModel.php');
$login_model = new UserLoginModel();
if(isset($_POST['email']) && isset($_POST['password'])){

  $data = $login_model->loginUser();

      if($data['success']==1){
          $_SESSION["errorMessage"] = $data['message'];
          $_SESSION['is_login']= 1;
      }else{
          $_SESSION["errorMessage"] = $data['message'];
          
      }
      echo json_encode($data);
      exit;
}     
