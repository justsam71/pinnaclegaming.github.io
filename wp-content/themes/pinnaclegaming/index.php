<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/functions.php">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only (это ссылка на файл таблицы стилей Bootstrap, расположенный на удаленном сервере)-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <title>PinnacleGaming</title>


</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    <div class="bgPanda imgBrdr">
    <nav class="navbar navbar-expand-lg navbar-dark navbarCollor imgBrdr">
        <div class="container-fluid d-flex justify-content-between align-items-center">
    <a class="navbar-brand" href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/red.svg" class="logo" alt="">
    </a>
    <div class="flex-container">
    	<div class="nav-link logoTXTbig">PINNACLE GAMING</div>
    	<div class="nav-link logoTXTlittle">Play only quality games!</div>
	</div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto myNavtxt">
            <li class="nav-item px-2">
                <a class="nav-link" href="#games">Games</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="#aboutUs">About Us</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="#vacancies">Vacancies</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="#contacts">Contact Us</a>
            </li>
        </ul>
    </div>
    </nav>

	<div class="container">
    	<div class="row align-items-center containerSwitch">
        	<div class="col-md-6 pl-5 mb-5">
            	<div class=" bigTxt align-items-center pt-5 firstBlockTxt firstBlockTxt text1_800">Pinnacle Game Dev</div>
            	<div class="mainTxt align-items-center text1_800">This is a website for a fictional company <br> that develops games!</div>
        	</div>
        	<div class="col-md-6 mb-5">
            	<a><img class="image left50" src="<?php echo get_template_directory_uri(); ?>/assets/circleNeon.png" alt="Error"></a>
        	</div>
    	</div>
	</div>

	<div class="bigTxt text-center underline" id="aboutUs">About Us:</div>
<div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-4">
            <div class="image-container">
                <img class="square_image" src="<?php echo get_template_directory_uri(); ?>/assets/textFrame.png" alt="">
                <div class="text-overlay ">
                    <p><?php echo carbon_get_theme_option('about1'); ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="image-container">
                <img class="square_image" src="<?php echo get_template_directory_uri(); ?>/assets/textFrame.png" alt="">
                <div class="text-overlay ">
                    <p><?php echo carbon_get_theme_option('about2'); ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="image-container">
                <img class="square_image" src="<?php echo get_template_directory_uri(); ?>/assets/textFrame.png" alt="">
                <div class="text-overlay">
                    <p><?php echo carbon_get_theme_option('about3'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>	
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</div>
<main>
<div class="bigTxt text-center moveTop underline">Our Games:</div>
<br>
<br>

<div class="container" id="games">
    <div class="row">
        <div class="col-md-6">
        	<div class="gameTxtBlock">
            	<div class="bigTxt"><?php echo carbon_get_theme_option('game_name1'); ?></div>
            	<div class="mainTxt"><?php echo carbon_get_theme_option('game_description1'); ?></div>
        	</div>
        </div>
        <div class="col-md-6">
            <div class="image-container text-center">
                <a href="https://github.com/" target="_blank">
                    <img class="circleImage" src="<?php echo get_template_directory_uri(); ?>/assets/TOWApic.png" alt="Error">
                    <div class="image-text">PLAY NOW</div>
                </a>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row containerSwitch2">
        <div class="col-md-6">
            <div class="image-container text-center">
                <a href="https://github.com/" target="_blank">
                    <img class="circleImage" src="<?php echo get_template_directory_uri(); ?>/assets/catPIC.png" alt="Error">
                    <div class="image-text">PLAY NOW</div>
                </a>
            </div>
        </div>
        <div class="col-md-6">
        	<div class="gameTxtBlock">
            	<div class="bigTxt"><?php echo carbon_get_theme_option('game_name2'); ?></div>
            	<div class="mainTxt"><?php echo carbon_get_theme_option('game_description1'); ?></div>
        	</div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
	        <div class="gameTxtBlock">
	            <div class="bigTxt"><?php echo carbon_get_theme_option('game_name3'); ?></div>
	            <div class="mainTxt"><?php echo carbon_get_theme_option('game_description1'); ?></div>
	        </div>
        </div>
        <div class="col-md-6">
            <div class="image-container text-center">
                <a href="https://github.com/" target="_blank">
                    <img class="circleImage" src="<?php echo get_template_directory_uri(); ?>/assets/kimodameshi.png" alt="Error">
                    <div class="image-text">PLAY NOW</div>
                </a>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
</main>
<footer>
	<div class="bigTxt text-center underline moveTop" id="vacancies"><br>Vacancies:</div>
	<br>
	<br>
	<div class="container">
    <div class="row ml-1">
        <div class="col-lg-6 mb-5">
            <div class="image-container">
                <div class="square"></div>
                <div class="text-overlay2">
                    <div class="bigTxt"><?php echo carbon_get_theme_option('vacancy_name1'); ?> </div>
                    <p><?php echo carbon_get_theme_option('vacancy_description1'); ?> </p>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="image-container">
                <div class="square"></div>
                <div class="text-overlay2">
                    <div class="bigTxt"><?php echo carbon_get_theme_option('vacancy_name2'); ?> </div>
                    <p><?php echo carbon_get_theme_option('vacancy_description2'); ?> </p></p>
                </div>
            </div>
        </div>
    </div>
</div>	
		
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container contactBlock">
    <div class="bigTxt underline" id="contacts">CONTACTS</div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="mainTxt">TELEPHONE:</div>
            <div class="mainTxt"><?php echo carbon_get_theme_option('site_phone'); ?> </div>
        </div>
        <div class="col-md-4">
            <div class="mainTxt">ADDRESS:</div>
                <div class="mainTxt"><?php echo carbon_get_theme_option('site_address'); ?></div>
        </div>
        <div class="col-md-4">
            <div class="mainTxt">EMAIL:</div>
            <div class="mainTxt"><?php echo carbon_get_theme_option('site_mail'); ?></div>
        </div>
    </div>
</div>
<br>
</footer>
</body>


