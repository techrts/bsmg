<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
    <title>bsmg</title>
  </head>
  <body>
  <style>
    .brand-style{
        border: 2px solid #444;
    }
    </style>
<body>
    <div id="wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0px 10px 8px #00000025;">
              <a class="navbar-brand btn btn-light brand-style" href="">BHARAT SPORTS MANAGEMENT GROUP</a>
    </nav>
        
    <div class="container">
      <div class="row main-row">
        <div class="section-head col-sm-12">
          <h4><span>Member</span> Certificate</h4></div>
          </div>
          </div>
    </div>
    
      <center>
          <form method="post" action="">
      <div class="form-group col-sm-6">
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name Here...">
      </div>
      
      <button type="submit" name="generate" class="btn btn-primary">Generate</button>
    </form>
    <br>
    <?php 
      if (isset($_POST['generate'])) {
        $name = strtoupper($_POST['name']);
        $name_len = strlen($_POST['name']);
        
       

        if ($name == "") {
          echo 
          "
          <div class='alert alert-danger col-sm-6' role='alert'>
              Ensure you fill all the fields!
          </div>
          ";
        }else{
          echo 
          "
          <div class='alert alert-success col-sm-6' role='alert'>
              Congratulations! $name Your certificate generated.
          </div>
          ";

          //designed certificate picture
          $image = "certificate.jpg";

          $createimage = imagecreatefromjpeg($image);

          //this is going to be created once the generate button is clicked
          $output ="images/". $name.".jpg";

          //then we make use of the imagecolorallocate inbuilt php function which i used to set color to the text we are displaying on the image in RGB format
          $white = imagecolorallocate($createimage, 200, 245, 255);
          $black = imagecolorallocate($createimage, 0, 0, 0);

          //Then we make use of the angle since we will also make use of it when calling the imagettftext function below
          $rotation = 0;

          //we then set the x and y axis to fix the position of our text name
          $origin_x = 240;
          $origin_y=740;


          //we then set the differnet size range based on the lenght of the text which we have declared when we called values from the form
          if($name_len<=6){
            $font_size = 50;
            $origin_x = 330;
          }elseif($name_len<=8){
            $font_size = 48;
            $origin_x = 300;
          }
          elseif($name_len<=10){
            $font_size = 45;
            $origin_x = 280;
          }
          elseif($name_len<=12){
            $font_size = 44;
            $origin_x = 250;
          }
          elseif($name_len<=14){
             $font_size = 39;
             $origin_x = 238;
          }
          elseif($name_len<=16){
            $font_size = 37;
            $origin_x = 216;
          }
          elseif($name_len<=18){
            $font_size=35;
            $origin_x = 200;
          }elseif($name_len<=20){
            $font_size = 30;
            $origin_x = 190;
          }
          elseif($name_len<=22){
            $font_size = 28;
            $origin_x = 205;
          }
          elseif($name_len<=24){
            $font_size = 25;
            $origin_x = 205;
          }elseif($name_len<=28){
            $font_size = 20;
            $origin_x = 290;
          }
          else {
            $font_size =18;
          }

          $certificate_text = $name;

          //font directory for name
          $drFont = "regular.ttf";


          //function to display name on certificate picture
          $text1 = imagettftext($createimage, $font_size, $rotation, $origin_x, $origin_y, $black,$drFont, $certificate_text);
         
          imagepng($createimage,$output,3);

 ?>

        <!-- this provides a download button -->
        <a href="<?php echo $output; ?>" class="btn btn-success" download="">Download Certificate</a>
        <br><br>
        <!-- this displays the image below -->
        <img src="<?php echo $output; ?>" width="20%">
        <br> 
        <br>
    
<?php 
        }
      }

     ?>
      </center>
    

      <footer>  
          
      </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>