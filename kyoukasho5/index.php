<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>利用者情報</title>
	</head>
	<body>
		利用者情報入力<br /><br />

		<form method="post" action="user_add_check.php">
		名前を入力してください。<br />
		<input type="text" name="name_user" style="width:100px"><br />
		学籍番号を入力してください。<br />
		<input type="text" name="student_id" style="width:100px"><br />
		パスワードを作成してください。<br />
		<input type="password" name="password" style="width:100px"><br />
		<br />
		<input type="button" onclick="history.back()" value="戻る">
		<input type="submit" value="進む">

		<br /><br />

		<a href="admin_password.php">管理者ページへ</a><br /><br />

		
		</form>

	</body>
</html>
