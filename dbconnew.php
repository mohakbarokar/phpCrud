<?php
$dbconn = pg_connect("host=jhhdevopsterra-pgsql-server.postgres.database.azure.com port=5432 dbname=postgres user=azureuser password=Db@Password1234");
//connect to a database named "postgres" on the host "host" with a username and password
if (!$dbconn){
    echo "<center><h1>Doesn't work =(</h1></center>";
}else
    echo "<center><h1>Good connection</h1></center>";
pg_close($dbconn);
?>