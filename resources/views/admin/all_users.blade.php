

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
            <div style="padding-top:100px; margin-left:75px;">

            @if($data->isEmpty())
            <p style="font-size:20px; color:white; padding:150px;">No Registered Users as of now.</p>

            @else
                <table>
                    <tr align="center" style="background-color:black;">
                        <th style="padding:10px;white-space: nowrap">Name</th>
                        <th style="padding:10px;white-space: nowrap">Email</th>
                        <th style="padding:10px;white-space: nowrap">Phone</th>
                        <th style="padding:10px;white-space: nowrap">Address</th>
                        <th style="padding:10px;white-space: nowrap">Patient History</th>
                        <th style="padding:10px;white-space: nowrap">Delete User</th>
                        
                 
                    </tr>
            
                    @foreach($data as $user)

                    <tr align="center" style="background-color:skyblue;">

                        <td style="padding:10px; white-space: nowrap">{{$user->name}}</td>
                        <td style="padding:10px; white-space: nowrap">{{$user->email}}</td>
                        <td style="padding:10px; white-space: nowrap">{{$user->phone}}</td>
                        <td style="padding:10px; white-space: nowrap">{{$user->address}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{url('showPatientHistory', $user->id)}}">View History</a>
                        </td>
                        <td>
                            <a onclick="return confirm('Are you sure to delete this?')"class="btn btn-danger" href="{{url('deleteUser', $user->id)}}">Delete</a>
                        </td>
                        
                      

                    @endforeach

                </table>
            @endif
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')  
  </body>
</html>