<html>
<head>
  <title>Formulier</title>
  <link href="form.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p><img src="logo.png"></p>
			<ul>
				<li><a href="#">Er heerst paniek...</a></li>
				<li><a href="#">Onkunde</a></li>
			</ul>
	<div class="middle">
	<h1>Er heerst paniek</h1>
		<p>Er heerst paniek in het koninkrijk
			<?php echo $_POST["land"];?> .
		Koning 
			<?php echo $_POST ["persoon"];?> is ten einde raad en als koning 
			<?php echo $_POST ["persoon"]; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer 
			<?php echo $_POST["spijbel"];?>.

		"	<?phpecho $_POST["spijbel"];?>! Het is een ramp! Het is een schande!"
		"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"
		"Mijn 
			<?php echo $_POST["huisdier"];?>is verdwenen! Zo maar, zonder waarschuwing.
		En ik had net 
			<?php echo $_POST ["speelgoed"];?> voor hem gekocht!"
		"Majesteit, uw 
			<?php echo $_POST["huisdier"];?> komt vast vanzelf weer terug?"
		"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd \
			<?php echo $_POST ["bezigheid"];?> leren?"
		"Maar Sire, daar kunt u toch uw 
			<?php echo $_POST ["kopen"];?> voor gebruiken."
		"	<?php echo $_POST ["persoon"];?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."
		"	<?php echo $_POST ["verveelt"];?>, Sire."
		</p>
	</div>
</body>
</html>
