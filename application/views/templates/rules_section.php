<!-- Rules Section -->
<div  class="container-fluid">
<section id="s3">
  <h1 class="well addGradient">Instructions</h1>
  <h2>Kindly abide by the following rules before accessing the cafeteria</h2><br>
  <div class="list-group">
  <?php foreach($rules as $r){
    echo "<a class='list-group-item'>".$r->item."</a>"; }?>  
  </div>
</section>
</div>
<!-- End of Rules Section -->