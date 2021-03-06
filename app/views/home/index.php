<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Welcome <?php echo $_SESSION['username'] ?> </h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
				<p>
					<a href="/courses">DEPARTMENT</a>  <!--link to see department detail-->
				</p>
				<p>
					<a href="/insert">INSERT HERE</a> <!--link to insert the data-->
				</p>
				<form action="/logout/index" method="post">
			    <button type="submit" class="btn btn-primary">Logout</button>
				</form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p> <?=$data['message']?> </p>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>
