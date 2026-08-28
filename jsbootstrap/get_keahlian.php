<?php

include "koneksi.php";

$query = mysqli_query($conn, "
    SELECT 
        keahlian.nama,
        tingkat_keahlian.keahlian_id,
        tingkat_keahlian.presentase
    FROM tingkat_keahlian
    INNER JOIN keahlian 
        ON tingkat_keahlian.keahlian_id = keahlian.id
    ORDER BY tingkat_keahlian.keahlian_id ASC
");

$data = [];

while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

header('Content-Type: application/json');

echo json_encode($data);

?>