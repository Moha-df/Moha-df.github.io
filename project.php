<html>
<head>
    <?php include 'templates/head.php';?>
    <!-- Juste un lien pour des icones de fleches -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body class="body">
    <div class="cursor-dot" data-cursor-dot></div>
    <div class="cursor-outline" data-cursor-outline></div>
    
    <!-- Header -->
    <?php include 'templates/header.php';?>
    <!-- / -->

    <!--<section class="ProjectHere">
        <p class="ProjectTxt">All my project</p>
        <p class="ProjectTxt">here</p>
        <button class=ProjectButton>Click to scroll through my projects</button>
    </section>-->

    <section class="ProjectScroll">
        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <ul class="carousel">
                <li class="card">
                    <div class="img"><img src="img/sokoban.png" alt="sokoban" draggable="false"></div>
                    <h2>Sokoban Game</h2>
                    <span>Language C</span>
                </li>
                <li class="card">
                    <div class="img"><img src="img/spaceinvader.jpeg" alt="space invader" draggable="false"></div>
                    <h2>Space Invader</h2>
                    <span>Language Risk V</span>
                </li>
                <li class="card">
                    <div class="img"><img src="img/studium.jpg" alt="unistra bibliotheque" draggable="false"></div>
                    <h2>Web S2</h2>
                    <span>Language HTML CSS JS</span>
                </li>
                <li class="card">
                    <div class="img"><img src="img/portfolio.jpg" alt="portoflio" draggable="false"></div>
                    <h2>Web S2</h2>
                    <span>Language HTML CSS JS</span>
                </li>
                <li class="card">
                    <div class="img"><img src="img/ue5.png" alt="ue5 3d" draggable="false"></div>
                    <h2>UE5 game</h2>
                    <span>UE5 and Blender</span>
                </li>
            </ul>
            <i id="right" class="fa-solid fa-angle-right"></i>
        </div>  
    </section>

    
    <!-- Footer -->
    <?php include 'templates/footer.php';?>
    <!-- / -->
    
</body>
</html>
