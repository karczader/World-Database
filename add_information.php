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
            $countryCode=$_POST['countryCode'];
            $district=$_POST['district'];
            $population=$_POST['population'];
            if ($connection->query("INSERT INTO city VALUES (NULL, '$name', '$countryCode', '$district', '$population')"))
			{
				echo '<span style="color:green">Successfully add new city</span>';
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
            <h2><p class="main_header">ADD NEW INFORMATION</p></h2>
        </header>

       <main class="container">

            <form method="post">
                <h3>Add information about city to add</h3>

            

                Name:
                <input type="text" name="name">

                Country Code:
                <input type="text" name="countryCode">

                District:
                <input type="text" name="district">

                Population: 
                <input type="number" name="population">
                <button>ADD</button>

            </form>
          
       </main>

    
       
    </body>
</html>