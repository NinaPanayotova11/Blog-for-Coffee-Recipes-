<?php session_start();
$mysqli = new mysqli('localhost', 'root', '', 'perfectcup');

if($mysqli->connect_error){
  die('Error:('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}

$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);

if(strlen($fname)<2){
  echo 'First name is too short';
}elseif (strlen($lname)<2){
  echo 'Last name is too short';
}elseif (strlen($email)<=4){
  echo 'Email is too short';
}elseif (filter_var($email, FILTER_VALIDATE_EMAIL)===false){
  echo 'Not a valid Email';
}elseif (strlen($password)<=4){
  echo 'Password is too short';
}else{
  $spassword = password_hash($password, PASSWORD_BCRYPT, array('cost'=>12));

  $query="SELECT * FROM members WHERE email='$email'";
  $result=mysqli_query($mysqli,$query) or die(mysqli_error());
  $num_row=mysqli_num_rows($result);
  $row=mysqli_fetch_array($result);

  if ($num_row < 1) {

    $insert_row = $mysqli->query("INSERT INTO members (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$spassword')");

    if ($insert_row) {

      $_SESSION['login'] = $mysqli->insert_id;
      $_SESSION['fname'] = $fname;
      $_SESSION['lname'] = $lname;

      echo 'true';

    }

  } else {

    echo 'Email already exists';

  }
}
?>