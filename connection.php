#!/usr/bin/php
<?php
//$emp_no = $argv[1];
//$co_name = $argv[2];
//$addresss = $argv[3];
//$email = $argv[4];
//$telephone = $argv[5];
//$revenue = $argv[6];
$db = new mysqli('localhost','root','asdfasdf','itconsult635');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}

else{

//$db->close();
echo "DB Connection Success".PHP_EOL;


//echo "attempting to insert record: $emp_no $co_name $address $email $telephone $revenue".PHP_EOL;
$insertString = "insert into profile(emp_no,co_name,address,email,telephone,revenue) values ('5','njit','edison,nj','am925@njit.edu','347-951-8523', '75million)'";
echo "attempting to execute this SQL:".PHP_EOL;
echo $insertString.PHP_EOL;
$results = $db->query($insertString);
$queryString = "select * from profile;";
$results = $db->query($queryString);
print_r($results);
while ($obj = mysqli_fetch_object($results))
{
    print_r($obj->co_name);
}
}
?>