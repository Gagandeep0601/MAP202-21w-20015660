
<div class="row">
    <div class="col-sm-auto">
		<form action="/register/verify" method="post" >
		<fieldset>
			<caption><strong>Register Your Account</strong></caption> <!--  Register form -->
			<table>
			    <tr>
				    <td><label for="name">Username</label></td>
				    <td><input required type="text" class="form-control" name="username">
						<?php foreach($data['alreadyuser'] as $warn)
                         {
	                       echo $warn;
                          }?></td>
			    </tr>
		
			    <tr>
				    <td><label for="name">Password</label></td>
					<td><input required type="password" class="form-control" name="password"></td>
				</tr>
			</table>	
		  <button type="submit" class="btn btn-primary">Submit</button>	
		</fieldset>
			   <?php foreach($data['errors'] as $error) { ?>  
			<p> 
				
				<?php 
					if($i==0)
					{
						echo "<h3>Warnings</h3>";
					}
	              echo $error;
				   $i=1;
				?>
				
			</p> 
		          <?php }?>	
		</form> 
	</div>
</div>


