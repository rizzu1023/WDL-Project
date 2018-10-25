<?php
    $var="img/movie5.jpg";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
            <div class="navigation__input"><i class="fas fa-search"></i><input type="text" name="#" placeholder="Search Movie, actor & theatre"></div>
            <a href="#"><div class="navigation__div1"><span>Box office</span></div></a>
            <a href="#"><div class="navigation__div2"><span>Theatre</span></div></a>
            <a href="#"><div class="navigation__div3"><span>About us</span></div></a>
            <a href="index.php"><div class="navigation__div4"><span>Home</span></div></a>

    </header>
    <div class="section1__0"><h2>Opening This week</h2></div>

    <section class="section1 sections">
        
        <a href="#"><div class="section1__1"><section><img src="img/movie1.jpg"></section><div><i class="fas fa-star"></i><p>9.4</p><span> Killer</span></div></div></a>
        <a href="#"><div class="section1__1"><section><img src="img/movie2.jpg"></section><div><i class="fas fa-star"></i><p>9.4</p><span> Killer</span></div></div></a>
        <a href="#"><div class="section1__1"><section><img src="img/movie3.jpg"></section><div><i class="fas fa-star"></i><p>9.4</p><span> Killer</span></div></div></a>
        <a href="#"><div class="section1__1"><section><img src="img/movie4.jpg"></section><div><i class="fas fa-star"></i><p>9.4</p><span> Killer</span></div></div></a>
        <a href="#"><div class="section1__1"><section><img src="<?php echo $var ?>"></section><div><i class="fas fa-star"></i><p>9.4</p><span> Killer</span></div></div></a>
        
    </section>
</body>
</html>