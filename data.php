<?php
	require 'conn.php';
	$query = mysqli_query($conn, 'SELECT * FROM `file`');
	while($fetch = mysqli_fetch_array($query)){
?>
<tr>
	<td><?php echo $fetch['filename']?></td>
</tr>
<?php
	}
?>