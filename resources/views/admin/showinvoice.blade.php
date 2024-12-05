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

        <!-- Filter for approved appointments -->
        @php
          $approvedAppointments = $data->filter(function($appointment) {
              return $appointment->status === 'Approved';
          });
        @endphp

        @if($approvedAppointments->isEmpty())
          <p style="font-size:20px; color:white; padding:150px;">No approved appointments as of now.</p>
        @else
          <table>
            <tr align="center" style="background-color:black;">
              <th style="padding:10px;">Patient's Name</th>
              <th style="padding:10px;">Email</th>
              <th style="padding:10px;">Phone</th>
              <th style="padding:10px;">Doctor Name</th>
              <th style="padding:10px;white-space: nowrap">Date</th>
              <th style="padding:10px;">Message</th>
              <th style="padding:10px;">Reports</th>
              <th style="padding:10px;">Billing</th>
            </tr>

           
            @foreach($approvedAppointments as $appoint)
              <tr align="center" style="background-color:skyblue;">
                <td style="padding:10px; white-space: nowrap">{{$appoint->name}}</td>
                <td style="padding:10px; white-space: nowrap">{{$appoint->email}}</td>
                <td style="padding:10px; white-space: nowrap">{{$appoint->contact_number}}</td>
                <td style="padding:10px; white-space: nowrap">{{$appoint->doctor}}</td>
                <td style="padding:10px; white-space: nowrap">{{$appoint->date}}</td>
                <td style="padding:10px;">{{$appoint->message}}</td>
                <td>
                  <a class="btn btn-success" style="padding:5px; margin-bottom:5px; margin-right:5px;" href="{{url('report', $appoint->id)}}">Generate Report</a>
                </td>
                <td>
                  <a class="btn btn-primary" style="padding:5px; margin-bottom:5px; margin-right:5px;" href="{{url('billing', $appoint->id)}}">Generate Bill</a>
                </td>
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
