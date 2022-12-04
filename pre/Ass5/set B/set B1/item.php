<?php
	$fname = 'item.dat';
	
	
	$fh = fopen($fname,"r");

?>

<table border=1>
<tr><th>item No</th><th>item Name</th><th>unit sold</th><th>rate</th><th>amount</th></tr>

<?php

	while(($rec=fgets($fh,80))!==false)
	
	{

		$record = explode(' ',$rec);

		$record[] = ($record[2]*$record[3]);
		
		echo "<tr>";

		foreach($record as $val)

		echo "<td>$val</td>";

		echo "</tr>";

	}

	fclose($fh);

?>
</table>
