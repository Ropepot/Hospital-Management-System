<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <style type="text/css">
      label {
        display: inline-block;
        width: 200px;
      }
    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
          <div class="container align-center" style="padding-top: 100px;">
            <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">

              @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session()->get('message') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif

              @csrf
              <div style="padding: 15px;">
                <label>Doctor's Name</label>
                <input type="text" style="color:black; width:250px;" name="name" placeholder="Write the name" required>
              </div>

              <div style="padding: 15px;">
                <label>Room Number</label>
                <input type="text" style="color:black; width:250px;" name="room" placeholder="Write the room number" required>
              </div>

              <div style="padding: 15px;">
                <label>Contact Number</label>
                <input type="text" style="color:black; width:250px;" name="contact" placeholder="Write the contact number" required>
              </div>

              <div style="padding: 15px;">
                <label>Specialty</label>
                <select name="Specialty" style="color:black; width:250px;" required>
                  <option value="" disabled selected style="color:gray;">Select the Specialty</option>
                  <option value="Dermatologist" style="color:black;">Dermatologist</option>
                  <option value="Pediatrician" style="color:black;">Pediatrician</option>
                  <option value="Neurologist" style="color:black;">Neurologist</option>
                  <option value="Cardiologist" style="color:black;">Cardiologist</option>
                  <option value="Radiologist" style="color:black;">Radiologist</option>
                </select>
              </div>

              <div style="padding: 15px;">
                <label>Doctor's Image</label>
                <input type="file" name="file">
              </div>

              <div style="padding: 30px; margin-left:90px">
                <input type="submit" class="btn btn-success">
              </div>

              <!-- Back button -->
              <div style="padding: 15px; ">
                <button type="button" class="btn btn-secondary" onclick="history.back()">Back</button>
              </div>
            </form>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')  
  </body>
</html>
