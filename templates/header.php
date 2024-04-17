<?php 
    include 'traduction/traduction.php' ; 
    $currentPage = basename($_SERVER['PHP_SELF']); // Obtient le nom de la page actuelle
?>


<header class="header">
    <nav class="headerR">
        <a class="MonNom" href="index.php">De Franceschi Mohamed</a>
    </nav>
    <div class="headerL">
        <nav class="About" onclick="scrollToMiddle('about-section', '<?php echo $currentPage; ?>')">
            <?php echo $About_text; ?>
        </nav>
        <nav class="Experience" onclick="scrollToMiddle('experience-section', '<?php echo $currentPage; ?>')">
            <?php echo $Experience_text; ?> 
        </nav>
        <nav class="project">
        <a href="project.php"><?php echo $Project_text; ?></a>
        </nav>
        <nav class="Contact">
            <a href="contact.php">Contact</a>
        </nav>
        <nav class="lg">
            <a href="index.php?lang=fr">fr</a>
        </nav>
        <nav class="lg">
            <a href="index.php?lang=en">en</a>
        </nav>
    </div>
    <div class="blackthem">
            <img class="Moon" id="Moon" src="img/darktem.png" alt="them" />
        </div>
    
</header>