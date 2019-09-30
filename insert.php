 <?php
 
 header("location: index.html");
 define('DB_USERNAME','blackmag_push');
	define('DB_PASSWORD','blackmag_push');
	define('DB_NAME','blackmag_db');
	define('DB_HOST','localhost');

// Create connection
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$Rid = '1';
        $name = $_POST["Name"];
        $email = $_POST["Email"];
        $phone = $_POST["Phone"];
        $year = $_POST["Year"];
        $college = $_POST["College"];
        $event= $_POST["Event"];
        $amount = $_POST["Amount"];
        $transactionid = $_POST["Txn_id"];
        
 $sql = "INSERT INTO Registrations(Name,Email,Phone,Year,College,Event,Amount,Transaction_id) VALUES('".$name."','".$email."','".$phone."','".$year."','".$college."','".$event."','".$amount."','".$transactionid."')";
	echo "after sql";

if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 