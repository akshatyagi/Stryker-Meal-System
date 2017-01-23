<!DOCTYPE html>
<html lang="en-US">
<head>
  <title><?php echo $title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Importing the Bootstrap and jQuery libraries -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
  <script  src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
  <script src = "<?php echo base_url()?>assets/js/jQuery3.js"></script> 
  <link rel='stylesheet' href="<?php echo base_url() ?>assets/css/bootstrap.css" />
  <script src = "<?php echo base_url()?>assets/js/bootstrap.js"></script> 
  <link rel='stylesheet' href="<?php echo base_url() ?>css/style.css" />
  <script src = "<?php echo base_url()?>js/element_config.js"></script> 
  <script>
    var message = "Function Disabled";
    function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }
    if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }
    document.onmousedown = rtclickcheck;
  </script>
  <?php if($is_logged){ ?> <script src = "<?php echo base_url() ?>js/element_config_admin.js"></script> <?php }?> 
</head>
<body data-spy="scroll" data-target="#nav1" data-offset="10">
<div class="container-fluid text-responsive img-responsive" id="div1">
  <nav id="nav1" class="navbar navbar-default navbar-fixed-top addGradient"> 
    <div class="container-fluid">
       <header style = 'padding:20px'><img src = "<?php echo base_url() ?>/img/logo.svg" alt='stryker logo' /></header>
      <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>    
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        
         <ul class="nav navbar-nav">
         <?php if(!$is_logged) {?>
          <li><a class="navbar-brand" href="#home">Home</a></li>
          <li><a href="#s1">Menu</a></li>
          <li><a href="#s2">Feedback</a></li>
          <li><a href="#s3">Instructions</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#s41">Contact Us</a></li>
            </ul>
          </li>
          <?php } else { ?> 
            <li class='ad_nav'><a href='#'><span class='glyphicon glyphicon-calendar' ></span><?php echo date('d:m:y'); ?></a></li> 
            <li class='ad_nav'><a href='#'><span class='glyphicon glyphicon-time' ></span><?php echo date('h:i:sa'); ?></a></li>
            <li class='ad_nav'><a href='#'><?php echo date('l'); ?></a></li>
              <?php } ?>
        </ul>   
       <ul class="nav navbar-nav navbar-right">  
        <li id="news_li"><a href="#"><span class="glyphicon glyphicon-exclamation-sign"></span>News</a></li>
        <?php echo $right_item; ?>
       </ul>
      </div>
    </div>
  </div>
</nav>  

