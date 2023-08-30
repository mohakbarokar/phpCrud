<?php


        define("HOSTNAME","jhhdevopsterra-pgsql-server.postgres.database.azure.com");
        define("USERNAME","azureuser");
        define("PASSWORD","Db@Password1234");
        define("DATABASE","postgres");

        $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

        if(!$connection){
            die("Connection Failed");
        }
        else{
            echo "Connected";
        }

?>