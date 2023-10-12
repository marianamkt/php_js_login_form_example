
  const buttonLogin = document.getElementById("#buttonLogin");
  
  function isEmailvalide(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
  }

  const validateEmail = () => {
    const $resultEmail = $('#resultEmail');
    const email = $('#email').val();
    $resultEmail.text('');
  
    if(isEmailvalide(email)){
      $resultEmail.text(email + ' is valid.');
      $resultEmail.css('color', 'green');
      buttonLogin.disabled = true;
    } else{
        buttonLogin.disabled = false;
      $resultEmail.text(email + ' is invalid.');
      $resultEmail.css('color', 'red');
    }
    return false;
  }

  const validatePassword = () => {
    const $resultPassword = $('#resultPassword');
    const password = $('#password').val();
    $resultPassword.text('');
  
    if(password!='' && password.length >3){
      $resultPassword.text(password + ' is valid.');
      $resultPassword.css('color', 'green');
    } else{
      $resultPassword.text(password + ' is invalid. Must be > 3 symbols');
      $resultPassword.css('color', 'red');
    }
    return false;
  }
  const validateName = () => {
    const $resultFirstName = $('#resultFirst_name');
    const $resultLastName = $('#resultLast_name');
    const first_name = $('#first_name').val();
    const last_name = $('#last_name').val();
    $resultFirstName.text('');
    $resultLastName.text('');
  
    if(first_name!=''){
      $resultFirstName.text(password + ' is valid.');
      $resultFirstName.css('color', 'green');
    } else{
      $resultFirstName.text(password + ' is invalid. Cannot be ampty');
      $resultFirstName.css('color', 'red');
    }
    if(last_name!=''){
      $resultLastName.text(password + ' is valid.');
      $resultLastName.css('color', 'green');
    } else{
      $resultLastName.text(password + ' is invalid. Cannot be ampty');
      $resultLastName.css('color', 'red');
    }
    return false;
  }
  
  $('#email').on('input', validateEmail); 
  $('#password').on('input', validatePassword);
  $('#first_name').on('input', validateName);