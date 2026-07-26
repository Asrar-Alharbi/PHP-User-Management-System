<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "sql311.infinityfree.com";
$username = "if0_42464366";
$password = "AsrarFahad12345";
$dbname = "if0_42464366_frist";

// الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// إدخال البيانات فقط عند إرسال الفورم
if (isset($_GET['name']) && isset($_GET['age'])) {

    $name = $_GET['name'];
    $age = $_GET['age'];

    $sql = "INSERT INTO User (ID, Name, Age, Status)
    VALUES ('', '$name', '$age', 0)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully <br><br>";
    } else {
        echo "Error: " . $conn->error;
    }
}

// عرض جميع البيانات
$sql = "SELECT * FROM User";
$result = $conn->query($sql);

echo "<table border='1'>";
echo "<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Status</th>
<th>Action</th>
</tr>";

while($row = $result->fetch_assoc()){

echo "<tr>";

echo "<td>".$row['ID']."</td>";
echo "<td>".$row['Name']."</td>";
echo "<td>".$row['Age']."</td>";
echo "<td>".$row['Status']."</td>";

echo "<td>
<a href='toggle.php?id=".$row['ID']."'>
<button>Toggle</button>
</a>
</td>";

echo "</tr>";

}

echo "</table>";

echo "<br><br>";
echo "<a href='f.html'><button>Add New Person</button></a>";

$conn->close();
?>