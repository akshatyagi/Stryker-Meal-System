<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Admin Login</h4>
        </div>
        <div class="modal-body">
          <?php echo form_open('Stryker_home/validate_credentials'); ?>
        <div class="form-group">
              <label for="text">Username</label>
              <input type="text" class="form-control" name="user" id="user" required>
            </div>
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="pwd" id="pwd" required>
            </div>    
        </div>
        <div class="modal-footer" >
          <button type="submit" name="submit" id="submit" class="btn btn-default ">Login</button>
        <?php echo form_close(); ?>  
        </div>
    
      </div>     
    </div>
</div>