<!DOCTYPE html>
<html lang="en">
<title>Delete Story</title>

<?php
//allows user to delete sotry
require 'database.php';
session_start(); 

$title = $_POST['title'];

$cde = $mysqli->prepare("DELETE FROM stories WHERE title='$title'");

$cde->execute();

$cde->close();

echo "File Deleted";

exit;

?>

</html>