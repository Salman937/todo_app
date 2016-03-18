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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body style="background-color:#FAFAFA">
      
      <!-- nav bar starts  -->
    
    <nav class="navbar navbar-inverse">  
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <font color="white" size="6"><em>Todo</em> </font>
          </a>
        </div>
      </div>
    </nav>
    
    <!-- nav bar Ends -->
    
    <!-- Body Strats  -->
    <div class="container" style="margin-left: 300px">
      <form action="<?php echo base_url();?>index.php/welcome/update" method="post">
        <div class="row">
          <div class="form-group">
            <div class="col-md-6" > 
              <textarea class="form-control"  rows="6" name="data" value="" > <?php echo $edit->data ?>
              </textarea>
            </div> 
          </div>
        </div>
        <br>
        <div class="row"> 
          <div class="form-group" style="margin-left: 505px">
           <div class="col-md-6"> 
           <input type="hidden" name="ID" value="<?php echo $edit->id ?>">
            <input type="submit" class="btn btn-info" name="add" value="Edit">
           </div> 
          </div> 
        </div>   
      </form>
      <br>
     
     
    </div>

   <!-- Body Ends -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>