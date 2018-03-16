<!DOCTYPE html>
<html>
    <head>
        <title>Portal</title>
    </head>
    <body>
        <?php
            $conn =new mysqli("localhost","root","","project");
            if($conn->connect_error){
                die("connection failed".$conn->connect_error);
            }
            $sql ="SELECT * FROM `Products` WHERE 1;";
            $result=$conn->query($sql);
            if($result->num_rows > 0){
                while($row =$result->fetch_assoc() ){
                    print_r($row);
                    print "<div class=product>
                        <img src='".$row['image']."' alt='".$row['pname']."'>
                        <h2>".$row['pname']."</h2>
                        <p>".$row['pdesc']."</p>
                        </div><br>";
                }
            }
        ?>
    </body>
</html>