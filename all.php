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
$sql = " SELECT * FROM product ORDER BY price";
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
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<style>
    
    body{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(90deg, #0d349b, #e99bc1);
    background-repeat: no-repeat;
    background-size: cover;
    letter-spacing: 1px;
    font-size: 14px;
    }
    .container{
        background-color: #F5F5F5;
        margin: 5%;
        border: solid 1px rgb(15, 21, 73);
        padding: 5%;
    }
    ul{
        margin-top: 5%;
        margin-bottom: 5%;
        font-size: 16px;

    }
    li{
        display: inline;
        padding-right: 5%;
        
    }
    li a{
        text-decoration: none;
        color: #0d349b;
        border-radius: 25px;
       

    }
    .choosen{
        border: #0d349b 1px solid;
        padding: 10px;
    }
    li a:hover{
        color: #EC9BBE;
        border: #EC9BBE 1px solid;
        padding: 10px;

    }
    td, tr{
        border: #0d349b solid 0px;
        padding: 10px;
        margin: 10px;
    }

    td{
        width: 33%;
    }
    div.card{
        margin: 5px;
        border: 1px solid #ece4e4;
        width: 40wv;
    }

    div.card:hover {
        border: 2px solid lightgray;
    }
    .card img{
        width: 100%;
        height: 240px;
    }
    div.card_content{
        text-align: center;
        padding: 5px;
        position: relative;
    }
    hr{
        border: none;
        border-top: 2px solid lightgray;
        margin-top: 10px;
        margin-bottom: 5px;

        
    }
    .card_title{
        color: #0d349b;
        font-size: large;
        padding: 10px;
        text-align: center

    }
    .card_footer{
        color: black;
        padding: 5px;
        margin-left: 10%;
      
    }
    input[type=button]{
    border: 1px solid black;
    font-weight: 5;
    border-radius: 25px;
    background-color: #ebdede;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    letter-spacing: 2px;
    font-size: small;
    width: 100px;
    cursor: pointer;
    padding:  5px 8px;
    margin-left: 10%;
    }
    input[type="button"]:hover{
    color: #fafafa;
    background-color: #0d349b;
    font-size: 16px;
    width: 120px;
    margin-left: 5%;
}
.card_content .overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: auto;
  opacity: 0;
  transition: .5s ease;
  background-color: #FEE3C8;
  text-align: left ;
  padding: 15px;
  font-size: 14px;
}

.card_content:hover .overlay {
  opacity: 0.88;
}
</style>
<body>
    <!--Div container-->
    <div class="container">

        <!--Navigation bar-->
        <ul>
            <li><a href="all.php" class="choosen">All</a></li>
            <li><a href="hobbies.php">Hobbies</a></li>
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

    
</body>
</html>


