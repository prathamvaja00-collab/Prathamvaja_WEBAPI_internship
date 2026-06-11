<?php
include("database.php");

$mode = $_GET['mode'];

$query = "SELECT * FROM internship WHERE mode='$mode'";
$result = mysqli_query($conn,$query);

echo "<table border='1' cellpadding='10'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Mode</th>
      </tr>";

while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['stud_name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['contact']."</td>";
    echo "<td>".$row['mode']."</td>";
    echo "</tr>";
}

echo "</table>";
?>