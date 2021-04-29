<?php
    require_once "connect.php";
    $connection=@new mysqli($host, $db_user, $db_password, $db_name);
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8"/>
        <title>World Database</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
        
    </head>

    <body>

        <header>
            <h1><p class="main_header">SHOW INFORMATION ABOUT DATABASE</p></h1>
        </header>

       <main class="container">
            <h3>COUNTRY</h3>
            <?php
                if ($connection->connect_errno!=0){
                echo "Error databases connection";
                }
                else{               
                     
                    $sql="SELECT * FROM country";
                    if($results = @$connection->query($sql)){
                        while($row=mysqli_fetch_assoc($results)){
                            echo $row['Code']." - <b>".$row['Name']."</b>, ".$row['Continent']." ".$row['Population']." "."</br>";
                        }
                    }
                    $connection->close();
                }
                ?>
        </main>

    
       
    </body>
</html>
