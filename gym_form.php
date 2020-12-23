<?php
$host='localhost';
$user='root';
$pass='';
$db='gym';
$mname=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$connect=mysqli_connect($host,$user,$pass,$db);
if($connect)
echo "Yes";
else
    echo "No";




$query = "insert into december (mname,age,gender,email) 
values ('$mname','$age','$gender','$email')";
$result = mysqli_query($connect,$query);

if ($result){
    echo "Registered successful.";
}else {
    echo "Unsuccessful Attempt.";
}
