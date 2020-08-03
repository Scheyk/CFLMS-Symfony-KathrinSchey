<?php
function getAllPosts()
{
 // Connecting, selecting database
 $link= mysqli_connect('localhost', 'root', '','cr11_kathrinschey_petadoption' );

 // Performing SQL query
 $query='SELECT * FROM animals';
 $result = mysqli_query($link, $query);

  // Filling up the array
 $animals = array();
 while ($row = mysqli_fetch_array($result))
 {
  $animals[] = $row;
 }

  // Closing connection
 mysqli_close($link);
 return $animals;
}

?>