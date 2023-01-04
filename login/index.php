<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Giriş Yap</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
			<h1>Giriş Yap</h1>
		</div>
		<form action="islem.php" method="post">
			<div class="login-form">
				<div class="control-group">
					<input type="text" name="username" placeholder="Kullanıcı Adı" class="login-field" id="login-name">
					<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div class="control-group">
					<input type="password" name="password" class="login-field" placeholder="Şifre" id="login-pass">
						<label class="login-field-icon fui-user" for="login-pass"></label>
				</div>
				<a href="islem.php" name="giris" class="btn btn-primary btn-large btn-block">Giriş Yap</a>
				<a href="kayit.php" class="btn btn-primary btn-large btn-block">Kayıt Ol</a>
			</div>
			</form>
		</div>
	</div>
</body>
</html>