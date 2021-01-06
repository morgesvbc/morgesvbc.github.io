<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <title>Document sans titre</title>
        <script src="slides.min.jquery.js"></script>
        <?php  
        session_start();  
        $hash = $_POST['hash'];  

        $pass = sha1('biscuit13');
        $key = $_SESSION['key'];  
          
        $server_hash = sha1($key.$pass);  
          
        if  ($server_hash == $hash)
			{
			include('vip.html');
			}
		else
			{
			header('Location: main.php');  
			exit();
			}
  
        ?>  
    
    </head>
</html>
