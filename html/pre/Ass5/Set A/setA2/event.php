<?php
	$con = pg_connect("host=localhost dbname=event port=5432 user=postgres")or die("unable to connect");

	$title=$_POST['title'];

	$sql = "select event.eno,event.title,committee.cno,committee.status from event,committee,eve_com where event.eno=eve_com.eno and committee.cno = eve_com.cno and title='$title'";

        $ssql="UPDATE committee SET status = 'working'from event,eve_com WHERE event.title ='$title' and event.eno=eve_com.eno and committee.cno = eve_com.cno";


	$result=pg_query($con, $sql);
        $res=pg_query($con,$ssql);
        if($res)
        echo"record updated succeessfully";
        else
        echo"not updated";
                 
?>
<table border=1>
<tr>
	<th>EVENT NO</th>
	<th>TITLE</th>
	<th>Committee No</th>
	<th>Status</th>
</tr>
<?php
	while($row=pg_fetch_row($result))
 	{
?>
<tr>
	<td><?php echo $row[0]?></td>
	<td><?php echo $row[1]?></td>
	<td><?php echo $row[2]?></td>
	<td><?php echo $row[3]?></td>
</tr>
<?php
	}
?>
</table>

