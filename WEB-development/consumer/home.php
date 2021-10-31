<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Consumer</title>
</head>
<body>
    <?php include 'index.php';?>
    <section class="nav_1">
        <div class="logo">
            <h1 style="font-family: sans-serif;
            font-size: 22px; font-weight: 300; color: rgb(255, 255, 255);">FoodForGood</h1>
        </div>
    </section>
    <div class="links">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav overflow-auto">
                    <li class="nav-item">
                        <a class="nav-link ms-3" href="#">Home</a>
                    </li>
                  <?php
                  $row = ['BEVERAGES', 'DIARY', 'DOUGH', 'PASTA', 'PESTO', 'SOY', 'FISH',
                  'SHELLFISH', 'SMOKEDFISH', 'FRESH_MEAT', 'PROCESSED_MEAT',
                  'FRESH_POULTRY', 'PROCESSED_POULTRY', 'FRUIT', 'VEGETABLES',
                  'FROZEN_ITEM', 'DELI_ITEM', 'SHELF_ITEM', 'BAKING', 'CONDIMENTS',
                  'COOKIES', 'CRACKERS', 'BAKERY'];
                  foreach($row as $value){
                  echo '<li class="nav-item">';
                  echo  '<a class="nav-link ms-3" id="" href="#">'.$value.'</a>';
                  echo '</li>';
                  }
                  ?>

                  
                  
                </ul>
              </div>
            </div>
          </nav>
    </div>

    <section class="body_part">
        <div class="content">
            <div class="heading"><h1>Recommended Items</h1></div>
            <div class="line">
                <hr>
            </div>
    
            <div class="items">
                <div class="cart">
                    <h2 class="item_name">Fish</h2>
                    <h4 class="item_period">5 day</h4>
                </div>
                    <?php
                    while($row=mysqli_fetch_array($result)){
                  
                      $type = $row[2];
                      $period =$row[3];
                      echo '<div class="cart">';
                      echo '<h2 class="item_name">'.$type.'</h2>';
                      echo '<h4 class="item_period">'.$period.'</h4>';
                      echo '</div>';
                    }
                    ?>
               
            </div>
        </div>
    
    </section>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        const array=['hello','welocme','want'];


    </script>
</body>
</html>