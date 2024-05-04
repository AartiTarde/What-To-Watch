<html>
	<head>
	<style>
		
		body{background-color: black; color: white;}
		.img-block{float: left; margin-right: 5px; text-align: center;}
		img{
			width: 380px; 
			min-height: 250px;
			margin-bottom: 10px; 
			box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; 
			border:6px solid #f7f7f7;
			width:800px;
			height:400px;
		}
		h3{
			width:300px;
			height:30px;
			border:3px double white;
			margin-left:580px;
			text-align:center;
			box-shadow:3px 3px 3px;
			
		}
		button{
			color:white;
			background-color:white;
			border:2px solid white;
			width:200px;
			height:35px;
		}
		a{
			text-decoration: none;
		}
	</style></head>
	<div><button><a href="main1.php">BACK</a></button>
</div>
	<?php
// Start session
session_start();

// Check if a selection has been made
if(isset($_SESSION['selected_button']) && isset($_POST['radio'])) {
	// Get the selected button and radio button value from session
	$selected_button = $_SESSION['selected_button'];
	$selected_radio = $_POST['radio'];

	$host = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'display_images';

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}


	if($selected_button == 'button1') {
		if($selected_radio == 'radio1') {
			$sql = "SELECT * FROM table1";
		} elseif($selected_radio == 'radio2') {
			$sql = "SELECT * FROM table2";
		} elseif($selected_radio == 'radio3') {
			$sql = "SELECT * FROM table3";
		} elseif($selected_radio == 'radio4') {
			$sql = "SELECT * FROM table4";
		}
	} elseif($selected_button == 'button2') {
		if($selected_radio == 'radio1') {
			$sql = "SELECT * FROM btable1";
		} elseif($selected_radio == 'radio2') {
			$sql = "SELECT * FROM btable2";
		} elseif($selected_radio == 'radio3') {
			$sql = "SELECT * FROM btable3";
		} elseif($selected_radio == 'radio4') {
			$sql = "SELECT * FROM btable4";
		}
	}
 elseif($selected_button == 'button3') {
	if($selected_radio == 'radio1') {
		$sql = "SELECT * FROM stable1";
	} elseif($selected_radio == 'radio2') {
		$sql = "SELECT * FROM stable2";
	} elseif($selected_radio == 'radio3') {
		$sql = "SELECT * FROM stable3";
	} elseif($selected_radio == 'radio4') {
		$sql = "SELECT * FROM stable4";
	}

	} elseif($selected_button == 'button4') {
		if($selected_radio == 'radio1') {
			$sql = "SELECT * FROM atable1";
		} elseif($selected_radio == 'radio2') {
			$sql = "SELECT * FROM atable2";
		} elseif($selected_radio == 'radio3') {
			$sql = "SELECT * FROM atable3";
		} elseif($selected_radio == 'radio4') {
			$sql = "SELECT * FROM atable4";
		}
	}
	$result = mysqli_query($conn, $sql);

	// Display data in HTML table
	//if (mysqli_num_rows($result) > 0) 
	while($rows = mysqli_fetch_array($result))
	{
		$name = $rows['name'];
		$images = $rows['images'];
		$info = $rows['info'];
		$rating = $rows['rating'];
	}
	?>
	

	<div class="img-block">
	<h2><strong><?php echo $name; ?></strong></h2><br>
	<img src="<?php echo $images; ?>" alt="" title="<?php echo $name; ?>" class="img-responsive" /><br>
	<p><?php echo $info; ?></p><br>
	<p><h3>Rating :<b><?php echo $rating; ?></h3></b></p><br>
	
	</div>
	
	<?php
	}

	// Close MySQL connection
	mysqli_close($conn);
} 
?>
</html>
