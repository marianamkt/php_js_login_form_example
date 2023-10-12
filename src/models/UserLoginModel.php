<?php
    class UserLoginModel {
        
        function loginUser(){ //Validate post request and do login is valide
            
                    $errors = [];
                    $data = [];
            
                       if (empty($_POST['email'])) {
                           $errors['email'] = 'Email is required.';
                        }else{
                            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $errors['email'] = 'Email is not valid.';
                            }    
                        }
                       
                        if (empty($_POST['password'])) {
                           $errors['password'] = 'Password is required.';
                        }
            
                       if (!empty($errors)) {
                           $data['success'] = 0;
                           $data['errors'] = $errors;
                           $data['message'] = "All form are required";
                       } else{
                    
                        $loginRespondData = $this->chechIsUserExist($_POST['email'], $_POST['password']);
                        if($loginRespondData['success']){

                            $data['success'] = 1;
                            $data['message'] = 'Success!';   

                        }else{
                            $data['success'] = 0;
                            $data['message'] = $loginRespondData['message'];   
                        }                      
                       }
                      return $data ;
                      
               }

            function chechIsUserExist($user_email, $user_pass) { //check is user exist, do login 

                $userParams = $this->getLoginParams($user_email);
                
                $data['success'] = 0;
    
                if (! empty($userParams)) {
                    //$password = password_hash($user_pass, PASSWORD_DEFAULT);
                    //$hashedPassword = $userParams["password"];
                   
                    if ($user_pass===$userParams["password"]) {
                        $data['success'] = 1; 
                        $data['message'] = 'Successful login!';
                    }else{
                        $data['message'] = 'Incorrect password';
                    }
    
                }else{
                    
                    $data['message'] = 'Incorrect email';
    
                }
                $log_path = dirname(__FILE__)."/../../access.log";
                $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
                    "Attempt: ".($data['success']==1?'Success':'Failed').PHP_EOL.
                    "User email: ".$user_email.PHP_EOL.
                    "-------------------------".PHP_EOL;

                file_put_contents($log_path, $log, FILE_APPEND);
                return $data;
        }               
    function registrateUser(){

         $errors = [];
         $data = [];

            if (empty($_POST['first_name'])) {
                $errors['first_name'] = 'first_name is required.';
            }

            if (empty($_POST['last_name'])) {
                $errors['last_name'] = 'last_name is required.';
            }

            if (empty($_POST['email'])) {
                $errors['email'] = 'Email is required.';
            }

            if (empty($_POST['password'])) {
                $errors['password'] = 'Password is required.';
            }
            if (empty($_POST['repeat_password'])) {
                $errors['password'] = 'Repeat password please.';
            }

            if (!empty($errors)) {
                $data['success'] = 0;
                $data['errors'] = $errors;
                $data["message"]="Some form fild are required";
            } else {
         
                $user = $this->createNewUser($_POST);
                if($user['success']==1){
                    $data['success'] = 1;
                    $data['message'] = $user['message'];
                }else{
                    $data['success'] = 0;
                    $data['message'] = $user['message'];
                }
               
                
                
            } 
           
            return $data;
    }
   


    function createNewUser($post_data){
        $user_data = $this->getLoginParams($_POST['email']);

        $data['success'] = 0;
        
        if(empty($user_data)){
            $user_array = [
                'id'=>5,
                'first_name'=>$_POST['first_name'],
                'last_name'=>$_POST['last_name'],
                'email'=>$_POST['email'],
                'password'=>$_POST['password']];    

            array_push($_SESSION['DUMMY_USERS'], $user_array); 
            $GLOBALS['DUMMY_USERS'] = $_SESSION['DUMMY_USERS'];
           
            $data['success'] = 1;
            $data['message'] = 'Account was succesfully created';    
        }else{
            $data['message'] = 'Email was registrated earlier';
        }
        return $data;
         
    }

    function getLoginParams($user_email){// return user data from dummy array if user exist

        $users_array = $_SESSION['DUMMY_USERS'];
       
        $userParams=array();

            foreach($users_array as $user){
                 if(strtolower($user_email)==strtolower($user['email'])){
                    $userParams = $user;
                    //break;
                 }
            }
        return $userParams;
    }
    

    function isUserLogged(){
        if(isset($_SESSION['is_login']) && $_SESSION['is_login']==true){
            return true;
        }
        return false;
  
    }
    function logout(){
       
            session_destroy();
            
      
    }
      
           
}