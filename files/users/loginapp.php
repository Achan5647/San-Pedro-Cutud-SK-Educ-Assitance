<?php
error_reporting(0);
include("../config/database.php");

// Prepare query
$query = "SELECT COUNT(*) as totCount FROM tbl_applicant WHERE Applicant_username = ? AND Applicant_password = ?";
$stmt = $pdo->prepare($query);

// Retrieve parameters
$un = isset($_GET['un']) ? $_GET['un'] : die('Username missing');
$pass = isset($_GET['pass']) ? $_GET['pass'] : die('Password missing');

// Bind parameters and execute
$stmt->bindValue(1, $un);
$stmt->bindValue(2, $pass);
$stmt->execute();

// Fetch result
$row = $stmt->fetch(PDO::FETCH_ASSOC);
echo json_encode(['totCount' => $row['totCount']]);
?>
