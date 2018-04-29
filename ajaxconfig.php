<?php
session_start(); 
$UserID=$_SESSION['UserID'];
$Classname=$_SESSION['Classname'];
$data = array();

$link = mysqli_connect("webservhost", "lampofgod_lamp", "025179750", "lampofgod_lamp");

if (!$link) { echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$query = "SELECT * FROM tb_event WHERE Classname = '".$Classname."' ";

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