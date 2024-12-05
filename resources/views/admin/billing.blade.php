
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
                <form action="{{url('generateBill', $appoint->id)}}" method="POST" enctype="multipart/form-data">
                    
                    @csrf
                    <div style="padding:15px">
                        <label>Patient's Name</label>
                        <input type="text" style="color:black"name="name" value="{{$appoint->name}}">
                    </div>
                    
                    <div style="padding:15px">
                        <label>Doctor's Name</label>
                        <input type="text" style="color:black" name="doctor" value="{{$appoint->doctor}}">
                    </div> 
                    
                    <div style="padding:15px">
                        <label>Contact Number</label>
                        <input type="text" style="color:black" name="contact" value="{{$appoint->contact_number}}">
                    </div>

                    <div style="padding:15px">
                        <label>Billing</label>
                        <input type="text" style="color:black" name="Billing" value="{{$appoint->Billing}}">
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