<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="primary-btn" href="registration.html">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3> ENTRAR</h3>
						<?php if(isset($_SESSION['msg'])){
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						} ?>
						<form name="form_login" class="row login_form" action="valida.php" id="contactForm" novalidate="novalidate" method="POST">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="usuario" placeholder="Usuario" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="Password" class="form-control" id="name" name="senha" placeholder="Sua senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">	
							</div>
							<div class="col-md-12 form-group">
								<button name="btnLogin" type="submit" value="acessar" class="primary-btn">acessar</button>
								<a href="#">Esqueceu a senha?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>