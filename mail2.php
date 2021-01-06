<!DOCTYPE HTML>

<html>
    <head>
		<link rel="icon" type="image/png" href="favicon.png" />
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Volleyball Club Morges</title>
		<link href='http://fonts.googleapis.com/css?family=Dosis:800,700,600,500,400,300,200' rel='stylesheet' type='text/css'>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="slides.min.jquery.js"></script>
        <script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 8000,
				pause: 8000,
				slideSpeed: 800,
				preload: true,
				randomize: true,
				hoverPause: false
			});
		});
        </script>
			</head>

    <body>
		<div id="blanc">
			<div id="header">
				<h1 id="logo"><a href="#">Logo Morges VBC</a></h1>
			</div>
                 
            <ul id="nav">
                <li><a class="accueil" href="index.html">Accueil</a></li>            
                <li><a class="club" href="club.html">Présentation</a></li>             
                <li><a class="equipes" href="morgestourix.html">Nos equipes</a></li>              
                <li><a class="membre" href="devenir_membre.html">Devenir membre</a></li>            
                <li class="On"><a class="tournoi" href="tournoi_noel.html">Tournoi de Noël</a></li>       
                <li><a class="photos" href="photos.html">Photos</a></li>            
                <li><a class="contacts" href="contacts.html">Contacts</a></li>
            </ul>
        
            <div class="clear"></div>
            <div id="slides">
                <div class="slides_container" style="border-bottom: #cc3300 solid 2px;">
                    <img src="slider/slide_20.jpg" width="847" height="200" alt="Slide">
                    <img src="slider/slide_30.jpg" width="847" height="200" alt="Slide">
                    <img src="slider/slide_30.jpg" width="847" height="200" alt="Slide">
                    <img src="slider/slide_34.jpg" width="847" height="200" alt="Slide">
                    <img src="slider/slide_35.jpg" width="847" height="200" alt="Slide">
                    <img src="slider/slide_36.jpg" width="847" height="200" alt="Slide">
                    <img src="slider/slide_37.jpg" width="847" height="200" alt="Slide">
                 </div>                    
			</div>
            
            <div id="contenu">
                <h2 id="titre">/// Merci ///</h2>
                <div id="colonne_entiere">
                	<div class="bloc">
						<?php
							define('MAIL_DESTINATAIRE','morgesvbc@gmail.com'); // remplacer par votre email
							define('MAIL_SUJET','Inscription Tournoi de Noel');
							 
							// sinon c'est ok => on continue
								foreach($_POST as $index => $valeur) {
								$$index = stripslashes(trim($valeur));
								}
							 
							//Préparation de l'entête du mail:
								$mail_entete= "MIME-Version: 1.0\r\n";
								$mail_entete.= "From: {$_POST['responsable']} "
											 ."<{$_POST['mailresponsable']}>\r\n";
								$mail_entete.= 'Reply-To: '.$_POST['mailresponsable']."\r\n";
								$mail_entete.= 'Content-Type: text/plain; charset="iso-8859-1"';
								$mail_entete.= "\r\nContent-Transfer-Encoding: 8bit\r\n";
								$mail_entete.= 'X-Mailer:PHP/' . phpversion()."\r\n";
							 
							// préparation du corps du mail
								$mail_corps= "Club: $club\n";
								$mail_corps.= "Equipe: $equipe\n \n";
								$mail_corps.= "Responsable:\n";
								$mail_corps.= "$responsable\n";
								$mail_corps.= "$mailresponsable\n";
								$mail_corps.= "$telresponsable\n\n";
								$mail_corps.= "Commentaire:\n";
								$mail_corps.= "$comments";
							 
							// envoi du mail
							if (mail(MAIL_DESTINATAIRE,MAIL_SUJET,$mail_corps,$mail_entete)) {
							  //Le mail est bien expédié
											?>
											<h4 style="text-align:center; margin-bottom: 0px;">Votre inscription au tournoi de noël sera traitée le plus rapidement possible.</h4>
											<?php
											}
											else
											{
											?>
											<h4 style="text-align:center; margin-bottom: 0px;">Désolé, le tournoi de Noël est déjà complet pour cette année.</h4>
											<?php
											}
										?>
    
                    </div>
				</div>
            </div>
		</div>
		<div id="footer">
			<p>Copyright © 2017 - Volleyball Club Morges</p>
            <a id="morges" href="http://www.morges.ch/fr/" target=_blank>
            <a id="volley" href="http://www.volleyball.ch/" target=_blank>
		</div>            
    </body>
</html>