<?php
session_start();
?>

<html>
    <head>
        <title>What To Watch</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
    
    <form action="preference1.php" method="post">
    
      <div class="id">
      
        <div id="header"><h1>What to Watch</h1></div>
        
        <button onclick="fun()">REVIEW</a></button>

        <h2>You Can't Decide</h2>
        <h2>We recommend you the best picks!</h2>
        <div class="main">
          
          <div id="id1"><button type="submit" name="button" value="button1">HOLLYWOOD</button></div>
          <div id="id2"><button type="submit" name="button" value="button2">BOLLYWOOD</button></div>
          <div id="id3"><button type="submit" name="button" value="button3">SERIES</button></div>
          <div id="id4"><button type="submit" name="button" value="button4">ANIME</button></div>
          </form>
        </div>
      <script>
        function fun()
        {
            window.open("pop1.php");
        }
        </script>
    </body>
</html>