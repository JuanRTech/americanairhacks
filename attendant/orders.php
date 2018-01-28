<?php require('header.php');?>
  <?php
    require('sqlsetup.php');
    $sql = "Select orders.*, items.Name, items.Price from orders, items where (orders.Complete = false and orders.ItemID = items.ID) ORDER BY timediff(orders.Ordered,CURRENT_TIMESTAMP)";
    $result = $conn->query($sql);
    $conn->close();

    function CompleteOrder($orderID){
      include('sqlsetup.php');
      $updatesql = "UPDATE orders\n"
      . "    SET `Complete` = 1,\n"
      . "        `Delivered` = CURRENT_TIMESTAMP\n"
      . "    WHERE `ID` = " . $orderID;
      $conn->query($updatesql);
      $conn->close();
    }
  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>Orders</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <ul class="list-group">
          <?php
            while($res = mysqli_fetch_assoc($result)){
              echo '<li class="list-group-item">';
              echo '<div class="row">';
              echo "<div class='col'>";
              echo "<b>Seat: " . $res['Seat'] . "</b>";
              echo "</div>";
              echo "<div class='col'>";
              echo "<b>Type: " . $res['Name'] . "</b>";
              echo "</div>";
              echo "<div class='col'>";
              echo "<b>Price: " . $res['Price'] . "</b>";
              echo "</div>";
              echo "<div class='col'>";
              echo "<b>Quantity: " . $res['Quantity'] . "</b>";
              echo "</div>";
              echo "<div class='col'>";
              echo '<form action="orders.php" method="get">';
              echo '<input type="hidden" name="act" value="' . $res["ID"] . '">';
              echo '<button type="submit" class="btn btn-success btn-block">Delivered</button>';
              echo '</form>';
              echo '</div>';
              echo '</div>';
              echo '</li>';
            }
          ?>
        </ul>
      </div>
    </div>
  </div>
<?php require('footer.php');?>
<?php if (!empty($_GET['act'])) {
    CompleteOrder($_GET['act']);
  }
  ?>