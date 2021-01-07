<!DOCTYPE HTML>

<html>
    <head>
		<link rel="icon" type="image/png" href="favicon.png" />
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Volleyball Club Morges</title>
		<link href='https://fonts.googleapis.com/css?family=Dosis:800,700,600,500,400,300,200' 
        rel='stylesheet' type='text/css'>
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
		
			<?php  
            // We'll use PHP's session handling to keep track of the server-generated key  
              
            session_start();  
              
            // Function to generate a random key.  
            // Modified from code found at: http://www.totallyphp.co.uk/code/create_a_random_password.htm  
              
            function randomString($length) {  
                $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";  
                $str = NULL;  
                $i = 0;  
                while ($i < $length) {  
                    $num = rand(0, 61);  
                    $tmp = substr($chars, $num, 1);  
                    $str .= $tmp;  
                    $i++;  
                }  
                return $str;  
            }  
              
            // Call the function and set the shared key  
              
            $key = $_SESSION['key'] = randomString(20);  
            ?>   
                <!-- JavaScript that contains the functions which perform the actual hashing -->  
                <script type="text/javascript" src="http://pajhome.org.uk/crypt/md5/sha1.js"></script>  
              
                <!-- The following function creates the hash of the concatenated key and password hash  
            and submits the content to the server via a form -->  
                <script type="text/javascript">  
                function login() {  
                    var p = hex_sha1(document.getElementById('pass').value);  
                    var k = document.getElementById('key').value;  
                    var h = hex_sha1(k+p);  
                    var hash = document.getElementById('hash');  
                    hash.value = h;  
                    var f = document.getElementById('finalform');  
                    f.submit();  
                }  
                </script>  
	</head> 
              
               
	<body>
		<div id="blanc">
			<div id="header">
				<h1 id="logo"><a href="index.html">Logo Morges VBC</a></h1>
			</div>
                 
			<ul id="nav">
                <li><a class="accueil" href="index.html">Accueil</a></li>            
                <li><a class="club" href="club.html">Présentation</a>
                    <ul class="sousMenu">
                       <li><a href="club.html">Le club</a>
                       <li><a href="membres_comite.html">Membres du comité</a></li>
                       <li><a href="partenaires.html">Nos partenaires</a></li>
                    </ul>
                </li>             
                <li><a class="equipes" href="morgestourix.html">Nos equipes</a></li>              
                <li><a class="membre" href="devenir_membre.html">Devenir membre</a></li>            
                <li><a class="tournoi" href="tournoi_noel.html">Tournoi de Noël</a></li>            
                <li><a class="photos" href="photos.html">Photos</a></li>            
                <li><a class="contacts" href="contacts.html">Contacts</a></li>
            </ul>
            
            <div class="clear"></div>
            <div id="slides">
                <div class="slides_container">
                    <img src="slider/slide_06.jpg" width="847" height="200" alt="Slide">
                    <img src="slider/slide_27.jpg" width="847" height="200" alt="Slide">
                 </div>                    
			</div>
            
            <div id="contenu">
                <h2 id="titre">/// Zone membre ///</h2>
                
                <div id="colonne_petite_gauche">
                	<div class="bloc">
						<h4>Connection</h4>
                            <form action="javascript:login()" method="post" name="login">  
                            <input type="hidden" id="key" value="<?php echo $key; ?>" />
                    	<table>
                            <tr>
								<td>
                          		  	Nom d'utilisateur:<br/><input type="text" name="username" id="username">              
                                </td>
                           </tr>
                            <tr>
								<td>
									Mot de passe:<br/><input type="password" name="password"id="pass" />
                                </td>
                           </tr>

                        </table> 
                                
                            </p> 
                            <input type="submit" value="Login" />  
                            </form>
                              
                            <form action="login.php" method="post" id="finalform">  
                            <input type="hidden" name="hash" id="hash" />  
                            </form>
					</div> 	
				</div> 
			</div> 
		</div>   
		<div id="footer">
			<p>Copyright © 2021 - Volleyball Club Morges</p>
        	<a id="morges" href="https://www.morges.ch/" target=_blank></a>
        	<a id="volley" href="http://www.volleyball.ch/" target=_blank></a>
		</div>            
	</body>
</html>