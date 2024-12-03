
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

    <style type="text/css">
        label
        {
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

        <div class="container-fluid page-body-wrapper" >
           
            <div class="container" align="center" style="padding: 100px;">
                @if (session()->has('message'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                @endif
                <form action="{{url('editdoctor', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px">
                        <label>Doctor Name</label>
                        <input type="text" style="color:black"name="name" value="{{$data->name}}">
                    </div>
                    <div style="padding:15px">
                        <label>Room Number</label>
                        <input type="text" style="color:black" name="room" value="{{$data->room}}">
                    </div>   
                    <div>
                        <label>Specialty</label>
                        <input type="text" style="color:black" name="Specialty" value="{{$data->Specialty}}">
                    </div>
                    <div style="padding:15px">
                        <label>Contact Number</label>
                        <input type="text" style="color:black" name="contact" value="{{$data->contact}}">
                    </div>
                    <div style="padding:15px">
                        <label>Old Image</label>
                        <img height="100" width="150" src="doctorimage/{{$data->image}}" alt="">
                    </div>

                    <div style="padding:15px">
                        <label>Change Image</label>
                        <input type="file" name="file">
                    </div>
                    <div style="padding:15px">
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