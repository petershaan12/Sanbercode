<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
</head>
<body>

	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>

	<label for="First_name">First name:</label> <br><br>
	<input type="text" name="First_name"> <br><br>
	<label for="Last_name">Last name:</label> <br><br>
	<input type="text" name="Last_name"> <br><br>

	<label for="Gender">Gender:</label> <br><br>
	<input type="radio" name="Gender" value="0">Male <br>
	<input type="radio" name="Gender" value="1">Female <br>
	<input type="radio" name="Gender" value="2">Other  <br><br>

	<label for="Negara">Nationality:</label> <br><br>
	<select>
		<option value="1">Indonesian</option>
		<option value="2">Singaporean</option>
		<option value="3">Malaysian</option>
		<option value="4">Australian</option>
	</select>

	<br><br>
	<label for="Bahasa">Language Spoken:</label> <br><br>
	<input type="checkbox" name="Bahasa" value="0">Bahasa Indonesia <br>
	<input type="checkbox" name="Bahasa" value="1">English <br>
	<input type="checkbox" name="Bahasa" value="2">Other <br><br>

	<label for="Bio">Bio:</label> <br> <br>
	<textarea name="Bio" cols="30" rows="10"></textarea>

	<br>
	<form action="/welcome">
        @csrf
		<input type="Submit" value="Sign Up">
	</form>
	

</body>
</html>