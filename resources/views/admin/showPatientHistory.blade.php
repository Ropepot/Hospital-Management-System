

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
        <div class="container-fluid page-body-wrapper">
            <div style="padding:100px; margin-left:55px;">

            @if($appoint->isEmpty())
            <p style="font-size:20px; color:white; padding:100px; margin-left:50px;" align="center">No appointments as of now.</p>
                    
            
                        
            @else
                <table>
                <tr align="center" style="background-color:black;">
                        <th style="padding:10px;white-space: nowrap">Doctor</th>
                        <th style="padding:10px;white-space: nowrap">Date</th>
                        <th style="padding:10px;white-space: nowrap">Message</th>
                        <th style="padding:10px;white-space: nowrap">Status</th>
                        <th style="padding:10px;white-space: nowrap">Remarks</th>
                        <th style="padding:10px;white-space: nowrap">Billing</th>
                        
                 
                    </tr>
            
                    @foreach($appoint as $appoints)

                    <tr align="center" style="background-color:skyblue;">

                        <td style="padding:10px; white-space: nowrap">{{$appoints->doctor}}</td>
                        <td style="padding:10px; white-space: nowrap">{{$appoints->date}}</td>
                        <td style="padding:10px; white-space: nowrap">{{$appoints->message}}</td>
                        <td style="padding:10px; white-space: nowrap">{{$appoints->status}}</td>
                        <td style="padding:10px; white-space: nowrap; color:red;">{{$appoints->Remarks}}</td>
                        <td style="padding:10px; white-space: nowrap; color:green;">{{$appoints->Billing}}</td>
                       
                       
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