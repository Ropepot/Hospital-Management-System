<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card corona-gradient-card">
          <div class="card-body py-0 px-0 px-sm-3">
            <div class="row align-items-center">
              <div class="col-4 col-sm-3 col-xl-2">
                <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
              </div>
              <div class="col-5 col-sm-7 col-xl-8 p-0">
                <h4 class="mb-1 mb-sm-0">WELCOME TO ADMIN DASHBOARD</h4>
                <p class="mb-0 font-weight-normal d-none d-sm-block">NRG-INFINITECH HOSPITAL MANAGEMENT SYSTEM</p>
              </div>
              <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Inline Cards -->
    <div class="row mt-4">
      <!-- Users Card -->
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Total Registered Users</h4>
            <div class="d-flex align-items-center">
              <i class="mdi mdi-account-multiple icon-lg text-primary me-3"></i>
              <div>
                <h2 class="mb-0">{{$data->count()}}</h2>
                <p class="text-muted">Users</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Doctors Card -->
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Total Registered Doctors</h4>
            <div class="d-flex align-items-center">
              <i class="mdi mdi-account-heart icon-lg text-success me-3"></i>
              <div>
                <h2 class="mb-0">{{$doctor->count()}}</h2>
                <p class="text-muted">Doctors</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Appointments Card -->
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Total Appointments</h4>
            <div class="d-flex align-items-center">
              <i class="mdi mdi-calendar-check icon-lg text-warning me-3"></i>
              <div>
                <h2 class="mb-0">{{$appoint->count()}}</h2>
                <p class="text-muted">Appointments</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"></span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
          <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"></a>
        </span>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
