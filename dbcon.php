<?php


define("HOSTNAME", "jhhdevopsterra-pgsql-server.postgres.database.azure.com");
define("USERNAME", "azureuser");
define("PASSWORD", "Db@Password1234");
define("DATABASE", "postgres");

//$connection = pg_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

$connection = pg_connect("host=jhhdevopsterra-pgsql-server.postgres.database.azure.com dbname=postgres user=azureuser password=Db@Password1234");


if (!$connection) {
    die("Connection Failed");
} else {
    echo "Connected";
}

?>