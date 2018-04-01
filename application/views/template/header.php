    
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/blog.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/view_auction_asset.css" rel="stylesheet">
<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

</head>
<body>
<div class="header">
  <div class="container-fluid" id="fullpage-container">
      <div class="row">
    <nav class="navbar navbar-default">
      
        <ul class="nav navbar-nav nav-pills navbar-right">
            <li><a href="<?php echo base_url(); ?>">DASHBOARD</a></li>
            <li><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-heart-empty"></span>MY FAVOURITES ()</a></li>
            <li ><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-off"></span>LOGOUT</a></li>
     
        </ul>
      </nav>
      </div>

      <div class="row" id="header">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <a href="<?php echo base_url()?>"><img src="<?php echo site_url('')?>/assets/images/logo1.png" id="logo"></a>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <form action="/action_page.php">
          <div class="searchbox">
          <div class="search-container">
      
              <div class="search-icon">
                <i class="glyphicon glyphicon-search" id="glysearch"></i>
              </div>
              <input type="text" placeholder="Search.." name="search">
              
          </div>
          <div class="text-right">
            <a href="#"><img src="http://at1.wlthemes.com/wp-content/themes/AT/framework/img/social/facebook16.png"></a>
            <a href="#"><img src="http://at1.wlthemes.com/wp-content/themes/AT/framework/img/social/twitter16.png"></a>
            <a href="#"><img src="http://at1.wlthemes.com/wp-content/themes/AT/framework/img/social/linkedin16.png"></a>
            <a href="#"><img src="http://at1.wlthemes.com/wp-content/themes/AT/framework/img/social/googleplus16.png"></a>
          </div>

          </div>
        </form>
        </div>
      </div>
      <div id="core-menu" class="core-menu">
      <div class="container-fluid">
      <div class="row">
        <nav class="navbar">
          <div class="pull-right">
            <a href="#"><div class="button"><div class="title">Add Auction</div></div></a>
          </div>
          <div class="navbar-collapse">
            <ul id="menu" class="nav navbar-nav">
                
                <li class="menu-item home">
                  <a href="<?php echo base_url();?>"><span>HOME</span></a>
                </li>

                <li class="menu-item account">
                  <a href="<?php echo base_url();?>"><span>MY ACCOUNT</span></a>
                </li>

                <li class="menu-item blog">
                  <a href="<?php echo site_url('pages/blog');?>"><span>BLOG</span></a>
                </li>

                <li class="menu-item contact">
                  <a href="<?php echo base_url();?>"><span>CONTACT</span></a>
                </li>
            </ul>
          </div>
        </nav>
      </div>
      </div> 
      </div>