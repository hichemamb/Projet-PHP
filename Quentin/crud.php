<?php

	function connect($database)
	{
		try {
			$conn = new PDO('mysql:dbname=' . $database . ';host=localhost', 'root', '8V4B7u3g');
		} catch (PDOException $exception) {
			exit($exception->getMessage());
		}
		return $conn;
	}

/*	function create($pdo, $values, $table_of_db, $post_values)
	{
		$sql_request = "INSERT INTO " . $table_of_db . " ("
		$tmp = "NULL, ";
		foreach ($values as $value) {
			$sql_request .= $value;
			$value === $values[count($values) - 1] ? $sql_request .= ') VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);' : $sql_request .= ', ';
		}
		$stmt = $pdo->prepare($sql_request);
		$stmt->execute([$tmp]);
	}

*/	function read($pdo, $values, $table_of_db)
	{
		$sql_request = "SELECT ";
		foreach ($values as $value) {
			$sql_request .= $value;
			$value === $values[count($values) - 1] ? $sql_request .= ' FROM ' . $table_of_db . ";" : $sql_request .= ', ';
		}
		$stmt = $pdo->prepare($sql_request);
		$stmt->execute();

		return $stmt;
	}

?>