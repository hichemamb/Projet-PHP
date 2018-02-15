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

	function create($pdo, $values, $table_of_db, $post_values)
	{
		$sql_request = "INSERT INTO " . $table_of_db . " (";
		$tmp = [NULL];
		$tmp = array_merge($tmp, array_values($post_values));
		array_pop($tmp);
		foreach ($values as $value) {
			$sql_request .= $value;
			$value === $values[count($values) - 1] ? $sql_request .= ') VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);' : $sql_request .= ', ';
		}
		$stmt = $pdo->prepare($sql_request);
		$stmt->execute($tmp);

		return;
	}

	function create_post($pdo, $values, $table_of_db, $post_values)
	{
		$sql_request = "INSERT INTO " . $table_of_db . " (";
		$tmp = [NULL];
		$tmp = array_merge($tmp, array_values($post_values));
		foreach ($values as $value) {
			$sql_request .= $value;
			$value === $values[count($values) - 1] ? $sql_request .= ') VALUES (?, ?, ?, ?, ?);' : $sql_request .= ', ';
		}
		$stmt = $pdo->prepare($sql_request);
		$stmt->execute($tmp);

		return;
	}

	function read($pdo, $values, $table_of_db)
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

	function read_where($pdo, $values, $table_of_db, $where, $where_value)
	{
		$sql_request = "SELECT ";
		foreach ($values as $value) {
			$sql_request .= $value;
			$value === $values[count($values) - 1] ? $sql_request .= ' FROM ' . $table_of_db . " WHERE " . $where . " = '" . $where_value . "';" : $sql_request .= ', ';
		}
		$stmt = $pdo->prepare($sql_request);
		$stmt->execute();

		return $stmt;
	}

	function update($pdo, $values, $table_of_db, $post_values, $where, $where_value)
	{
		$sql_request = "UPDATE " . $table_of_db . " SET ";
		$tmp = [NULL];
		$tmp = array_values($post_values);
		array_pop($tmp);
		foreach ($values as $value) {
			$sql_request .= $value . " = ?";
			$value === $values[count($values) - 1] ? $sql_request .= ' ' : $sql_request .= ', ';
		}
		$sql_request .= "WHERE " . $where . "='" . $where_value . "';";
		$stmt = $pdo->prepare($sql_request);
		$stmt->execute($post_values);

		return;
	}

	function delete($pdo, $table_of_db, $id, $where, $where_value)
	{
		$sql_request = "DELETE FROM " . $table_of_db . " WHERE " . $where . "='" . $where_value . "';";
		$stmt = $pdo->prepare($sql_request);
		$stmt->execute();
	}

?>