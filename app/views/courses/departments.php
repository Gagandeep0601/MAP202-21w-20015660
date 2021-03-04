<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
				<h1>Departments</h1>								
            </div>
        </div>
    </div>
	    
	<div class="row">
            <div class="col-lg-12">
		     <?php foreach($data['departments'] as $dept) { ?>
			<p>
				<a href="/courses/display/<?=$dept['department']?>"> <?=$dept['department'];?> </a>
			</p> 
		          <?php }?>
			</div>
    </div>
<?php require_once 'app/views/templates/footer.php' ?>
