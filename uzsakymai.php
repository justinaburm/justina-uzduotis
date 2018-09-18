<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Užsakymai</title>
<link rel="stylesheet" href="orders-style.css">

<?php
	$user = "root";
	$password = "root";
	$database = "nfq";

	$db = new mysqli('localhost', $user, $password, $database);
	$db->set_charset("utf8");
?>

</head>
<body>
  <div class="container">
    <h2>Užsakymai</h2>
		<div>
	    <table class="orders-table">
	      <thead><tr>
					<td>NR.</td>
					<td>Vardas</td>
					<td>Pavardė</td>
					<td>Kaina</td>
					<td>Sumokėta</td>
					<td>El.paštas</td>
					<td>Knyga</td>
					<td>Išsiųsta</td>
				</tr></thead>
	      <?php
	        $query = "SELECT orders.id AS order_id, clients.name as client_name, clients.surname as client_surname, orders.price, orders.paid, clients.email, books.id as book_id, orders.sent FROM orders INNER JOIN clients on orders.client_id = clients.id INNER JOIN books on orders.book_id = books.id";
	        if ($result = $db->query($query)) {
	          while ($row = $result->fetch_assoc()) {
	            echo '<tr><td>' .
							$row['order_id'] . '</td><td>' .
							$row['client_name'] . '</td><td>' .
							$row['client_surname'] . '</td><td>' .
							$row['price'] . '</td><td>';
							if ($row['paid']){ echo '<span class="green-font">Taip</span>';}
							else { echo 'Ne';}
							echo '</td><td>' .
							$row['email'] . '</td><td>' .
							$row['book_id'] . '</td><td>';
							if ($row['sent']){ echo '<span class="green-font">Taip</span>';}
							else if (($row['paid']) && (!$row['sent'])) { echo '<span class="red-font">Ne</span>';}
							else { echo 'Ne';}
							echo '</td></tr>';
	          }
	        }
	      ?>
	    </table>
  	</div>
  </div>
</body>
</html>
