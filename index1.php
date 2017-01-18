<?php
include('connect.php');

if($_POST['key'] == "Moodha") {
	$result = $db->prepare("SELECT * FROM Products WHERE Type='Moodha'");

	$result->execute();

	$callback = isset($_REQUEST['callback']) ? $_REQUEST['callback'] : false;

    if ($callback) {
		header('Content-Type: application/javascript');
		echo $callback.'('.json_encode($result->fetchAll(PDO::FETCH_OBJ)).')';
	} else {
		header('Content-Type: application/json');
		echo json_encode($result->fetchAll(PDO::FETCH_OBJ));
    }
}

include('connect.php');
if($_POST['key'] == "Pear") {
	$result = $db->prepare("SELECT * FROM Products WHERE Type='Pear'");

	$result->execute();

	$callback = isset($_REQUEST['callback']) ? $_REQUEST['callback'] : false;

    if ($callback) {
		header('Content-Type: application/javascript');
		echo $callback.'('.json_encode($result->fetchAll(PDO::FETCH_OBJ)).')';
	} else {
		header('Content-Type: application/json');
		echo json_encode($result->fetchAll(PDO::FETCH_OBJ));
    }
}

include('connect.php');
if($_POST['key'] == "Lounger") {
	$result = $db->prepare("SELECT * FROM Products WHERE Type='Lounger'");

	$result->execute();

	$callback = isset($_REQUEST['callback']) ? $_REQUEST['callback'] : false;

    if ($callback) {
		header('Content-Type: application/javascript');
		echo $callback.'('.json_encode($result->fetchAll(PDO::FETCH_OBJ)).')';
	} else {
		header('Content-Type: application/json');
		echo json_encode($result->fetchAll(PDO::FETCH_OBJ));
    }
}


include('connect.php');
if($_POST['key'] == "Chair") {
	$result = $db->prepare("SELECT * FROM Products WHERE Type='Chair'");

	$result->execute();

	$callback = isset($_REQUEST['callback']) ? $_REQUEST['callback'] : false;

    if ($callback) {
		header('Content-Type: application/javascript');
		echo $callback.'('.json_encode($result->fetchAll(PDO::FETCH_OBJ)).')';
	} else {
		header('Content-Type: application/json');
		echo json_encode($result->fetchAll(PDO::FETCH_OBJ));
    }
}


