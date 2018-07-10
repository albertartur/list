<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">
  <script type="text/javascript" src="<?= base_url('js/user.js'); ?>"></script>
  <script>
    base_url = "<?= base_url(); ?>"
  </script>
  <title></title>
</head>
<body>

<nav id="top_manu" class="navbar  navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button"  class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="top_manu" " class="icon-bar"></span>
        <span class="top_manu" class="icon-bar"></span>
        <span class="top_manu" class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?= base_url(''); ?>"><img height="25px" src="<?= base_url('img/p.png'); ?>"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    	<form class="navbar-form navbar-left" action="/action_page.php">
			      <div class=" input-group ">
			        <input type="text" class="form-control" placeholder="Search" name="search">
			        <div class=" input-group-btn">
			          <button class="btn btn-default" type="submit">
			            <i class="glyphicon glyphicon-search"></i>
			          </button>

			        </div>
			      </div>
			</form>
      <div style="line-height: 42px;" class="nav navbar-nav navbar-right">
        <a href="<?= base_url('/login'); ?>"> Իմ էջը</a>
        <a class=" btn-a" href="#">Ավելացնել հայտարարություն</a>
      </div>
    </div>
  </div>
</nav>