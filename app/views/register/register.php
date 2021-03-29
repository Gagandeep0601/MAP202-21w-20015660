<?php require_once 'app/views/templates/headerPublic.php' ?>
<div class="row">
    <div class="col-sm-auto">
		<?php
		if($data['errors'])
		echo $data['errors'];
			?>
		
		<form action="/register/verify" method="post" >
		<fieldset>
			<caption><strong>Register Your Account</strong></caption> <!--  Register form -->
			<table>
			    <tr>
				    <td><label for="name">Username</label></td>
				    <td><input required type="text" class="form-control" name="username">
						<?php if($data['alreadyuser'])
                         {
	                       echo "username already in use";
                          }?></td>
			    </tr>
		
			    <tr>
				    <td><label for="name">Password</label></td>
					<td><input required type="password" class="form-control" name="password"></td>
				</tr>
			</table>	
		  <button type="submit" class="btn btn-primary">Submit</button>	
		</fieldset>

		</form> 
	</div>
</div>
 <?php require_once 'app/views/templates/footer.php' ?>

