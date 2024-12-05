

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
            <div style="padding-top:100px; margin-right:25px;">

            @if($data->isEmpty())
            <p style="font-size:20px; color:white; padding:150px;">No appointments as of now.</p>
            @else
                <table>
                    <tr align="center" style="background-color:black;">
                        <th style="padding:10px;">Patient's Name</th>
                        <th style="padding:10px;">Email</th>
                        <th style="padding:10px;">Phone</th>
                        <th style="padding:10px;">Doctor Name</th>
                        <th style="padding:10px;white-space: nowrap">Date</th>
                        <th style="padding:10px;">Message</th>
                        <th style="padding:10px;white-space: nowrap">Status</th>
                        <th style="padding:10px;white-space: nowrap">Approved</th>
                        <th style="padding:10px;white-space: nowrap">Cancelled</th>
                        <!-- <th style="padding:10px;">Send Email</th> -->
                    </tr>
            
                    @foreach($data as $appoint)

                    <tr align="center" style="background-color:skyblue;">

                        <td style="padding:10px; white-space: nowrap">{{$appoint->name}}</td>
                        <td style="padding:10px; white-space: nowrap">{{$appoint->email}}</td>
                        <td style="padding:10px; white-space: nowrap">{{$appoint->contact_number}}</td>
                        <td style="padding:10px; white-space: nowrap">{{$appoint->doctor}}</td>
                        <td style="padding:10px; white-space: nowrap">{{$appoint->date}}</td>
                        <td style="padding:10px; ">{{$appoint->message}}</td>
                        <td style="padding:10px; ">{{$appoint->status}}</td>
                        <td>
                            <a class="btn btn-success" href="{{url('approved', $appoint->id)}}">Approved</a
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('cancelled', $appoint->id)}}">Cancelled</a>
                        </td>
                        <!-- <td>
                            <a class="btn btn-primary" href="{{url('emailview', $appoint->id)}}">Mail</a>
                        </td> -->
                    </tr>

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