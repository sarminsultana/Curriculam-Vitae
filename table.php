<?php
include('config.php');
$cv="CREATE TABLE cv(fname VERCHAR(50),
lname VARCHAR(50),
fathername VARCHAR(50),
mothername VARCHAR(50),
phone INT(25),
email VARCHAR(50),
nid INT(50) NOT NULL,
address VARCHAR(50),
ssc VARCHAR(50),
hsc VARCHAR(50),
nationality VARCHAR(50),
religion VARCHAR(50),
gender VARCHAR(50),
dob DATE(25),
bg VARCHAR(25),
PRIMARY KEY(nid)

)";
$result=mysqli_query($myconn,$cv);
if($result===TRUE)
{
	echo "cv table created";
}
else
{
		echo "cv table not created";

}

?>
