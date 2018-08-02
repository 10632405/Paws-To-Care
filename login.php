<?php
	session_start(); 
$currentPage = __FILE__;

if($_SESSION['loggedIn'] == true){
	header("location:index.php");
}

?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Paws to Care - Login</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" sizes="16x16">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	
	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip(); 
			});
	</script>
</head>

<body>

<?php include("nav.php");?>

<div id="homeBanner" class="jumbotron text-center mt-2 container">
    <h1>Paws to Care</h1>
</div>

<main role="main" class="container">
    <div class="container">
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
                    <h2>Login</h2>
                    <p>Enter your username and password</p>
                </div>
                
                <?php
	            	if ($_GET['error'] == '1'){
		            	echo "<div class='alert alert-danger'><strong>Invalid Username or Password!</strong></div>";
	            	}    
	            ?>

                <form id="Login" method="post" action="checkLogin.php">
                    <div class="form-group">
                        <input type="username" class="form-control" id="username" name="username" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>

                    <div class="forgot">
                        <a class="disabled" data-toggle="tooltip" title="Feature Not Yet Implemented!" href="#">Forgot Password?</a>
                    </div><button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include("footer.php");?>

</body>
</html>
