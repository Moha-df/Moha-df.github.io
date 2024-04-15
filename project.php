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
        <button class="ProjectButton" id="btnGetData">Click to scroll through my projects</button>
    </section>

    <section class="ProjectScroll pScrollHidden">
        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <ul class="carousel">
                 <!-- Ici lappel ajax va recuperers les donnes de la base de donnes -->
            </ul>
            <i id="right" class="fa-solid fa-angle-right"></i>
        </div>  
    </section>

    
    <!-- Footer -->
    <?php include 'templates/footer.php';?>
    <!-- / -->
    
</body>
</html>
