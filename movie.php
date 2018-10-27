<?php
    // ini_set('display_errors',1);error_reporting(E_ALL);
    
    require_once "PHP/functions.php";


    // $var="img/movie5.jpg";
    
// echo $_GET['id'];
    //print_r($_GET);
    
    $x = $_GET;
    // print_r (explode(" -",$x));
    $new= $x['id'];
    // echo substr("$new",0,-3);
    

    $q="SELECT * from detail where movie_name='$new'";
    $result=Query($q);
    

    // echo $GET['movie'];

    //  if(isset($_GET['id']) && $_GET['id'] !== ''){
    //      $movie = $_GET['id'];
    //      print_r($movie);
    //    }
      
    ?>

<!DOCTYPE html>
<html lang="en" style="font-size:18px">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
<header class="header">
        <nav class="navigation">
            <div class="navigation__icon"><a href="login.php"><i class="fas fa-user"></i></a></div>
            <div class="navigation__movie"><h3 class="navigation__naac-h3">Movies</h3></div>
            <!-- <div class="navigation__input"><i class="fas fa-search"></i><input type="text" name="#" placeholder="Search Movie, actor & theatre"></div> -->
            <!-- <a href="#"><div class="navigation__div1"><span>Box office</span></div></a> -->
            <!-- <a href="#"><div class="navigation__div2"><span>Theatre</span></div></a> -->
            <a href="#"><div class="navigation__div3"><span>About us</span></div></a>
            <a href="index.php"><div class="navigation__div4"><span>Home</span></div></a>
            </nav>
</header>

        <section class="strong">
        <?php
   
   while($row=$result->fetch_assoc()){
       $src=$row['movie_name'].".jpg";
       ?>
                <div class="strong__1"><img src="img/<?php echo $src?>"><h1><?php echo $row['movie_name'];?></h1><strong><?php echo $row['movie_rating'];?></strong></div>
                <div class="strong__2"><h3>Date of release :</h3><span><?php echo $row['movie_date'];?></span></div>
                <div class="strong__3"><h3>Director :</h3><span><?php echo $row['movie_director'];?></span></div>
                <div class="strong__4"><h3>Duration :</h3><span><?php echo $row['movie_time'];?></span></div>
                <div class="strong__5"><h3>Storyline :</h3><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, rem quibusdam sit nemo inventore, assumenda tempora excepturi recusandae minima libero fuga animi dolor quaerat et iusto aspernatur, autem quam. Unde tempore dolores harum vitae eaque voluptates. Necessitatibus mollitia voluptates expedita exercitationem nulla, explicabo quisquam minima deserunt ut voluptatum. Incidunt sed excepturi quae esse! Aliquid perspiciatis magni omnis quis, dignissimos fugiat in nobis nisi officiis asperiores eligendi alias doloribus excepturi accusamus debitis minima modi delectus. Ad quis, accusantium beatae voluptates sit in esse amet laborum sunt quam, repellendus maxime impedit sequi! Unde sint et fugiat sapiente voluptates pariatur dicta, alias, assumenda cupiditate esse dolor asperiores ratione totam, quisquam rerum. Deserunt cumque dignissimos ducimus. Corporis doloremque molestias quidem hic alias officiis assumenda culpa blanditiis deleniti vel quaerat corrupti nisi, architecto dolor ea, rerum temporibus necessitatibus? Quis, veritatis? Omnis saepe id totam quae veritatis deserunt magnam tenetur. Tempore consectetur perferendis obcaecati quod iusto?</   p></div>
   <?php } ?>
        </section>
        
</body>
</html>