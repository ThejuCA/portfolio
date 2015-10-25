<?php
$name=$_POST["name"];
$tel=$_POST["phone"];
$email=$_POST["email"];




$mysql_host = "sql210.lockernerd.co.uk";
$mysql_database = "lnw_16618010_porfolio";
$mysql_user = "lnw_16618010";
$mysql_password = "thejunan";

$con=mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_select_db($mysql_database, $con );
mysql_query("insert into clients(id,name,email,phone) values(12,'$name','$tel','$email')",$con);
mysql_close($con);
echo $name;
echo "<br>";
echo $tel;
echo "<br>";
echo $email;
echo "<br>";

$customer_message=<<<THANKS
Dear $_POST[name]
Thank you very much for applying our seminar.
We are looking forward to seeing you in the.

--
Warm Regards,
Theju C.A
THANKS;
$staff_message=<<<INFORMATION
Name : $_POST[name]
TEL : $_POST[phone]
Email : $_POST[email]
INFORMATION;

mail($_POST['email'],'Thank you',$customer_message);
mail('thejuanand1989@gmail.com','detail filled',$staff_message);

?>

Registered!!