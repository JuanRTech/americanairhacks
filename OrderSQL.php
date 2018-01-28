<?php
    function createOrder($ItemID, $Quantity, $Seat){
        include('sqlsetup.php');

        $sql = "INSERT INTO `orders` (`ID`, `Ordered`, `Delivered`, `ItemID`, `Complete`, `Seat`, `Quantity`) VALUES (NULL, CURRENT_TIMESTAMP, NULL, ' . $ItemID . ', \'0\', ' . $Seat . ',' . $Quantity . ')";

        $conn->query($sql);
        $conn->close();
    }
?>