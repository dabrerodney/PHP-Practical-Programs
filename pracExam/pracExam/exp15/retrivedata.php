<?php
$conn = mysqli_connect('localhost', 'root', '', 'test');

if (!$conn) {
    die("Error in connecting: " . mysqli_connect_error());
} else {
    $query = "INSERT INTO stud VALUES('sahil','1803','0076');";


    if (mysqli_query($conn, $query)) {
        echo "Data inserted";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    $ret_query = "SELECT name,roll,id FROM stud;"; 
    $result = mysqli_query($conn, $ret_query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) { 
            echo $row['name'] . " ";
            echo $row['roll'] . " ";
            echo $row['id'] . "<br>";
        }
    } else {
        echo "No data found";
    }

    $conn->close();
}
?>
