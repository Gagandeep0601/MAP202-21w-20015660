<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
				<?php
		          if($data['error']){?>
					  <div class="alert alert-dismissible alert-danger">
                      <?=$data['error']?>
                     </div>
		         <?php 
				  }
			     ?>
						<?php
	            	if($data['onlyAdmin']){?>
		            <div class="alert alert-dismissible alert-danger">
                      <?=$data['onlyAdmin']?>
                     </div>
		         <?php 
				  }
			     ?>
				
                <h1>Welcome <?php echo $_SESSION['username'] ?> to Home page </h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
				<!--<p>
					<a href="/courses">DEPARTMENT</a> 
				</p>
				<p>
					<a href="/insert">INSERT HERE</a> 
				</p>
				<a href="/register/delete" >Delete your Account</a>
				<form action="/logout/index" method="post">
			    <button type="submit" class="btn btn-primary">Logout</button>
				</form>-->
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p> <?=$data['message']?> </p>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>
