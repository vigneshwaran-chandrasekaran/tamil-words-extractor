<?php ini_set('max_execution_time', 30000); //300 seconds = 5 minutes ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="Author" content="Vigneshwaran Chandrasekaran">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Tamil Words Extractor - வலைப்பக்கத்தில் இருந்து தமிழ் வார்த்தைகளை பிரித்தெடுக்கும் செயலி</title>
      <!-- Bootstrap -->
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <h4>வலைப்பக்கத்தில் இருந்து தமிழ் வார்த்தைகளை பிரித்தெடுக்கும் செயலி</h4>
               <h4>Web Page Tamil Words Extractor</h4>
               <hr>
               <form class="form-horizontal" action="index.php" method="POST">
                  <div class="form-group">
                     <label for="url">Enter a Webpage URL</label>
                     <input type="url" class="form-control" name="url" id="url" placeholder="http://example.com/" autofocus>
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>
               </form>
            </div>
            <!-- col-md-6 -->
            <div class="col-md-2">
            </div>
         </div>
         <!-- row -->
         <div class="row">
            <div class="col-md-12">
               <?php
                  require('find.php');
                  ?>
            </div>
         </div>
      </div>
      <!-- row -->
      <!-- container-fluid -->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
   </body>
</html>