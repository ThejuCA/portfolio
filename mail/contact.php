<?PHP

$user_name = "lnw_16618010";
$password = "thejunan";
$database = "lnw_16618010_porfolio";
$server = "sql210.lockernerd.co.uk";

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {

echo "Database Found ";
mysql_close($db_handle);

}
else {

echo "Database NOT Found ";

}

?>