<?php
    if (isset($_POST['name']))
	{
        require_once "connect.php";
        $connection=@new mysqli($host, $db_user, $db_password, $db_name);

        if ($connection->connect_errno!=0){
            echo "Error databases connection";
        }
        else{

            $name=$_POST['name'];
            if ($connection->query("DELETE FROM city WHERE Name='$name'"))
			{
				echo '<span style="color:red">Successfully delete city named '.$name.'</span>';
			}

            $connection->close();
        }
    }
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
            <h2><p class="main_header">DELETE INFORMATION</p></h2>
        </header>

       <main class="container">

            <form method="post">
                <h3>Write name country to delete</h3>

                Name:
                <input type="text" name="name">
                <button>DELETE!</button>
            </form>
          
       </main>

    
       
    </body>
</html>
