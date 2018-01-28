<?php
    require('sqlsetup.php');

    if (!empty($_POST['id'])) {
        CompleteOrder($_POST['id']);
        die($_POST['id']);
    }
    else
        die("FUCK");

    function CompleteOrder($orderID){
      include('sqlsetup.php');
      $updatesql = "UPDATE orders\n"
      . "    SET `Complete` = 1,\n"
      . "        `Delivered` = CURRENT_TIMESTAMP\n"
      . "    WHERE `ID` = " . $orderID;
      $conn->query($updatesql);
      $conn->close();

      redirect('orders.php');
    }

    function redirect($url) {
        ob_start();
        header('Location: '.$url);
        ob_end_flush();
        die();
    }
?>