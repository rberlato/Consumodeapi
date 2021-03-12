<?php include('./pesquisa.php'); ?>
<!DOCTYPE html>
<html>

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

<body>
    <main>
        <div class="container">

            <div class="row m-1 p-1">
                <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
                    <div class="text-center">
                        <img src="vagalume.png" class="img-fluid" width=600px height="auto" alt="">
                    </div>
                    <hr>
                </div>
            </div>

        <div class="container">     
            <form class="form-inline col-12" action="" method="POST">
                <div class="text-center">
                    <input type="text" name="cantor" class="col-lg-12 col-md-12 col-sm-12 mt-12" placeholder="Digite o nome do artista" />
                </div>
                <div class="mb-2 mr-2 p-2"> <button name="btSearch" type="submit" class="btn btn-success btSearch">Search</button>
                </div>
            </form>
        </div>


            
            <div class="container">
            <div class="invisible">
                <?php
        if (!empty($artists)) {
      ?>
      </div>
                <div class="text-center">
                <img src="https://api.vagalume.com.br<?php echo $artists->artist->pic_medium ?>" class="img-thumbnail"  alt="<?php echo $artists->artist->desc ?>">
                </div>
                
                <br></br>
                <ul>
                    <?php
          foreach ($artists->artist->lyrics->item as $lyric) {
          $url = explode('/', $lyric->url);
          $name = explode('/', $artists->artist->url);
          $slug = explode('.', $url[2]);
      ?>
                    <li class="list-group-item list-group-item-light" class = "col-lg-4 col-md-4 col-sm-4 mt-4">
                        <a href="./music.php?<?php echo "art={$name[1]}&mus={$slug[0]}" ?>">
                            <?php echo $lyric->desc ?>
                        </a>
                    </li>

                    <?php
          }
      ?>
                </ul>
                <?php
        }
      ?>
            </div>
        </div>

    </main>
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>

