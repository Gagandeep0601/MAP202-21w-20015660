<?php require_once 'app/views/templates/headerPublic.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>LOGIN</h1>
				<?php if($_SESSION['failedAuth']) {?>
				
				<div class="alert alert-dismissible alert-danger">
               <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Please try again <br>You have <?=$_SESSION['failedAuth']?> failed Attempts!</strong>
				<?php
				}
                ?>
				<div class="alert alert-dismissible alert-primary">
                <strong><?= $_SESSION['weather']?></strong>
                </div>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-sm-auto">
		<form action="/login/verify" method="post" >
		<fieldset>
			<div class="form-group">
				<label for="name">Username</label>
				<input required type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label for="name">Password</label>
				<input required type="password" class="form-control" name="password">
			</div>
		  <button type="submit" class="btn btn-primary">Login</button>
			
			<p>  <!-- link to register file in controller -->
			<a href="/register">Click here to register your account</a>
		    </p>
			
		</fieldset>
		</form> 
	</div>
</div>
    <?php require_once 'app/views/templates/footer.php' ?>
