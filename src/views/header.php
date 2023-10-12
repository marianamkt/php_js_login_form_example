<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" src="./public/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/public/js/ajax_script.js"></script>
    <script src="/public/js/form_validation.js"></script>
    <title>My landing page</title>
</head>

<body>

    <nav class="pink lighten-1">
        <div class="nav-wrapper container">
            <a href="/" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                 
            <?php if (isset($_SESSION["is_login"]) && $_SESSION["is_login"]==true ) { ?>
                        <li ><button class="btn-large deep-blue darken-1 white-text" onclick="logout()" >Logout</button> </li>
                                      
             <?php }?>    
           
            </ul>
        </div>
    </nav>