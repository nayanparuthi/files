<?php
$db_host = 'localhost';
$db_username = 'username';
$db_password = 'password';
$db_name = 'TicketApp';

mysql_connect( $db_host, $db_username, $db_password) or die(mysql_error());
mysql_select_db($db_name); 

$query = "SELECT * FROM `ticket`";
$sqlsearch = mysql_query($query);
$resultcount = mysql_numrows($sqlsearch);

if ($resultcount > 0) {
 
    mysql_query("UPDATE `ticket` SET 
                                `Fnum` = '$Fnum',
                                `Aname` = '$Aname',
                                `dest` = '$dest',
                                `src` = '$src',
                                `ddate` = '$ddate' 
				`dtime` = '$ddtime',
                                `adate` = '$adate',
                                `atime` = '$atime',
                                `price` = '$price'
                                       ") 
     or die(mysql_error());
    
} else {

    mysql_query("INSERT INTO `ticket` (Fnum,Aname,dest,src,ddate,dtime,adate,atime,price) 
                               VALUES ('$Fnum','$Aname','$dest',,'$src','$ddate','$dtime','$adate','$atime','$price'")
    or die(mysql_error());  

}
?>