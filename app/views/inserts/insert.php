<?php require_once 'app/views/templates/header.php' ?>
<div class="row">
    <div class="col-sm-auto">
		<form action="/insert/entry" method="post" >
		<fieldset>
			<caption><strong>Insert Detail</strong></caption> <!-- Insert Program details -->
			<table>
			    <tr>
				    <td><label for="name">Course Id</label></td>
				    <td><input required type="text" class="form-control" name="courseid"></td>
			    </tr>
		
			    <tr>
				    <td><label for="name">Course Name</label></td>
					<td><input required type="text" class="form-control" name="course"></td>
				</tr>
		     
				<tr>
				   <td><label for="name">Department</label></td>
				   <td><input required type="text" class="form-control" name="department"></td>
			    <tr>
			    
				<tr>
				  <td><label for="name">Program</label></td>
				  <td><input required type="text" class="form-control" name="program"></td>
				</tr>
			</table>	
			
		  <button type="submit" class="btn btn-primary">Submit</button>
		</fieldset>
		</form> 
	</div>
</div>
<?php require_once 'app/views/templates/footer.php' ?>

