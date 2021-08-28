<?php function getCounter($counterID)
{
	// each counter value is stored inside a unique file
	// We use $counterID as a part of the file name
	// Example: file name will be "counter1.txt" if $counterID is set to "1"

	$fileName = "counter".$counterID.".txt"; 

	if( file_exists($fileName) ) {
		list($numVisitors)=file($fileName); // Read contents from the file
	} else {
		$numVisitors=0; // This is the first time the page is accessed
	}

	$numVisitors=$numVisitors+1; // Increase the count

	$fil=fopen($fileName,"w"); 	// Open the file to replace old value
	fputs($fil,$numVisitors);  	// Write the new count to the file
	fclose($fil);				// Close the file
	return $numVisitors;		// Return the new count
}
?>

<html>
   
   <head>
      <title>Setting up a PHP session</title>
   </head>
   
   <body>
	<form action="action.php" method="post">
 <p>Your name: <input type="text" name="name" /></p>
 <p>Your age: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>
   </body>
   
</html>
