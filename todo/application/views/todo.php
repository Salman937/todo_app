<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>To do</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>assets/css/bootstyle.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body style="background-color:#FAFAFA">
      
      <!-- nav bar starts  -->
    
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><font size="5" ><em><img src="<?php echo base_url(); ?>assets/images/todo.png" height="40">Todo</em></font></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url(); ?>index.php/login_controller/logout"><font size="4" color="white">Logout</font></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav bar Ends -->
    
    <!-- Body Strats  -->
    <div class="container" style="margin-left: 300px">
      <form action="<?php echo base_url();?>index.php/welcome/insert" method="post">
        <div class="row">
          <div class="form-group">
            <div class="col-md-6"> 
              <textarea class="form-control"  rows="6" name="data"> </textarea>
            </div> 
          </div>
        </div>
        <br>
        <div class="row"> 
          <div class="form-group" style="margin-left: 505px">
           <div class="col-md-6"> 
            <input type="submit" class="btn btn-primary" name="add" value="Add" >
           </div> 
          </div> 
        </div>   
      </form>
      <br>
     
      <div class="col-md-6">
       <?php
      $i=1;
      foreach ($data as $result) 
      {
    
      ?>
       <div class="alert alert-info" role="alert"><?php echo $result->data; ?> </div>
       <div style="margin-bottom: 10px">
        <a href="<?php echo base_url(); ?>index.php/welcome/delete/<?php echo $result->id;  ?>">  <button  type="button" class="btn btn-primary"><img src="<?php echo base_url(); ?>assets/images/delete.png" height="20">Delete</button> </a>
         <a href="<?php echo base_url();?>index.php/welcome/edit/<?php echo $result->id;?>"> <button type="button" class="btn btn-primary"><img src="<?php echo base_url(); ?>assets/images/edit.png" height="20">Edit</button> </a>
        </div>
       <?php  $i++; } ?>

       </div>
    </div>

   <!-- Body Ends -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>