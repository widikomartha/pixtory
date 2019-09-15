<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pixtory Photography</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- Favicon -->
    <?= $this->Html->meta(
        'favicon.png',
        'master-template/img/favicon.png',
        ['type' => 'icon']
    );
    ?>

<!-- Login css -->
<!--===============================================================================================-->
    <?= $this->Html->css('/login-template/vendor/bootstrap/css/bootstrap.min'); ?>  
<!--===============================================================================================-->
    <?= $this->Html->css('/login-template/fonts/font-awesome-4.7.0/css/font-awesome.min'); ?>  
<!--===============================================================================================-->
    <?= $this->Html->css('/login-template/vendor/animate/animate'); ?>  
<!--===============================================================================================-->	
    <?= $this->Html->css('/login-template/vendor/css-hamburgers/hamburgers.min'); ?>  
<!--===============================================================================================-->
    <?= $this->Html->css('/login-template/vendor/select2/select2.min'); ?>  
<!--===============================================================================================-->
    <?= $this->Html->css('/login-template/css/util'); ?>  
    <?= $this->Html->css('/login-template/css/main'); ?>  
<!--===============================================================================================-->

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
                    <?= $this->Html->image('/login-template/img-01.png'); ?>  
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Admin Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-50">
							<?= $this->Html->link('Back to Home', ['controller' => 'Pages', 'action' => 'home'],['class'=>'txt2']); ?>
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->	
<?= $this->Html->script('/login-template/vendor/jquery/jquery-3.2.1.min'); ?>
<!--===============================================================================================-->
    <?= $this->Html->script('/login-template/vendor/bootstrap/js/popper'); ?>
    <?= $this->Html->script('/login-template/bootstrap/js/bootstrap.min'); ?>
<!--===============================================================================================-->
    <?= $this->Html->script('/login-template/vendor/select2/select2.min'); ?>
<!--===============================================================================================-->
    <?= $this->Html->script('/login-template/vendor/tilt/tilt.jquery.min'); ?>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <?= $this->Html->script('/login-template/js/main'); ?>

</body>
</html>