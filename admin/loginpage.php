


<center><table border="1">

<tr>
<th>USERNAME</th>
<th >PASSWORD</th>

</tr>

<?php

include('connect.php');

$display="select * from login";
$row=mysql_query($display);
while($record=mysql_fetch_array($row))
{
	$username=$record['username'];
	$password=$record['password'];
	
	
	
	
	echo "<tr>
	<td>$username</td>
	<td>$password</td>



</tr>";
}
?>
</table></center>