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

    <section class="ProjectHere">
        <p class="ProjectTxt">All my project</p>
        <p class="ProjectTxt">here</p>
        <button class=ProjectButton>Click to scroll through my projects</button>
    </section>

    <section class="ProjectScroll">
        <div class="wrapper">
            <i class="fa-solid fa-angle-left"></i>
            <ul class="carousel">
                <li class="card">
                    <div class="img"><img src="img/sokoban.png" alt="sokoban"></div>
                    <h2>Sokoban Game</h2>
                    <span>Language C</span>
                </li>
                <li class="card">
                    <div class="img"><img src="img/spaceinvader.jpeg" alt="space invader"></div>
                    <h2>Space Invader</h2>
                    <span>Language Risk V</span>
                </li>
                <li class="card">
                    <div class="img"><img src="img/studium.jpg" alt="unistra bibliotheque"></div>
                    <h2>Web S2</h2>
                    <span>Language HTML CSS JS</span>
                </li>
            </ul>
            <i class="fa-solid fa-angle-right"></i>
        </div>  
    </section>

    <!-- https://www.youtube.com/watch?v=6QE8dXq9SOE -->
    <!-- Pour l'appel ajax prendre exemple de : https://git.unistra.fr/fbonjour-progweb2/projet-zombie-l2s4ptd2/-/blob/main/assets/js/search_form.js?ref_type=heads -->

    <!-- Footer -->
    <?php include 'templates/footer.php';?>
    <!-- / -->
    
</body>
</html>
