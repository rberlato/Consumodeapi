<?php include('./pesquisa.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vagalume</title>

    <!--     Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!--    MY.CSS-->
    <style>
        html {

            background-color: #404040;
        }

        body {
            background-color: #b4b4b4;
        }

    </style>

</head>

</head>

<body>
    <div class="container">
        
        

<div class="row m-1 p-1">
    <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
        <div class="text-center">
           <a href= "http://localhost:88/Musicas%20final/"> <img src="vagalume.png" class="img-fluid" width=600px height="auto" alt=""><a>
        </div>
        <hr>
    </div>
    
</div>

<div class ="row">
<div class ="col">

            <?php
        
        if (!empty($music)) {
          foreach ($music->mus as $mus) {          
          ?>
            <h1><?php echo $mus->name ?></h1>
            <p >
                <?php echo $mus->text ?>
            </p>
            </div>
           
            


            <hr>

           
  
  
  
  <div class ="col">
  
  <h1 >
    Tradução
  </h1> 
          <p> <?php echo $mus->translate[0]->text ?></p></div> </div> 
            
            <?php
          }
        }
      ?>
      </div>
       

</body>

</html>
