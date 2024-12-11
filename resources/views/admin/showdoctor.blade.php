

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
            <div align="center" style="padding-top:100px; padding-bottom:100px; margin-left:1px;">

            
                <table>
                    <tr align="center" style="background-color:black;">
                        <th style="padding:10px;">Doctor Name</th>
                        <th style="padding:10px;">Contact Number</th>
                        <th style="padding:10px;">Specialty</th>
                        <th style="padding:10px;">Room No.</th>
                        <th style="padding:10px;white-space: nowrap">Image</th>
                        <th style="padding:10px;">Delete</th>
                        <th style="padding:10px;">Update</th>
                        
                        
                    </tr>

                    @foreach($data as $doctor)
                    
                    <tr align="center" style="background-color:skyblue;">

                        <td style="padding:10px; white-space: nowrap">{{$doctor->name}}</td>
                        <td style="padding:10px; white-space: nowrap">{{$doctor->contact}}</td>
                        <td style="padding:10px; white-space: nowrap">{{$doctor->Specialty}}</td>
                        <td style="padding:10px; white-space: nowrap">{{$doctor->room}}</td>
                        <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}" alt=""></td>
                        <td>
                            <a onclick="return confirm('Are you sure to delete this?')"class="btn btn-danger" href="{{url('deletedoctor', $doctor->id)}}">Delete</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{url('updatedoctor', $doctor->id)}}">Update</a>
                        </td>
                       
                    </tr>

                    @endforeach
                   

                </table>
          
          
            </div>
          
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')  
  </body>
</html>