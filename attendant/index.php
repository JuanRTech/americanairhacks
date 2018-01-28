<?php require('header.php');?>
  <div class="container-fluid">
    <!-- Icon Cards-->
    <div class="row">
      <div class="col-12">
        <h1>Dashboard</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-credit-card" aria-hidden="true"></i>
            </div>
            <div class="mr-5">Passenger Orders</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="orders.php">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-secondary o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-table" aria-hiden="true"></i>
            </div>
            <div class="mr-5">Plane Inventory</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="inventory.php">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h2>Trip Information</h2>
          </div>
          <div class="card-body">
            Departed: IAH <br>
            Destination: MOON <br>
            Time in flight: 3:12 <br>
            ETA: 3:43pm <br>
            Time to destination: 2:12 <br>
            Distance to destination: 802mi <br>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h2>Destination Conditions</h2>
          </div>
          <div class="card-body">
            Local Time: 1:31pm <br>
            Temperature: 76 Degrees <br>
            Weather: Cloudy with a change of meatballs<br>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
           <h2>Responsibilities</h2>
          </div>
          <div class="card-body">
            Rows: 1-15 <br>
            Seats: A-D <br>
           </div>
         </div>
      </div>
      <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h2>Plane Information</h2>
        </div>
        <div class="card-body">
          Manufacturer: Boeing <br>
          Model: 747-800 <br>
          Crew Size: 12 <br>
          Pilot: Derek She <br>
          Co-Pilot: Juan Reqeenah <br>
          Passenger Capacity: 156/300 <br>
        </div>
      </div>
        
      </div>
    </div>
  </div>
<?php require('footer.php');?>