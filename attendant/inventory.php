<?php require('header.php');?>
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
              <tr>
                <td>Coke</td>
                <td>5.00</td>
                <td>58</td>
                <td></td>
                <td>No</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php require('footer.php');?>