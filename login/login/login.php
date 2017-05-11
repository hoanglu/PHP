<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin</title>
        <meta charset="UTF-8">
        <link  href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="main.css">

        <!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

        
    </head>
    <body>
   
    <div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Company Name</h1>
	               		<hr />
	               	</div>
	            </div> 
                
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="test_session.php">
                         <?php 
                            
                            if(isset($_SESSION['error'])){
                                echo "<div class='alert alert-danger text-center'>".$_SESSION['error']."</div>";
                            }
                        ?>
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>
                        
                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label><input type="checkbox"> Remember me</label>
                                </div>
                            </div>
                        </div>

						<div class="form-group ">
							<input type="submit" class="btn btn-primary btn-lg btn-block login-button" name='login' value='Login'/>
						</div>
                        
                       
        
					</form>
				</div>
			</div>
		</div>
        

        <script src='../js/jquery-3.2.1.min.js'></script>
        <script src='../bootstrap/js/bootstrap.min.js'></script>
    
    </body>
</html>