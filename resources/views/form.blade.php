<!DOCTYPE html>
<html>
<head>
	<title>Form Page</title>
</head>
<body>

	<form action="/respon" method="POST">
        @csrf
		<h1>Buat Account Baru!</h1>

		<h3>Sign Up Form</h3>

		<label>First name :</label>
		<br>
		<input type="text" name="first">
		<br><br>
		<label>Last name :</label>
		<br>
		<input type="text" name="last">
		<br><br>
		<label>Gender :</label>
		<br>
		<input type="radio" name="gender" value="male"> Male<br>
		<input type="radio" name="gender" value="female"> Female<br>
		<input type="radio" name="gender" value="other"> Other<br>
		<br>
		<label>Nationality :</label>
		<br>
		<select name="national">
			<option>Indonesian</option>
			<option>English</option>
		</select>
		<br><br>
		<label>Language spoken :</label>
		<br>
		<input type="checkbox" name="language"> Bahasa Indonesia
		<br>
		<input type="checkbox" name="language"> English
		<br>
		<input type="checkbox" name="language"> Other
		<br><br>
		<label>Bio :</label>
		<br>
		<textarea name="bio" rows="4"></textarea>
		<br>
		<input type="submit" value="masuk">


	</form>

</body>
</html>