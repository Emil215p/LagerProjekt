<link rel="stylesheet" href="style.css" type="text/css">
<html>
    <head>
        <meta charset="UTF-8">
        <title>Old test site for DB</title>
    </head>
    <body>
        <h1>Lagersystem</h1>
        <p>Prototype af et lagersystem med MySQL.</p>
        <p>Ver 0.01</p>
<?php include_once "../dependencies/dbconn.php";
$sql = "SELECT TestID, Testen, Tester, Tost FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["TestID"] . "</td><td>" . $row["Testen"] . "</td><td>" . $row["Tester"] . "<tr><td>" . $row["Tost"] . "</td><td>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
        
                    <a href="../index.php"><h1>Return to start...</h1></a>
</body>
</html>