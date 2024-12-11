
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> NRG-INFINITECH HOSPITAL MANAGEMENT SYSTEM</title>

    <meta name="copyright" content="MACode ID, https://macodeid.com/">


    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
  </head>
  <body>


    <div class="back-to-top"></div>

    <header>
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 text-sm">
              <div class="site-info">
                <a href="#"><span class="mai-call text-primary"></span> 09052253911</a>
                <span class="divider">|</span>
                <a href="#"><span class="mai-mail text-primary"></span> nrg-infinitech@gmail.com</a>
              </div>
            </div>
            <div class="col-sm-4 text-right text-sm">
              <div class="social-mini-button">
                <a href="#"><span class="mai-logo-facebook-f"></span></a>
                <a href="#"><span class="mai-logo-twitter"></span></a>
                <a href="#"><span class="mai-logo-dribbble"></span></a>
                <a href="#"><span class="mai-logo-instagram"></span></a>
              </div>
            </div>
          </div> 
        </div> 
      </div> 

      <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-primary">NRG-INFINITECH</span>  Hospital Management System</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupport">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="white-space: nowrap" href="#" id="myAppointmentsDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Menu
                </a>
                <ul class="dropdown-menu" aria-labelledby="myAppointmentsDropdown">
                <li><a class="dropdown-item {{ Request::is('/') ? 'active' : '' }}"  href="{{ url('/home/#home') }}">Home</a></li>
                  <li><a class="dropdown-item {{ Request::is('/') ? 'active' : '' }}"  href="{{ url('/home/#about-us') }}">About Us</a></li>
                  <li><a class="dropdown-item {{ Request::is('/') ? 'active' : '' }}"  href="{{ url('/home/#doctors') }}">Doctors</a></li>
                  <li><a class="dropdown-item {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/home/#news') }}">News</a></li>
                    
                </ul>
            
                <li class="nav-item">
                <a class="nav-link{{ Request::is('/') ? 'active' : '' }}" href="{{ url('/home/#appointments') }}">Make Appointment</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" style="margin-right:5px; background-color:green; color: white"href="{{url('myappointment')}}">My Appointments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="margin-left:5px; background-color:green; color: white" href="{{url('my_invoice')}}">My Reports and Billing</a>
              </li>
              <x-app-layout>
              </x-app-layout>
                                                          
                          
            </ul>
          </div>
        </div> 
      </nav>
    </header>

    <div align="center" style="padding:70px">
      <table>
          <tr align="center" style="background-color:black;">
              <th style="padding:10px; font-size: 20px; color:white;">Doctor Name</th>
              <th style="padding:10px; font-size: 20px; color:white;">Date</th>
              <th style="padding:10px; font-size: 20px; color:white;">Message</th>
              <th style="padding:10px; font-size: 20px; color:white;">Status</th>
              <th style="padding:10px; font-size: 20px; color:white;">Cancel Appointment</th>
          </tr>

          @if($appoint->isEmpty())
          <tr style="background-color:black;" align="center">
              <td colspan="5" style="padding:20px; color:white;">No appointments as of now</td>
          </tr>
          @else
          @foreach($appoint as $appoints)
          <tr style="background-color:black;" align="center">
              <td style="padding:10px; color:white;">{{$appoints->doctor}}</td>
              <td style="padding:10px; color:white;">{{$appoints->date}}</td>
              <td style="padding:10px; color:white;">{{$appoints->message}}</td>
              <td style="padding:10px; color:white;">{{$appoints->status}}</td>
              <td>
                  <a class="btn btn-danger" style="margin-bottom:10px" onclick="return confirm('Are you sure you want to cancel this appointment?')"  href="{{url('cancel_appoint', $appoints->id)}}">Cancel</a>
              </td>
          </tr>
          @endforeach
          @endif
      </table>
  </div>

    <footer class="page-footer">
      <div class="container">
        <div class="row px-md-3">
          <div class="col-sm-6 col-lg-3 py-3">
            <h5>Company</h5>
            <ul class="footer-menu">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Editorial Team</a></li>
              <li><a href="#">Protection</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-lg-3 py-3">
            <h5>More</h5>
            <ul class="footer-menu">
              <li><a href="#">Terms & Condition</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Advertise</a></li>
              <li><a href="#">Join as Doctors</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-lg-3 py-3">
            <h5>Our partner</h5>
            <ul class="footer-menu">
              <li><a href="#">One-Fitness</a></li>
              <li><a href="#">One-Drugs</a></li>
              <li><a href="#">One-Live</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contacts</h5>
            <ul class="footer-menu">
              <li><a href="#">Rizal Street, Ligao City</a></li>
              <li><a href="#">09052253911</a></li>
              <li><a href="#">nrg-infinitech@gmail.com</a></li>
            </ul>

            <h5 class="mt-3">Social Media</h5>
            <div class="footer-sosmed mt-3">
              <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
              <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
              <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
              <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
              <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
            </div>
          </div>
        </div>

        <hr>

        <p id="copyright">Copyright &copy; 2024. All right reserved</p>
      </div>
    </footer>

  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>

  <script src="../assets/js/theme.js"></script>
    
  </body>
  </html>