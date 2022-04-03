<?php define('filesecurity','');
require 'config.php';
//MySQL Connection
$conn=mysqli_connect($dbh, $dbu, $dbp);
mysqli_select_db($conn, $dbn);
$conf=mysqli_query($conn, "Select * From `config` Where `id`='1'");
$config=mysqli_fetch_array($conf);
$su="//".$config['surl']."/";
//JDate
require 'lib/jdf.php';