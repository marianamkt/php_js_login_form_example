<section class="center">
        <div class="row container">
            <div class="col s12 black-text">
                <h1>The best Team</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias deserunt molestiae obcaecati
                    reprehenderit! Earum delectus aliquam nam exercitationem voluptates esse blanditiis, reiciendis quam
                    cumque id rem et odio magni repellat!</p>
         
                <? if(!isset($_SESSION['is_login']) && $_SESSION['is_login']!=1){?>
                <button type="button" class="btn-large deep-blue darken-1 white-text" id="login">Login</button>
                <button type="button" class="btn-large deep-orange darken-1 white-text" id="register">Registrate</button> 
                <?}?>
                <div class="card-panel teal lighten-2"id="success" style="display:none;">
                    </div>
	
	<div class="card-panel teal lighten-2" id="error" style="display:none;">
    </div>
	</div>
            </div>
        </div>
</section>



