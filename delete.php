 <?php



//require_once("connectsql.php");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oopen_course";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $OpenCourse =$_POST['sub'];
    $stmt = $conn->prepare("CALL deleteCourse('$OpenCourse')");
	$stmt ->execute();
	echo "done";
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?> 