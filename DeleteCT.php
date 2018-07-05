<?php

    include("connectDB.php");
    /* Get data from Client side using $_POST array */
    $maCT  = $_POST['maCT'];
    //SQL query to get results from database
    $sql    = "DELETE FROM tblchitietctdt WHERE tblchitietctdt.maCT = ?";
    $stmt   = $conn->prepare($sql);
    $stmt->bind_param('i', $maCT);
    $stmt->execute();
    $conn->close();

?>