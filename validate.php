<?php
//this program will only make sure data is given through the post
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name1 =test_input($_POST["name"]);
    $email=test_input($_POST["email"]);
    $website=test_input($_POST["website"]);
  $comment=test_input($_POST["comment"]);
  $gender=test_input($_POST["geender"]);  
}
echo $name1. "<br/>".$email."<br/>".$website."<br/>".$gender;
function test_input($data) {
    $data =trim($data);
    $data =stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>