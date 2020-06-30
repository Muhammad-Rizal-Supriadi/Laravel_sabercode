<!DOCTYPE html>
<html>
<head>
	<title>HTML Challenge</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>
	<div class="input_text">
		<form action="{{ url('welcome') }}" method="post">
			{{ csrf_field() }}
			<p><label>First name:</label></p>
			<p><input type="text" name="first_name"></p>
			<p><label>Last name:</label></p>
			<p><input type="text" name="last_name"></p>

			<p>Gender:</p>
			<input type="radio" name="gender" value="Male">Male</br>
			<input type="radio" name="gender" value="Female">Female</br>
			<input type="radio" name="gender" value="Other">Other
			
			<p>Nationality:</p>
			<select name="nationality">
				<option value="indonesian">Indonesian</option>
				<option value="Singaporean">Singaporean</option>
				<option value="malaysian">Malaysian</option>
				<option value="australian">australian</option>
			</select>

			<p>Language Spoken:</p>
			<input type="checkbox" name="indonesia">Bahasa Indonesia</br>
			<input type="checkbox" name="english">English</br>
			<input type="checkbox" name="other">Other

			<p>Bio:</p>
			<textarea name="bio" cols="35" rows="10"></textarea><br>
			<input type="submit" name="signup" value="Sign Up">
		</form>
	</div>
</body>
</html>