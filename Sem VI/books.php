<html>
<body>
<?php
$xml=simplexml_load_file('books.xml');
?>
<center><b>Book Details</b></center>
<table border ="1">
<tr><th>Book Category </th>
<th>Book Code</th>
<th>Book Name</th>
<th>Book Author</th>
<th>Book Price</th>
<th>Book Year</th></tr>
<tr>
<?php
foreach($xml->books as $a)
{
echo "<tr><td>".$a['category']."<br>";
echo "<td>".$a->book_no."<br>";
echo "<td>".$a->book_name."<br>";
echo "<td>".$a->author_name."<br>";
echo "<td>".$a->price."<br>";
echo "<td>".$a->year."<tr><br>";
}
?>
</tr>
</table>
</body>
</html>
