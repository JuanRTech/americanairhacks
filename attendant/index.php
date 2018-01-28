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
              <i class="fa fa-comments" aria-hiden="true"></i>
            </div>
            <div class="mr-5">26 New Messages!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="messages.php">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-credit-card" aria-hidden="true"></i>
            </div>
            <div class="mr-5">123 New Orders!</div>
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
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h2>Trip Information</h2>
            <p>Departed: Houston, TX USA</p>
            <p>Destination: Leauge City, 7th District, MOON</p>
            <p>Time in flight: 3:12</p>
            <p>ETA: 3:43pm</p>
            <p>Time to destination: 2:12</p>
            <p>Distance to destination: 802mi</p>
            <h4>Destination Conditions</h4>
            <p>Current Time: 1:31pm</p>
            <p>Temperature: 76 Degrees</p>
            <p>Weather: Cloudy</p>
          </div>
        </div>
      </div>
      <div></div>
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h2>Responsibilities</h2>
            <p>Rows: 1-15</p>
            <p>Seats: A-D</p>
           </div>
         </div>
      </div>
      <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h2>Plane Information</h2>
          <p>Manufacturer: Boeing</p>
          <p>Model: 747-800</p>
          <p>Crew Size: 12</p>
          <p>Pilot: Derek She</p>
          <p>Co-Pilot: Juan Reqeenah</p>
          <p>Passenger Capacity: 156/300</p>
        </div>
      </div>
        
      </div>
    </div>
  </div>
<?php require('footer.php');?>