<?php

//izvadit 1. lietotaju

 echo "Strada";

 $connection = new mysqli("localhost", "root", "", "sipols");
$result = $connection->query("SELECT * FROM users");
$data = $result->fetch_assoc();
print_r($data);

echo "<br>";
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $sql = "INSERT INTO users
    (username, password)
    VALUES
    ('$username', '$password');
";
$connection->query($sql);
}

echo "<form method='POST'>";
echo "<label> Lietotajvards:";
echo "<input type='username' name='username' placeholder='Lietotajvards'/>";
echo "<br>";
echo "<label> Parole:";
echo "<input type='password' name='password' placeholder='Parole'/>";
echo "<br>";
echo "<input type='submit' value='Registreties' />";
echo "</form>";

?>