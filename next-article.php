<?php include("connect-to-table.php"); ?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&family=Poppins:wght@100&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link rel ="icon" href="logo.png">
        <title>NEWSIC - Новости музыки</title>
    </head>
    <body>
      <nav class="navbar navbar-dark"> 
        <div class="container"> 
            <a class="navbar-brand" href="index.html"><img src="logo.png" alt="Logo" width="38" height="38" class="d-inline-block align-text-top">
              NEWSIC
            </a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> 
              <span class="navbar-toggler-icon"></span> 
            </button> 
            <div class="collapse navbar-collapse" id="navbarNav"> 
                <ul class="navbar-nav ml-auto"> 
                    <li class="nav-item"> 
                        <a class="nav-link scroll-link" href="index.html">Новости</a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link scroll-link" href="about.html">О нас</a> 
                    </li> 
                </ul> 
            </div> 
   
        </div> 
    </nav>

    <?php include("loading-id.php")?>
    <div>

    </div>

           <footer class="bottom-panel">
            Якобюк Анастасия, Гурин Андрей, НГТУ 2023
        </footer>
    </body>
</html>