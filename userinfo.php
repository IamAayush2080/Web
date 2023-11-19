<?php
  $con = mysqli_connect('localhost' , 'root' , 'userinfo');
    if($con){
               echo"Connection Successful";
}else{
          echo"No Connection";
}

mysqli_select_db($con , 'userinfo');

@$user = $_POST['user'];
@$email = $_POST['email'];
@$number = $_POST['password'];
@$comments = $_POST['comments'];
$query = " insert into userinfo(user, email, number, comments)
values ('$user , '$email' , '$number' , '$comments')";
echo"$query";
mysqli_query($con, $query);
header("location:index.html")
?>
















