<html>
<head>
    <?php include 'templates/head.php';?>
</head>

<body class="body">
    <div class="cursor-dot" data-cursor-dot></div>
    <div class="cursor-outline" data-cursor-outline></div>
    
    <!-- Header -->
    <?php include 'templates/header.php';?>
    <!-- / -->

    <section class="pdpPage">
        <div class="pp">
            <img class="luffypp" src="img/moi.jpg" alt="Photo de moi" title="pp" />
            
        </div>
        <div class="rpp">
            <div class="txtrpp">
                <p class="hi">
                    <?php echo $HiIm_text; ?>
                </p>
                <h1 class="monblaz">
                    Mohamed De Franceschi
                </h1>
                <h2 class="student">
                    <?php echo $Student_text; ?>
                </h2>
            </div>
            <div class="buttonrpp">
                <div class="cv">
                    <a href="img/cv.pdf" download>
                        <?php echo $CV_text; ?>
                    </a> 
                </div>
                <div class="contactInfo">
                    <a href="contact.php">
                        <?php echo $cInfo_text; ?>
                    </a> 
                </div>
            </div>
            <div class="svgrpp">
                <a href="https://discord.gg/m4dpCTNs" target="_blank"><svg class="svglogo" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                    <path d="M42.298,11.65c-0.676-1.021-1.633-1.802-2.768-2.256c-2.464-0.988-4.583-1.648-6.479-2.02	C31.721,7.114,30.404,7.768,29.771,9l-0.158,0.308c-1.404-0.155-2.895-0.207-4.593-0.164c-1.741-0.042-3.237,0.009-4.643,0.164	L20.22,9c-0.633-1.232-1.952-1.885-3.279-1.625c-1.896,0.371-4.016,1.031-6.479,2.02c-1.134,0.454-2.091,1.234-2.768,2.256	c-4.721,7.131-6.571,14.823-5.655,23.517c0.032,0.305,0.202,0.578,0.461,0.741c3.632,2.29,6.775,3.858,9.891,4.936	c1.303,0.455,2.748-0.054,3.517-1.229l1.371-2.101c-1.092-0.412-2.158-0.9-3.18-1.483c-0.479-0.273-0.646-0.884-0.373-1.363	c0.273-0.481,0.884-0.65,1.364-0.373c3.041,1.734,6.479,2.651,9.942,2.651s6.901-0.917,9.942-2.651	c0.479-0.277,1.09-0.108,1.364,0.373c0.273,0.479,0.106,1.09-0.373,1.363c-1.056,0.603-2.16,1.105-3.291,1.524l1.411,2.102	c0.581,0.865,1.54,1.357,2.528,1.357c0.322,0,0.647-0.053,0.963-0.161c3.125-1.079,6.274-2.649,9.914-4.944	c0.259-0.163,0.429-0.437,0.461-0.741C48.869,26.474,47.019,18.781,42.298,11.65z M18.608,28.983c-1.926,0-3.511-2.029-3.511-4.495	c0-2.466,1.585-4.495,3.511-4.495s3.511,2.029,3.511,4.495C22.119,26.954,20.534,28.983,18.608,28.983z M31.601,28.957	c-1.908,0-3.478-2.041-3.478-4.522s1.57-4.522,3.478-4.522c1.908,0,3.478,2.041,3.478,4.522S33.509,28.957,31.601,28.957z"></path>
                </svg></a>
                <a href="https://github.com/Moha-df" target="_blank"><svg class="svglogo" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30">
                    <path d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z"></path>
                </svg></a>
                
            </div>
        </div>
    </section>

    <section class="AboutSection hidden" id="about-section">
        <p class="AboutSectionTxt1"><?php echo $Get2_text; ?></p>
        <h2 class="AboutSectionTxt2"><?php echo $AboutMe_text; ?></h2>
    </section>

    <section class="ExperienceSection" id="experience-section">
        <div class="ExperienceSectionLeft hidden">
            <img class="luffypp2" src="img/luffy.jpg" alt="photo de moi 2" title="pp2" />
        </div>
        <div class="ExperienceSectionRight">
            <div class="ExperienceSectionRTop">
                <div class="ExperienceEncadrer ExperienceEncadrer1 hidden">
                    <img class="ExperienceEncadrerImg ExperienceTxt" src="img/medal.svg" alt="medal" title="medal" />
                    <h3 class="ExperienceEncadrerTitle ExperienceTxt">Experience</h3>
                    <p class="ExperienceEncadrerTxt ExperienceTxt"><?php echo $scnd_text; ?></p>
                    <p class="ExperienceEncadrerTxt2 ExperienceTxt"><?php echo $Lotof_text; ?></p>
                </div>
                <div class="ExperienceEncadrer ExperienceEncadrer2 hidden">
                    <img class="ExperienceEncadrerImg ExperienceTxt" src="img/smiley.svg" alt="smiley" title="smiley" />
                    <h3 class="ExperienceEncadrerTitle ExperienceTxt">Language</h3>
                    <p class="ExperienceEncadrerTxt ExperienceTxt">html css js</p>
                    <p class="ExperienceEncadrerTxt2 ExperienceTxt">python c java</p>
                </div>
            </div>
            <p class="ExperienceSectionRBottom hidden">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
            </p>
        </div>
    </section>

    <?php include 'templates/footer.php';?>

    
</body>
</html>
