<DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8"> 
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- jQuery Datatables -->
 <!--  script for fancy Table -->

  <script type="text/javascript" src="//code.jquery.com/jquery-1.12.3.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <link type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<style>
.logoimg{
	width: 50px;
    height: 56px;
    background-image: url(https://international.missouri.edu/images/mu-logo-48-stroked.png);
    margin-left: -1px;
    float: left;
    margin-bottom: 15px;
	margin-top:21px
}
</style>


  </head>
  <body style="background-color:#35769E">
      <div class="logoimg"></div>
  <div class="container" style="padding-top:20px">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Summer Breeze</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php?controller=pages&action=home">Home</a></li>
      <li><a href="index.php?controller=newCustomer&action=home">New Customer</a></li>
      <li><a href="index.php?controller=newCustomer&action=customerList">Customer</a></li>
        <li><a href="Login.php?controller=pages&action=home">Login Form</a></li>
    </ul>
  </div>
</nav>  
    <header>
      
    </header>
    
    <?php require_once('routes.php'); ?>
    


    <footer style="padding-top:450px">
      PHP Test project
    </footer>
    </div>
</div>
  <body>
<html>