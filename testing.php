<?php
$to="kallol.sarkr@gmail.com";
$email="aa.aa@gmail.com";
$email_body="Testing email";
$headers=" Hello "
mail($to,$email,$email_body,$headers);
header("Location: index.html");
?>