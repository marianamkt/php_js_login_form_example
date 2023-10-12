
<section class="center">
        <div class="row container">
            <div class="col s12 m12">
      
                <form class="container" id="signupForm">
                <div class="row">
                    <div class="input-field col s6">
                    <input placeholder="First name" name="first_name" id="first_name" type="text">
                    <label for="first_name">First Name</label>
                    </div>
                    <p id="resultFirst_name"></p>
                    <div class="input-field col s6">
                    <input placeholder="Last Name" id="last_name"  name="last_name" type="text">
                    <label for="last_name">Last Name</label>
                    </div>
                    <p id="resultLast"></p>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <input id="email" name="email"  type="email" class="validate">
                    <label for="email">Email</label>
                    </div>
                    <p id="resultEmail"></p>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <input id="password" name="password"  type="password" class="validate">
                    <label for="password">Password</label>
                    </div>
                    <p id="resultPassword"></p>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <input id="repeat_password"  name="repeat_password" type="password">
                    <label for="repeat_password">Repeat password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                    <button class="btn-large deep-orange darken-1 white-text" id="buttonLogin" type="submit">
                                <i class="material-icons right">person_add</i>Registrate new account</button>
                    </div>
                </div>
                </form>
                <script>
                $("#signupForm").validate();
                </script>
                   
 </div>
</div>
</section>   