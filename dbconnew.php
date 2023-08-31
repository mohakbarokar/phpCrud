<?php
//$dbconn = pg_connect("host=jhhdevopsterra-pgsql-server.postgres.database.azure.com port=5432 dbname=postgres user=azureuser password=Db@Password1234");
////connect to a database named "postgres" on the host "host" with a username and password
//if (!$dbconn){
//    echo "<center><h1>Doesn't work =(</h1></center>";
//}else
//    echo "<center><h1>Good connection</h1></center>";
//pg_close($dbconn);

$host = 'jhhdevopsterra-pgsql-server.postgres.database.azure.com'; // Change this if your database is hosted elsewhere
$dbname = 'postgres';
$user = 'azureuser';
$password = 'Password@123';

try {
    $db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($db) {
        echo "Connected";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Prepare the SQL query
    $stmt = $db->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");

    // Bind parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);

    // Execute the query
    try {
        $stmt->execute();
        echo "Data inserted successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<form method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <button type="submit">Insert Data</button>
</form>
