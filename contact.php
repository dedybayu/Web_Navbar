

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SAKLAR WEB</title>
	<style>
body {
  font-size: 18px;
  background-color: rgba(165,251,201,1.00);
	padding: 0;
	margin:  0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
  float: right;
	text-align: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #E0272A;
	color: rgba(74,214,221,1.00);
}

.active {
  background-color: #7F4B23;
}
</style>
</head>


  <body>
	  
	  <ul>	
  	<li><a href="#">LOG OUT</a></li>
	<li><a class="active" href="contact.php">Contact</a></li>
	<li><a href="#news">News</a></li>
	<li><a href="home.php">Home</a></li>
	</ul>
	


    <div style="padding: 150px">
	<h3>kontak hubungi kami</h3>
		<div>
			<form method="get" action="index.php">
                		<input type="submit" value="ON" name="on">
                		<input type="submit" value="OFF" name="off">
        		</form>
		
        		<?php	
				$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 21 out");
        			if(isset($_GET['on'])){
                			$gpio_on = shell_exec("/usr/local/bin/gpio -g write 21 0");
                			echo "Lampu 1 Hidup";
        			}
        			else if(isset($_GET['off'])){
                			$gpio_off = shell_exec("/usr/local/bin/gpio -g write 21 1");
                			echo "Lampu 1 Mati";
        			}
        		?>	
		</div>  
	</div>
    <!-- Script -->
    <script src="script.js"></script>
  </body>
</html>