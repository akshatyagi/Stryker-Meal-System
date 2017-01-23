<!--Contact us -->
<div class="container-fluid">
<section id="s41" >
  <h1 class="well addGradient">Contact Us</h1>
  <div class="container-fluid bg-grey">
  <h2 class="text-center">Cafeteria</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you soon.</p>
      <?php foreach($contact as $c){ ?>
        <p><span class="glyphicon glyphicon-map-marker"></span> <?php echo $c->address ?></p>
        <p><span class="glyphicon glyphicon-phone"></span><?php echo $c->phone ?></p>
        <p><span class="glyphicon glyphicon-envelope"></span><?php echo $c->email ?></p> 
      <?php } ?>
    </div>
	<?php echo form_open('Stryker_home/insert_Message'); ?>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="fname" name="fname" placeholder="First Name" maxlength="30" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="lname" name="lname" placeholder="Last Name" maxlength="30" type="text" required>
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" maxlength="30" placeholder="Email" type="email" required>
        </div>

      </div>
      <textarea class="form-control" id="comments" maxlength="150" name="comments" placeholder="Comment(Max. 150 characters)" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
	<?php echo form_close(); ?>
  </div>
</div>
</section>
</div>
<!--End of Contact Us -->