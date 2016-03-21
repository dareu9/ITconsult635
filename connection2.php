#!/usr/bin/php
<?php

$username = $argv[1];
$password = $argv[2];
$usertype = $argv[3];
$jobID = $argv[4];
$job_title = $argv[5];
$salary = $argv[6];
$status = $argv[7];
$duration = $argv[8];
$location = $argv[9];

$db = new mysqli('localhost','root','asdfasdf','itconsult635');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}

else{

//$db->close();
echo "DB Connection Success".PHP_EOL;
}

//echo "attempting to insert record: $jobID $job_title $salary $status $duration $location".PHP_EOL;
//$insertString = "insert into profile(jobID,job_title,salary,status,duration,location) values ('1','dba','$85,000','full-time','2yrs','NY)'";
//echo "attempting to execute this SQL:".PHP_EOL;
//echo $insertString.PHP_EOL;
//$results = $db->query($insertString);
$queryString = "select username, password from Login where usertype='$usertype';";
$results = $db->query($queryString);
//print_r($results);
while ($obj = mysqli_fetch_object($results))
{
   // print_r($obj);
   if($username==$obj->username && $password ==$obj->password)
   {
    // printf("%s \n",$obj->username);
    echo " Login Success".PHP_EOL;
      if($usertype=="manager")
      {
      echo "attempting to insert record: $jobID $job_title $salary $status $duration $location".PHP_EOL;
      $insertString = "insert into position values ('','$job_title','$salary','$status','$duration','$location');";
      echo "attempting to execute this SQL:".PHP_EOL;
      echo $insertString.PHP_EOL;
      $results = $db->query($insertString);
      break;
      }
   }
   // else
    //{
   // 
    //}
    
    else
    {
    echo " Invalid Login".PHP_EOL;
    }
}
?>
