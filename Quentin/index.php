<!DOCTYPE html>
<html>

	<head>
	    <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- 	    <link rel="stylesheet" href="assets/css/reset.css" />
	    <link rel="stylesheet" href="assets/css/style.css" />
 -->	    <title>Project</title>
	</head>
	<body>
		<form action="#" method="post">
			Titre : <input type="text" name="title"><br>
			Link : <input type="text" name="link"><br>
			Description : <input type="text" name="description"><br>
			nb like : <input type="number" name="nb_like"><br>
			nb fav : <input type="number" name="nb_fav"><br>
			nb comm : <input type="number" name="nb_comments"><br>
			Tags : <input type="text" name="tags"><br>
			comments : <input type="text" name="comments"><br>
			liked : <input type="text" name="liked"><br>
			faved : <input type="text" name="faved"><br>
			date : <input type="text" name="date"><br>
			user : <input type="text" name="user"><br>
			<input type="submit" name="submit"><br>
		</form>
		<?php

			require_once "./crud.php";

			$conn = connect('actu');
			if (isset($_POST["title"]) === true && empty($_POST["title"]) === false) {
				$tables = ['id', 'name', 'link', 'description', 'nb_like', 'nb_fav', 'nb_comments', 'tags', 'comments', 'liked', 'faved', 'date', 'user'];
				create($conn, $tables, 'actu.post', $_POST);
			}
			$stmt = read($conn, $tables, 'actu.post');
		?>
		<table>
			<?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
			<tr>
				<td>id : <?=$row["id"]?></td>
				<td>name : <?=$row["name"]?></td>
				<td>link : <?=$row["link"]?></td>
				<td>desc : <?=$row["description"]?></td>
				<td>like : <?=$row["nb_like"]?></td>
				<td>fav : <?=$row["nb_fav"]?></td>
				<td>comm : <?=$row["nb_comments"]?></td>
				<td>tags : <?=$row["tags"]?></td>
				<td>comments : <?=$row["comments"]?></td>
				<td>liked : <?=$row["liked"]?></td>
				<td>faved : <?=$row["faved"]?></td>
				<td>date : <?=$row["date"]?></td>
				<td>user : <?=$row["user"]?></td>
			</tr>
			<tr></tr>
			<?php endwhile;?>
		</table>
	</body>
</html>