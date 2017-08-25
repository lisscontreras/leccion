<?php
$data = file_get_contents('1.jpg');
$image = pg_escape_bytea($data);
$conn = pg_connect("user=postgres password=postgres dbname=clase host=localhost");

pg_query($conn, "UPDATE demo SET foto = '{$image}' WHERE id = 1");
pg_close($conn);

?>
