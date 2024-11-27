

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <style type="text/css">
      label
      {
        display:inline-block;
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
          <div class="container allign-center" style="padding-top: 100px;">

          @if(session()->has('message'))

          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="float: right;">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          @endif




          <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">

                @csrf
              <div style="padding: 15px;">
                <label>Doctor's Name</label>
                <input type="text" style="color:black; width:250px" name="name" placeholder="Write the name">
              </div>

              <div style="padding: 15px;">
                <label>Room number</label>
                <input type="text" style="color:black; width:250px" name="room" placeholder="Write the room number">
              </div>

              <div style="padding: 15px;">
                <label>Contact Number</label>
                <input type="text" style="color:black; width:250px" name="contact" placeholder="Write the contact number">
              </div>

              <div style="padding: 15px;">
                  <label>Specialty</label>
                  <select name="Specialty" style="color:black; width:250px;">
                      <option style="color:black;">Select</option>
                      <option value="Dermatologist" style="color:black;">Dermatologist</option>
                      <option value="Pediatrician" style="color:black;">Pediatrician</option>
                      <option value="Neurologist" style="color:black;">Neurologist</option>
                      <option value="Cardiologist" style="color:black;">Cardiologist</option>
                      <option value="Radiologist" style="color:black;">Radiologist</option>
                  </select>
              </div>

              <div style="padding: 15px;">
                <label>Doctor's Image</label>
                <input type="file"  name="file" >
              </div>

              <div style="padding: 30px; margin-left:90px">
                <input type="submit" class="btn btn-success">
            </div>



            </form>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')  
  </body>
</html>