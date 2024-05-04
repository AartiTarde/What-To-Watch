
<?php
session_start();

if(isset($_POST['button']))
{
	$selected_button = $_POST['button'];
	$_SESSION['selected_button'] = $selected_button;
}
?>
<html>
    <head>
        <title> Preference</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="pref11.css">
        
      
    </head>
    
    <body style="background-color:#4c4949;">
        
        <div class="container" >
            
            <div class ="d1">
            <form action="content1.php" method="post">
            <h1><b>Select your preference</b></h1>
            <div id="radios">
           
        
                <label for="romance" class="material-icons">
        
                    <input type="radio" name="radio" value="radio1">
                    <span><img src="heart.svg" id="img2"></span>

                </label>								
                <label for="comedy" class="material-icons">
                    <input type="radio" name="radio" id="comedy" value="radio2">
                    
                    <span><img src="comedy.svg" id="img2"></span>
                </label>
                <label for="horror" class="material-icons">
                    <input type="radio" name="radio" id="horror" value="radio3">
                    <span><img src="sad.svg" id="img2"></span>
                </label>
                <label for="fantasy" class="material-icons">
                    <input type="radio" name="radio" id="action" value="radio4">
                    <span><img src="magic.svg" id="img2"></span>
                </label>
                
            </div>
            
        </div>
        <br><br><br><br><br>
    <button type="submit" id="btn">Submit</button>
    <button><a href="main1.php">Back</a></button>
</form>
    </div>
</body>
</html>