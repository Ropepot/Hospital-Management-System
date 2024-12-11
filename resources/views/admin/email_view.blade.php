

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

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

              
              

          <form action="{{ url('sendemail', $data->id) }}" method="POST" >

          @if (session()->has('message'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session()->get('message') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

          @endif


            @csrf
            <div style="padding: 15px;">
                <label>Greeting</label>
                <input type="text" style="color:black; width:250px;" name="greeting" placeholder="Write the greeting" required>
            </div>

            <div style="padding: 15px;">
                <label>Body</label>
                <input type="text" style="color:black; width:250px;" name="body" placeholder="Write the body" required>
            </div>

            <div style="padding: 15px;">
                <label>End Part</label>
                <input type="text" style="color:black; width:250px;" name="endpart" placeholder="Write the endpart" required>
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