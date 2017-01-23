<!-- Menu Section -->
<div  class="container-fluid">
  <section id="s1">
    <h1 class="well addGradient">Menu</h1> 
    <div class="panel-group" id="accordion">
      <hgroup><h2>Check out our menu for <?php echo date('l'); ?> </h2><h4>(Note:Service unavailable for Saturday and Sunday)</hgroup>
      <br>
      <!-- Panels -->
      <?php for($i=0;$i<=4;$i++){ ?>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $weekly_menu_category[$i]; ?>"><?php echo "<h4>".$weekly_menu_category[$i]."</h4>"; ?></a>
            </h4>
          </div>
          <div id="<?php echo $weekly_menu_category[$i]; ?>" class="panel-collapse collapse">
            <div class="panel-body">
              <ul class = 'list-group'>
                <?php 

                  foreach($weekly_menu[$weekly_menu_category[$i]] as $wm){ 
                    echo "<li class ='text-center text-responsive list-group-item'><h4>".$wm->item_name."</h4></li>"; 
                  } 
                ?>
              </ul>
            </div>
          </div>
        </div>
      <?php } ?>
  </section>
  </div>
<!-- End of Menu Section -->