<!DOCTYPE html>
<html>
<head>
    <title>Book Details</title>
</head>

<body>

<h2>Book Details</h2>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>Title</th>
    <th>Author</th>
    <th>Year</th>
    <th>Price</th>
</tr>

<?php

$xml = simplexml_load_file("books.xml")
    or die("Error: Cannot load XML file.");

foreach ($xml->book as $book) {

    echo "<tr>";

    echo "<td>" . $book->title . "</td>";
    echo "<td>" . $book->author . "</td>";
    echo "<td>" . $book->year . "</td>";
    echo "<td>" . $book->price . "</td>";

    echo "</tr>";
}

?>

</table>

</body>
</html>