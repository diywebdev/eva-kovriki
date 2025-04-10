<?

error_reporting(E_ALL);

$email = "brondware@yandex.ru";


$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: <no-reply@test.com>\r\n";

if(!mail($email, "test", "test", $headers)){
    
    print "not sent!";
    
}else{
    
    print "mail sen";
    
}

?>