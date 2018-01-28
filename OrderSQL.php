<?php

    if (!empty($_POST['act'])) {
        createOrder($_POST['act']);
    }
    function createOrder($ItemID, $Quantity=1, $Seat='3B'){
        include('sqlsetup.php');

        $sql = "INSERT INTO `orders` (`ID`, `Ordered`, `Delivered`, `ItemID`, `Complete`, `Seat`, `Quantity`) VALUES (NULL, CURRENT_TIMESTAMP, NULL, ' . $ItemID . ', \'0\', ' . $Seat . ',' . $Quantity . ')";

        $conn->query($sql);
        $conn->close();
    }
?>