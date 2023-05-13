<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>First data</title>
</head>

<body>
	<form method="post" action="second.php">
		<label for="">Numer karty:</label>
		<input type="text" name="card"><br>

		<label for="customer">Imię i nazwisko zamawiającego:</label>
		<input type="text" name="customer"><br>

		<label for="people">Ilość osób:</label>
		<input type="number" name="people" min="1" max="10"><br>

		<input type="submit" value="Wyslij">
	</form>
</body>

</html>