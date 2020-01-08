 <?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>usn</th><th>name</th><th>mobile_number</th><th>email</th><th>open course</th><th>fees</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

//require_once("connectsql.php");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oopen_course";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $OpenCourse =$_POST['sub'];
    $stmt = $conn->prepare("CALL displayContents('$OpenCourse')");
	
    //$stmt->execute($usn);
$stmt ->execute(array($OpenCourse));
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 