<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
				<h1>Programs</h1>								
            </div>
        </div>
    </div>
	
	<div class="row">
            <div class="col-lg-12">
				<?php foreach($data['programs'] as $program) { ?> <!--print programs from datbase-->
				<p>
				   <?php $department=$program['department']; ?>
	            <a href="/courses/display/<?=$department?>/<?=$program['program']?>"> <?=$program['program'];?> </a>
	 
				</p>
				<?php } ?>
            </div>
        </div>
    <?php require_once 'app/views/templates/footer.php' ?>