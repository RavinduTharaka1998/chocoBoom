<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sign In Page</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	
	<!-- bootstrap css-->
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
    <!-- CSS only-->
	 <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
	
	<link rel="stylesheet" href="css/sign-in.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body>
 
	<div class = "container">
	   <div class = "row">
	     <div class = "col-lg-4">
		    <div class = "left-side">
                <div id = "frm">
					<div class = "home">
						<span class="material-icons-sharp">house</span>
						<a href="landing.php"> Home</a>
					</div>
					<hr>
					<h5>Welcome back pleace enter your details...</h5>
					<form class = "form-group" action = "backend/signinback.php" method = "post">
						<lable>Email</lable>
						<input type = "email" placeholder="e-mail" name = "mail"  class = "form-control">

						<lable>Password</lable>
						<input type = "password" placeholder="Password" name = "password" class = "form-control">

						<input type = "submit" value = "Login" name = "submit" class = "form-control">
					</form>
				</div>
                <div class = "f-p-u">
                    <a href = "#" >Forgotten your username or password?</a>
				</div>

				<p className="p-signup">Don't have an account? <a href="sign-up.php" class = "sign-up">SignUp Free</a></p>

				<hr>
					<p class = "login-with">or Login with</p>
				<hr>
				<div class = "social-media">
					<a href="#" class="fb btn">
						<i class="fab fa-facebook-f"></i> Login with Facebook
					   </a>
					  <a href="#" class="twitter btn">
						<i class="fab fa-twitter fa-fw"></i> Login with Twitter
					  </a>
					  <a href="#" class="google btn"><i class="fab fa-google fa-fw">
						</i> Login with Google+
					  </a>
				</div>
				<br>
			</div>
		 </div>
		 <div class = "col-lg-8">
			<hr class = "image-hr-top">
		    <div class = "right-side">
				<div class = "overlay-right">
					<div class = "space-helper"></div>
					<div class = "on-image">
						<h6>"Chocolate is a food product made from roasted and ground cacao seed kernels, 
							that is available as a liquid, solid or paste, on its own or as a flavoring agent in other foods."</h6>
						<br/>
						<h6>Choco Boom</h6>
						 <h6> <span class="material-icons-sharp">mail</span> chocoboom@gmail.com</h6>
						 <h6> <span class="material-icons-sharp">phone_in_talk</span> +94412232956</h6>
					</div>
				</div>
			</div>
			<hr class = "image-hr-bottom">
		 </div>
	   </div>
	</div>


	<!--Javascript Links-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>
</body>
</html>