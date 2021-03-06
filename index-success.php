<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tomas Tomaitis</title>

<link href="https://fonts.googleapis.com/css?family=Dosis|Sacramento" rel="stylesheet">
<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="style.css">

<?php
	$user = "root";
	$password = "root";
	$database = "nfq";

	$db = new mysqli('localhost', $user, $password, $database);
	$db->set_charset("utf8");
?>

</head>
<body>
		<div class="header">
			<h1>Tomas Tomaitis</h1>
		</div>

		<div class="container">
		<div class="about-me">
			<img src="images/portrait-1.jpg">
			<div class="text">
				<h2>Labas!</h2>
				<h3>Aš vardu Tomas</h3>
				<p>Bet kadangi tu atėjai čia, tikriausiai tai jau ir žinojai anksčiau</p>
				<p>Esu išleidęs dvi knygas, kurias šiuo metu gali įsigyti tik čia - tiesiai iš mano virtualių rankų!</p>
			</div>
		</div>
		<div class="about-me vertical">
			<div class="text">
				<h2>Kodėl virtualiai?</h2>
				<p>Užtenka naudoti popierių - skaitykime šiuolaikiškai!</p>
				<p>Įsigijęs elektroninę knygą ją gausi nurodytu el.paštu ir galėsi turėti amžinybę! Ji niekada nepakeis savo formos ir išvaizdos!</p>
				<p>Na, o jei vis tik nori popierinio varianto, kreipkis į draugus ar viešąsias bibliotekas - mano knygos buvo tikrai užtektinai prispausdintos, jog jei ne draugas - tai draugo draugas - turėtų ją turėti.</p>
				<p>(Ir dar matau win-win situaciją: taip gali gauti ne tik mano popierinę knygą, bet praplėsti savo pažinčių ratą!)</p>
 				<p>Tačiau suradęs popierinį knygos variantą vis tiek gali mane paremti įsigydamas elektroninę kurios nors mano knygos (arba abiejų) versiją.</p>
			</div>
			<img src="images/portrait-2.jpg">
		</div>
		<div class="books">
			<div class="vertical">
				<img src="images/book-Lorem-1.jpg">
        <img id="book-2-phones" class="border" src="images/book-Lorem-2.jpg">
				<div class="text">
					<h3>Pirmoji knyga</h3>
					<h2>Lorem: Lorem Ipsum</h2>
					<p>Aliquam ac venenatis felis. Phasellus blandit leo lectus, vel consequat tortor tincidunt vitae. Aliquam erat volutpat. In hendrerit blandit elit ac vestibulum. Etiam non dolor ac tortor luctus maximus. Mauris dolor mi, luctus at vulputate sed, commodo sed nunc. Vestibulum quis neque sed ligula elementum malesuada. Nam porttitor in dui eu dignissim. Etiam mattis leo sed eros sagittis, eget iaculis justo interdum. Etiam vitae diam sit amet ipsum rutrum consequat quis quis sem. Donec imperdiet lacinia nunc, ac condimentum massa tempor a. Pellentesque eget ex nunc. Vivamus turpis erat, consequat sit amet mauris sit amet, semper facilisis lectus.</p>
					<p>Nulla pellentesque justo ut imperdiet rutrum. Pellentesque blandit justo ac nisi laoreet fringilla. Aliquam erat volutpat. Aenean suscipit turpis sem, sit amet porttitor tellus finibus eleifend. Sed id risus rhoncus, gravida lorem id, tempor magna. Nulla varius ex sed ligula consequat, id venenatis velit blandit. Etiam arcu eros, iaculis ac iaculis ac, tempor id mi. Praesent cursus nulla id ultricies sollicitudin. Nulla facilisi. Etiam a pretium nulla.</p>
			</div>
		</div>
			<div class="book about-me">
				<div class="text">
					<h3>Antroji knyga</h3>
					<h2>Lorem 2: Lorem Ipsum</h2>
					<p>Quisque fringilla vel odio ac fringilla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed tempus massa eu lorem egestas, nec facilisis mauris tincidunt. Nullam vitae dapibus odio. Quisque vel magna volutpat, iaculis orci non, varius odio. Quisque tincidunt ante vitae commodo tincidunt. In sit amet massa velit.</p>
					<p>Fusce in ante vel tellus vestibulum viverra. Mauris malesuada fringilla varius. Aliquam eu laoreet dui. Donec hendrerit ligula diam, in hendrerit massa sodales in. Quisque molestie nunc gravida lobortis commodo. Donec erat leo, tristique at tortor et, tincidunt malesuada nibh. Aenean fermentum, neque ac feugiat vulputate, nisi sem efficitur nisi, non vulputate dui neque vitae neque. Suspendisse potenti. Donec eget arcu rutrum, condimentum lacus quis, pretium tortor. Integer consequat velit quis sapien luctus efficitur at ac quam. Fusce ipsum purus, rhoncus eu posuere at, sodales in erat. In eu fermentum orci, sed ultricies enim. Aenean hendrerit nunc et vulputate finibus. Suspendisse tempus et tortor at lobortis. Morbi et ultrices turpis.</p>
			</div>
			<img id="book-2-laptops" class="border" src="images/book-Lorem-2.jpg">
		</div>
	</div>
<hr>
<div class="order-container" id="order">
	<div class="order-form">
			<h2>Užsakymas gautas!</h2>
			<p>Visą informaciją apie apmokėjimą gausi įvestu el.paštu! </p>
      <p>Nori padaryti dar kitą užsakymą draugui? <a href="index.php#order">Spausk čia!</a></p>

		</div>
		<div class="text-higher">
			<h2>Susitiksim knygoje!</h2>
			<h2>Tomas Tomaitis</h2>
		</div>
	</div>
</div>



</body>
</html>
