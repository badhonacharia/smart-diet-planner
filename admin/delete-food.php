<?php
include 'auth.php';
include '../config/db.php';

$id = $_GET['id'];
$conn->query("DELETE FROM foods WHERE id=$id");

header("Location: index.php");
