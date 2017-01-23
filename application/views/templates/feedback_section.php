<!-- Feedback Section -->
<div class="container-fluid">
	<section id="s2">
  	<h1 class="well addGradient">Feedback</h1>
  	<h2>Kindly Rate our services based on the provided scale</h2><br>
  	<?php echo form_open('Stryker_home/validate_feedback'); ?>
  		<div class = 'table-responsive '>
  			<table class="table table-hover">
   				<tr class = 'service'>
					<td><label>SERVICE</label></td>	
					<td><label><input type="radio" name="service" value=5 required>Excellent</label></td>
					<td><label><input type="radio" name="service" value=4 >Very Good</label></td>
					<td><label><input type="radio" name="srvice" value=3>Good</label></td>
					<td><label><input type="radio" name="service" value=2>Satisfactory</label></td>
					<td><label><input type="radio" name="service" value=1>Poor</label></td>		
				</tr>
				<tr>
					<td><label>STAFF FRIENDLINESS</label></td>
					<td><label><input type="radio" name="sf" value=5 required>Excellent</label></td>
					<td><label><input type="radio" name="sf" value=4>Very Good</label></td>
					<td><label><input type="radio" name="sf" value=3>Good</label></td>
					<td><label><input type="radio" name="sf" value=2>Satisfactory</label></td>
					<td><label><input type="radio" name="sf" value=1>Poor</label></td>	
				</tr>
				<tr>
					<td><label>FOOD QUALITY</label></td>
					<td><label><input type="radio" name="fq" value=5 required>Excellent</label></td>
					<td><label><input type="radio" name="fq" value=4>Very Good</label></td>
					<td><label><input type="radio" name="fq" value=3>Good</label></td>
					<td><label><input type="radio" name="fq" value=2>Satisfactory</label></td>
					<td><label><input type="radio" name="fq" value=1>Poor</label></td>	
				</tr>
				<tr>
					<td><label>ATMOSPHERE</label></td>
					<td><label><input type="radio" name="atm" value=5 required>Excellent</label></td>
					<td><label><input type="radio" name="atm" value=4>Very Good</label></td>
					<td><label><input type="radio" name="atm" value=3>Good</label></td>
					<td><label><input type="radio" name="atm" value=2>Satisfactory</label></td>
					<td><label><input type="radio" name="atm" value=1>Poor</label></td>	
				</tr>
				<tr>
					<td><label>CLEANLINESS</label></td>
					<td><label><input type="radio" name="cln" value=5 required>Excellent</label></td>
					<td><label><input type="radio" name="cln" value=4>Very Good</label></td>
					<td><label><input type="radio" name="cln" value=3>Good</label></td>
					<td><label><input type="radio" name="cln" value=2>Satisfactory</label></td>
					<td><label><input type="radio" name="cln" value=1>Poor</label></td>	
				</tr>
				<tr>
				<td><label>TIMELINESS</label></td>
					<td><label><input type="radio" name="tml" value=5 required>Excellent</label></td>
					<td><label><input type="radio" name="tml" value=4 required>Very Good</label></td>
					<td><label><input type="radio" name="tml" value=3>Good</label></td>
					<td><label><input type="radio" name="tml" value=2>Satisfactory</label></td>
					<td><label><input type="radio" name="tml" value=1>Poor</label></td>	
				</tr>
  			</table>
  			<button type="submit" class="btn btn-default">Submit Feedback</button>
  		</div>
 	<?php echo form_close(); ?> 
</section>
</div>
<!-- End of Feedback Section -->