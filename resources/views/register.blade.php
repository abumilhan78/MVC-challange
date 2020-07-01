<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Daftar SanberBook</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h4>Sign Up Form</h4>
	<form action="{{url('register')}}" method="post" accept-charset="utf-8">
		@csrf
		<p>
			<label>First Name : </label><br>
			<input type="text" name="namadepan">
		</p>
		<p>
			<label>Last Name :</label><br>
			<input type="text" name="namabelakang">
		</p>
		<p>
			<label>Gender :</label><br>
			<input type="radio" name="">Male<br>
			<input type="radio" name="">Female<br>
			<input type="radio" name="">Other<br>
		</p>
		<p>
			<label>Nationality :</label><br>
			<select>
				<option>Indonesian</option>
				<option>Japanese</option>
				<option>Malaysian</option>
				<option>Arabian</option>
			</select>
		</p>
		<p>
			<label>Language Spoken :</label><br>
			<input type="checkbox">Bahasa Indonesia<br>
			<input type="checkbox">English<br>
			<input type="checkbox">Other<br>
		</p>
		<p>
			<label>Bio :</label><br>
			<textarea rows="5" cols="40"></textarea>
		</p>
		<p>
			<input type="submit" value="sign up">
		</p>
	</form>
</body>
</html>