
//customers.php
<?php include 'includes/config.php'?>
 <?php include 'includes/header.php'?>
<?php



$sql = 'SELECT * FROM Creatures';

//----config area ends here---------------------

	echo '
	<h1>creatures.php</h1>
          <p>Clever content about creatures goes here!</p>


	';
	$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if (mysqli_num_rows($result) > 0)//at least one record!
{//show results
	while ($row = mysqli_fetch_assoc($result))
    {
	   echo "<p>";
	   echo "Name: <b>" . $row['Name'] . "</b><br />";
	   echo "Culture: <b>" . $row['Culture'] . "</b><br />";
	   echo "Description: <b>" . $row['Description'] . "</b><br />";
	   echo "</p>";
    }
}else{//no records
	echo '<div align="center">What! No creatures?  There must be a mistake!!</div>';
}

@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database


	/*

	//Connect to MySQL, authenticate the MySQL users
	$myConn = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);


	//Connect to the Database, verify authorization to this resource

	mysql_select_db(DB_NAME,$myConn);


	//Select data to be retrieved via SQL statement
	//Retrieve data set (result)

	$result = mysql_query($sql,$myConn);



	//Loop through the data, and insert it into our page

	while($row=mysql_fetch_assoc($result))
{ //pull data from array
    echo "FirstName: " . $row['FirstName'] . "<br />";
    echo "LastName: " . $row['LastName'] . "<br />";
    echo "Email: " . $row['Email'] . "<br />";
}

*/


	//Disconnect from MySQL, and release resources
	@mysql_free_result($result); # releases web server memory

	@mysql_close($myConn);

	 include 'includes/footer.php'?>
