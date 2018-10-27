
<!DOCTYPE html>
<html lang="en" style="font-size:18px">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    
</head>
<body>
    <header class="header">
        <nav class="navigation">
            <div class="navigation__icon"><a href="login.php"><i class="fas fa-user"></i></a></div>
            <div class="navigation__movie"><h3 class="navigation__naac-h3">Movies</h3></div>
            <!-- <div class="navigation__input"><i class="fas fa-search"></i><input type="text" name="#" placeholder="Search Movie, actor & theatre"></div> -->
            <a href="ongoing.php"><div class="navigation__div1"><span>Ongoing</span></div></a>
            <a href="office.php"><div class="navigation__div2"><span>Box Office</span></div></a>
            <a href="#"><div class="navigation__div3"><span>About us</span></div></a>
            <a href="index.php"><div class="navigation__div4"><span>Home</span></div></a>
        </nav>
    </header>
    <!-- <div class="section1__0 title1"><h2></h2></div> -->
    


    <div class="section1__0 title1"><h2>Top Rated Movies</h2></div>
    

     <!-- <div class="section1__1"><h2>Opening This week</h2></div> -->
    <?php
    // ini_set('display_errors',1);error_reporting(E_ALL);
    
    require_once "PHP/functions.php";


    // $var="img/movie5.jpg";
    $q="SELECT * from detail where id<11 ";

    $result=Query($q)

    ?>

    <section class="section1 sections">
    <?php
    
    while($row=$result->fetch_assoc()){
        $src=$row['movie_name'].".jpg";
        $movie=$row['movie_name'];
        ?>
        <a href="movie.php?id=<?php echo $movie; ?>"><div class="section1__1"><section><img src="img/<?php echo $src?>"></section><div><i class="fas fa-star"></i><p><?php echo $row['movie_rating']?></p><span><?php echo $row['movie_name']?></span></div></div></a>
         <!-- <a href="#"><div class="section1__1"><section><img src="img/movie2.jpg"></section><div><i class="fas fa-star"></i><p>9.4</p><span> Killer</span></div></div></a> -->
        <!-- // <a href="#"><div class="section1__1"><section><img src="img/movie3.jpg"></section><div><i class="fas fa-star"></i><p>9.4</p><span> Killer</span></div></div></a> -->
        <!-- // <a href="#"><div class="section1__1"><section><img src="img/movie4.jpg"></section><div><i class="fas fa-star"></i><p>9.4</p><span> Killer</span></div></div></a> -->
        <!-- // <a href="#"><div class="section1__1"><section><img src=""></section><div><i class="fas fa-star"></i><p>9.4</p><span> Killer</span></div></div></a> -->
    <?php } ?>

    </section>

   

    <footer>
	<div class="grid">
		<div class="Lgrid">
			<div class="location"><i class="fas fa-map-marker-alt fa-2x"></i><span>AIKTC, New Panvel</span></div>
			<div class="phoneNo"><i class="fas fa-phone fa-2x"></i><span>+91,88884444</span></div>
			<div class="mail"><i class="far fa-envelope fa-2x"></i><span>support@company.com</span></div>
		</div>
		<div class="Rgrid">
			<div class="cHead">Movies</div>
			<div class="cBody">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.
			</div>
			<div class="social">
				<i class="fab fa-facebook-square fa-3x" style="margin-right: 15px"></i>
				<i class="fab fa-twitter-square fa-3x" style="margin-right: 15px"></i>
				<i class="fab fa-instagram fa-3x" style="margin-right: 15px"></i>
				<i class="fab fa-linkedin fa-3x" ></i>
			</div>
		</div>
	</div>


</footer>
</body>
</html>
