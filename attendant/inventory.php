<?php require('header.php');?>
  <?php
    require('sqlsetup.php');
    $sql = "SELECT items.Name, items.Price, inventories.Quantity from items, inventories WHERE items.ID = inventories.ItemID and inventories.PlaneID = 1";
    $result = $conn->query($sql);
    $conn->close();

    $numrows = $result->num_rows;
  ?>
  <div class="container-fluid">
  
    <div class="row">
      <div class="col-12">
        <h1>Inventory</h1>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Remaining</th>
                <th>Dietary Restriction</th>
                <th>Age Restriction</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Remaining</th>
                <th>Dietary Restriction</th>
                <th>Age Restriction</th>
              </tr>
            </tfoot>
            <tbody>
              <?php
                while($res = mysqli_fetch_assoc($result)) {
                  echo "<tr>" . "<td>" . $res['Name'] . "</td>" .
                  "<td>" . $res['Price'] . "</td>" .
                  "<td>" . $res['Quantity'] . "</td>" .
                  "<td>" . null . "</td>" .
                  "<td>" . null . "</td>" . "</tr>";
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php require('footer.php');?>