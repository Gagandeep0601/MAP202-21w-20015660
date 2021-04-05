<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Welcome <?php echo $_SESSION['username'] ?> to staff page </h1>
				
				<div class="alert alert-dismissible alert-success">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <strong>Everyone Can access staff page!</strong> 
                </div>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p> <?=$data['message']?> </p>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>
