<?php 
$GLOBALS['DUMMY_USERS'] = [['id'=>1,'first_name'=>'Andrew','last_name'=>'Bilyy', 'email'=>'Andrew@gmail.com', 'password'=>'password1'],
['id'=>2, 'first_name'=>'Petro','last_name'=>'Nogirnyy', 'email'=>'Petro@gmail.com', 'password'=>'password2'],
['id'=>3, 'first_name'=>'Pavlo','last_name'=>'Zavadskyy','email'=>'Pavlo@gmail.com', 'password'=>'password3'],
['id'=>4, 'first_name'=>'Illia','last_name'=>'Melnyk','email'=>'mariana.semesta@gmail.com', 'password'=>'1111']];

session_start();

$request = $_SERVER['REQUEST_URI'];
$crDir = '/src/controllers';
if(!isset($_SESSION['DUMMY_USERS'])){
  $_SESSION['DUMMY_USERS'] = $GLOBALS['DUMMY_USERS'];
}
switch ($request) {
    case '':
      require __DIR__ . $crDir . '/UserLogin.php';
      break;
    case '/':
      require __DIR__ . $crDir . '/UserLogin.php';
      break;
    case '/user/logout':      
      require __DIR__ . $crDir . '/UserLogin.php';
      break;    
    case '/user/login':      
      require __DIR__ . $crDir . '/Login.php';
      break;
    case '/user/signup':      
        require __DIR__ . $crDir . '/Signup.php';
        break;


}

?>