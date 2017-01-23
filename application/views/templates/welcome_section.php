<!--Welcome Section -->
<div id="sections" class="col-md-9">
<div class = 'container-fluid'>
<section id="home" >
  <h1 class="well addGradient">Welcome!</h1>
  <h2>Explore the cafeteria at the click of a button</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo base_url() ?>/img/folder.jpg" class='img-rounded'  alt="Image-1">
    </div>
    <div class="item">
      <img src="<?php echo base_url() ?>/img/folder.jpg" class='img-rounded' alt="Image-2">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</section>
</div>
<!--End of Welcome Section -->