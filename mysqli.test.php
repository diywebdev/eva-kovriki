<?

$user="047286992_test";
$password="ey6xgW\fnvfc";
$database="mudriy-yalta_test";
$host="localhost";


$link = mysqli_connect($host, $user, $password, $database);

if (!$link) {
    die('Connection error: (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

print 1;

?>