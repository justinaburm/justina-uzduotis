<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Albumai</title>

<?php
	$user = "root";
	$password = "root";// Jei naudojat AMPPS tai slaptazodis mysql
	$database = "nfq";

	$db = new mysqli('localhost', $user, $password, $database);
	$db->set_charset("utf8");
?>

</head>
<body>
  <div class="container">
			<form method="POST" action="">
				Vardas<input type="text" name="name">
				Pavardė<input type="text" name="surname">
				Elpaštas<input type="text" name="email">
				Pasirinkite knygą:
				<select name="album_id">
					<option value="1">A</option>
					<option value="2">B</option>
					<option value="3">C</option>
				</select>
				<input type="submit">
			</form>
	</div>
	<?php



			if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email']) ) {
				$name = mysqli_real_escape_string($db, $_POST['name']);
				$surname = mysqli_real_escape_string($db, $_POST['surname']);
				$email = mysqli_real_escape_string($db, $_POST['email']);
				$album_id = mysqli_real_escape_string($db, $_POST['album_id']);

				// $sql = "INSERT INTO clients(name, surname, email) VALUES ('Joans', 'jIdh', 'jhfkh@fj.lt')";
				$sql = "INSERT INTO clients(name, surname, email) VALUES ('$name', '$surname', '$email')";
				$result = $db->query($sql);
				$queryClientId = "SELECT * FROM clients ORDER BY id DESC LIMIT 1";
				// ^ Pasirenkam kliento id, kuris buvo kątik sukurtas
				if ($result = $db->query($queryClientId)) {
					while ($row = $result->fetch_assoc()) {
						$client_id = $row['id'];
					}
				}
				$queryAlbumPrice = "SELECT * FROM albums WHERE id='$album_id'";
				// ^ Pasirenkam albumo kainą, kuris buvo pasirinktas
				// Kaina yra paimama šioje vietoje tam, kad net ir pakitus albumo kainai, „čekio“ informacija nepakistų
				if ($result = $db->query($queryAlbumPrice)) {
					while ($row = $result->fetch_assoc()) {
						$albumPrice = $row['price'];
					}
				}

				$sql2 = "INSERT INTO orders(album_id, client_id, price) VALUES ('$album_id', '$client_id', '$albumPrice')";
				$result = $db->query($sql2);

				echo mysqli_error($db);

				header("location: landing_page.php");
				exit;

			}




	?>


</body>
</html>
