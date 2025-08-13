<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Verse Of The Day</title>

<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/indexa. css">
<link rel="stylesheet" href="/css/clouds.css">
<link rel="stylesheet" href="/css/sun.css">

</head>
<body>
	<div class="flex-container">
		<div class="myheader">
			<h1 id="myHeader">Verse of the day</h1>
			<br />
				<h3>
					“He said to them, “Go into all the world and preach the gospel to all creation. Whoever believes and is baptized will be saved, but whoever does not believe will be condemned.”
					‭‭Mark‬ ‭16‬:‭15‬-‭16‬ ‭NIV‬‬
				</h3>
			<nav>
			  <ul class="flex">
				<li><a href="/index.html"><strong>Home</strong></a></li>	
				<li><a href="indexa.php"><strong>Verses</strong></a></li>
				<li><a href="veroday.html"><strong>Verse of the day</strong></a></li>
				<li><a href="gp/">VOD</a></li>
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

	<div class="wrapper">
 
		<div class="item2">

					   
			<div>
			<img class="aiart" src="/images/koh01.jfif" alt="Kingdom of Heaven">
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
		<hr />
			<div class="item4">
					<div class="item1">

					<p >"If I speak in the tongues of men or of angels, but do not have love, I am only a resounding gong or a clanging cymbal. If I have the gift of prophecy and can fathom all mysteries and all knowledge, and if I have a faith that can move mountains, but do not have love, I am nothing. Love is patient, love is kind. It does not envy, it does not boast, it is not proud. For now we see only a reflection as in a mirror; then we shall see face to face. Now I know in part; then I shall know fully, even as I am fully known. And now these three remain: faith, hope and love. But the greatest of these is love."
					1 Corinthians 13:1-2, 4, 12-13 NIV</p>
					</div>

				<br />
				 <div id="p6" class="container">
					<p>Finally, brethren, pray for us, that the word of the Lord may run swiftly and be glorified, just as it is with you, and that we may be delivered from unreasonable and wicked men; for not all have faith.But the Lord is faithful, who will establish you and guard you from the evil one. And we have confidence in the Lord concerning you, both that you do and will do the things we command you.Now may the Lord direct your hearts into the love of God and into the patience of Christ.
					2 Thessalonians3:1-5 NKJV</p>
				 </div>

				  <div id="p3" class="container">
					<p>Praise the Lord. How good it is to sing praises to our God, how pleasant and fitting to praise him! Great is our Lord and mighty in power; his understanding has no limit. Sing to the Lord with grateful praise; make music to our God on the harp. His pleasure is not in the strength of the horse, nor his delight in the legs of the warrior; the Lord delights in those who fear him, who put their hope in his unfailing love. He has done this for no other nation; they do not know his laws. Praise the Lord.
					Psalms 147:1, 5, 7, 10-11, 20 NIV</p>
				  </div>
				</div class="container">
				<div>
				  <div id="p4" class="container">
					<p >Therefore, when Christ came into the world, he said: Sacrifice and offering you did not desire, but a body you prepared for me; Then I said, Here I am - it is written about me in the scroll- I have come to do your will, my God. Let us hold unswervingly to the hope we profess, for he who promised is faithful. But we do not belong to those who shrink back and are destroyed, but to those who have faith and are saved.
					Hebrews 10:5, 7, 23, 39 NIV</p>
				
				  </div>

				  <div id="p5" class="container">
					<p >Finally, all of you, be like-minded, be sympathetic, love one another, be compassionate and humble. But even if you should suffer for what is right, you are blessed. Do not fear their threats; do not be frightened.But in your hearts revere Christ as Lord. Always be prepared to give an answer to everyone who asks you to give the reason for the hope that you have. But do this with gentleness and respect.
					1 Peter 3:8, 14-15 NIV</p>
				
				  </div>

				  <div id="p7" class="container">
					<p >Be strong and courageous. Do not be afraid or terrified because of them, for the Lord your God goes with you; he will never leave you nor forsake you. The Lord himself goes before you and will be with you; he will never leave you nor forsake you. Do not be afraid; do not be discouraged. Then the Lord appeared at the tent in a pillar of cloud, and the cloud stood over the entrance to the tent.
					Deuteronomy 31:6, 8, 15 NIV</p>
				
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
			
			</p>
			</footer>

</body>
</html>

