<?php
$data = array();

$link = mysqli_connect("webservhost", "chertam_59010539", "Chertam0539", "chertam_test_test");

if (!$link) { echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$query = "SELECT * FROM tb_event";

if ($result = $link->query($query)) {

    /* fetch object array */
    while ($obj = $result->fetch_object()) {
        $data[] = array(
            'id' => $obj->id,
            'title'=> $obj->title,
            'start'=> $obj->start_date,
            'end'=> $obj->stop_date
            );
    }

    /* free result set */
    $result->close();
}
mysqli_close($link);

echo json_encode($data);
?>