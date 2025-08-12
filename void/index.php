<html>
<head>
 /* <script>
if(iPhone)
{
      document.write("<meta name="viewport" content=\"width=480\""+"/>");
}
else // iPad
{
     document.write("<meta name="viewport" content=\"width=1024\""+"/>");
}
*/</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Verse Of The Day</title>
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/indexa.css">
<link rel="stylesheet" href="/css/clouds.css">
<link rel="stylesheet" href="/css/sun.css">
</head>
<body>
	<div class="flex-container">
		<div class="myheader">
			<h1 id="myHeader">Verse of the day</h1>
			<br />
			<nav>
			  <ul class="flex">
				<li><a href="/index.html"><strong>Home</strong></a></li>	
				<li><a href="indexa.php"><strong>Verses</strong></a></li>
				<li><a href="veroday.html"><strong>Verse of the day</strong></a></li>
				<li><a href="gp/"><strong>VOD</strong></a></li>
			  </ul>    
			</nav>
			<br />


		

			<hr />
		</div>
		
	<br />
	<hr />
	</div>
	<div id="background-wrap">

		<div class="x1">
			<div class="cloud"></div>
		</div>

		<div class="x2">
			<div class="cloud"></div>
		</div>

		<div class="x3">
			<div class="cloud"></div>
		</div>

		<div class="x4">
			<div class="cloud"></div>
		</div>

		<div class="x5">
			<div class="cloud"></div>
		</div>
	<div class="sun">
		<div class="ray_box">
			<div class="ray ray1"></div>
			<div class="ray ray2"></div>
			<div class="ray ray3"></div>
			<div class="ray ray4"></div>
			<div class="ray ray5"></div>
			<div class="ray ray6"></div>
			<div class="ray ray7"></div>
			<div class="ray ray8"></div>
			<div class="ray ray9"></div>
			<div class="ray ray10"></div>
		</div>
	</div>
	</div>

</div>

<div>
<div class="wrapper">
 
<div class="item2">
<div class="center">
 
    <img src="/images/craiyon_00.png">
<h1>A Verse for today </h1>
</div>
<div class="item3">
<h3>
    “He said to them, “Go into all the world and preach the gospel to all creation. Whoever believes and is baptized will be saved, but whoever does not believe will be condemned.”
    ‭‭Mark‬ ‭16‬:‭15‬-‭16‬ ‭NIV‬‬
</h3>
   
<div>
<img src="/images/craiyon_00.png">
<h1>A Verse for today </h1>
    <p>
        <?php
            $filename2= "file.txt";
            $fileContent2 = file_get_contents ($filename2);
            print $fileContent2;
        ?>
    </p>


<br />
<hr />
        <form method="POST">
            <label for="paste1">Paste your verse here:</label>
            <br>
            <textarea id="paste1" name="paste1" type="text" cols="40" rows="8" placeholder="Enter Verse"></textarea>
            <br>
            <input id="submit" type="submit" value="submit">
        </form>
</div>
</div>
<hr />
		<div class="item4">
			<div class="item1">

			<p >"If I speak in the tongues of men or of angels, but do not have love, I am only a resounding gong or a clanging cymbal. If I have the gift of prophecy and can fathom all mysteries and all knowledge, and if I have a faith that can move mountains, but do not have love, I am nothing. Love is patient, love is kind. It does not envy, it does not boast, it is not proud. For now we see only a reflection as in a mirror; then we shall see face to face. Now I know in part; then I shall know fully, even as I am fully known. And now these three remain: faith, hope and love. But the greatest of these is love."
			1 Corinthians 13:1-2, 4, 12-13 NIV</p>
			</div>

		<br />
		   
		

		</div>
</div>

</div>
	<footer>
			<p>
			<a href="first/index.html"><strong>project 1</strong></a>
			<a href="https://mactech6.free.nf/?i=1"><strong>pic</strong></a>
			<a href="/phpgallery/index.php"><strong>Images</strong></a>
			<a href="first/index.php"><strong>Home B</strong></a>
			bottom of the page stuff
			<?php

			  
				if( isset($_POST["paste1"]) ) {
					file_put_contents("file.txt", $_POST["paste1"]);
							
							
					$filename = "lista_toroq.txt";
					$fileContent = file_get_contents ($filename);
							
					$filename1 = "vers.txt";
					$fileContent1 = file_get_contents ($filename1);
					
					
					$separator = "\n"." *********************** ". "\n";
					$new_content = $_POST["paste1"].$separator.$fileContent;
					$new_content1 = $_POST["paste1"].$separator;

					file_put_contents($filename, $new_content);
					file_put_contents($filename1, $new_content1, FILE_APPEND | LOCK_EX);
					
				}
				?>
			</p>
			</footer>

</body>
</html>

