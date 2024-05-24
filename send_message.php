<?php
//Connect with DB
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "group2";
// Create connection
$mysqli = new mysqli($servername, $username,
                $password, $dbname);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM messages WHERE fullname= 1";
$result = $mysqli->query($sql);
$mysqli->close();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Courses </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='coursesGall_styles.css'>

</head>

<body>

    <div>
        Subject : <?php echo $rows["subject"]; ?>
        <br>
        Message : <?php echo $rows["message"]; ?>
        <br>
        Name : <?php echo $rows["fullname"]; ?>
        <br>
        Email : <?php echo $rows["email"]; ?>
    </div>

</body>
</html>





