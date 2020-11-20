<!DOCTYPE html>
<head>
<title>LogIn Page</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-4.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/0.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/jquery.validation/0.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/3.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link href="style.css" rel="stylesheet">
       <script src="javascript.js"></script> 
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div id="first">
					<div class="myform form ">
						<div class="logo mb-4">
						 	<div class="col-md-13 text-center">
								<h1>Login</h1>
						 	</div>
					  	</div>
                   				<form action="validation.php" method="post" name="login">
                           				<div class="form-group">
                              					<label for="exampleInputEmail0">Email address</label>
                              					<input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email or phone">
                           				</div>
                          	 			<div class="form-group">
                              					<label for="exampleInputEmail0">Password</label>
                              					<input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           				</div>
                           				<div class="form-group">
                              					<p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                           				</div>
                           				<div class="col-md-13 text-center ">
                              					<button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                           				</div>
                           				<div class="col-md-13 ">
                              					<div class="login-or">
                                 					<hr class="hr-or">
                                 						<span class="span-or">or</span>
                              					</div>
                           				</div>
                           				<div class="col-md-13 mb-3">
                              					<p class="text-center">
                                 					<a href="javascript:void();" class="google btn mybtn">
										<i class="fa fa-google-plus"></i> 
										Signup using Google
                                 					</a>
                              					</p>
                           				</div>
                           				<div class="form-group">
                              					<p class="text-center">Don't have account? <a href="registration.php" id="signup">Sign up here</a></p>
                           				</div>
                        			</form>
                 
					</div>
				</div>
			  	<div id="second">
			      	<div class="myform form ">
                        		<div class="logo mb-4">
                           			<div class="col-md-13 text-center">
                              				<h0 >Signup</h1>
                           			</div>
                        		</div>
                            		<form action="registration.php" method="post" name="registration">
                           			<div class="form-group">
                              				<label for="exampleInputEmail0">First Name</label>
                              				<input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                           			</div>
                           			<div class="form-group">
                              				<label for="exampleInputEmail0">Last Name</label>
                              				<input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
                           			</div>
                           			<div class="form-group">
                              				<label for="exampleInputEmail0">Email address</label>
                              				<input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           			</div>
                           			<div class="form-group">
                              				<label for="exampleInputEmail0">Password</label>
                              				<input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           			</div>
                           			<div class="col-md-13 text-center mb-3">
                              				<button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started For Free</button>
                           			</div>
                           			<div class="col-md-13 ">
                              				<div class="form-group">
                                 				<p class="text-center"><a href="login.php" id="signin">Already have an account?</a></p>
                              				</div>
                           			</div>
                            		</div>
                        	</form>
                   	</div>
		</div>
	</div>
</div>   
</body>
</html>
