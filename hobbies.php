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
$sql = " SELECT * FROM product WHERE category_id= 1";
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
    <script src='main.js'></script>
</head>
    
    
<body>
<div class="topnav">
        <a  href="index.html">Home</a>
        <a href="all.php" class="active">Courses</a>
        <a href="contact.html">Contact</a>
        <a href="aboutus.html">About Us</a>
        <a href="login.html">Login</a>
        <a href="checkout.html" style="margin-left: 7%;  padding: 18px ; " >
        <img src="images/shopping-cart_03.png" alt="" width="30" style="margin-top: 0px; ">
        My Shopping Cart </a>
</div>
    <!--Div container-->
    <div class="container">

        <!--Navigation bar-->
        <ul>
            <li><a href="all.php" >All</a></li>
            <li><a href="hobbies.php" class="choosen">Hobbies</a></li>
            <li><a href="it.php">IT</a></li>
            <li><a href="science.php">Science</a></li>
        </ul>
        <!--Table to contain the products-->
        <!-- Fech data-->
      
        <table>
            
           
            <?php 
                $i=1;
                while($rows=$result->fetch_assoc())
                { 
                 
            ?>
                <td>
                    <div class="card">
                        <div class="card_content">
                        <img src=<?php echo $rows['image'] ?> alt="image not found">
                        <div class="overlay">
                            <?php echo $rows['description'] ?>
                        </div>
                            </div>
                        <div class="card_title">  <?php echo $rows['name'] ?> </div>
                    
                        <hr>
                        <div class="card_footer">Price:  <?php echo $rows['price'] ?>  
                            <input type="button" value="add to cart">
                        </div>
                    </div>
                </td>

                <?php  
               if ( $i % 3 == 0){
                echo "</tr>";
               }
                $i++;
                }
            ?>
                
           
        </table>
    </div>

    <footer>
    <small>
      2024 Spring Semester - ENGR 372 - 
    </small>
    <small>
        Melike Z. Tapcı, Resul Erdem Arduç, Ege Eylül Kırmızı, Maram Al-Maohgra
    </small>
  </footer>
</body>
</html>


