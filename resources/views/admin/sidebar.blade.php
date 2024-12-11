<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="dashboard"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiLNBi4k9xgxBTY6njlI--KIYrZ40b2DiSBZhYASVWTEYqPhSjPrjhh840dIeSbcINLfE&usqp=CAU" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="https://png.pngtree.com/png-vector/20191110/ourmid/pngtree-avatar-icon-profile-icon-member-login-vector-isolated-png-image_1978396.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">ADMINISTRATOR</h5>
                  
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          
              <span class="menu-title"></span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>


            <li class="nav-item menu-items {{ Request::is('dashboard') ? 'active' : '' }}">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{url('dashboard')}}">
           <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">Dashboard </span>
          </a>
        </li>

          </li>
          <li class="nav-item menu-items {{ Request::is('all_users') ? 'active' : '' }}">
          <a class="nav-link {{ Request::is('all_users') ? 'active' : '' }}" href="{{url('all_users')}}">
           <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">All Users </span>
          </a>
        </li>
        
          <li class="nav-item menu-items {{ Request::is('add_doctor_view') ? 'active' : '' }}">
          <a class="nav-link {{ Request::is('add_doctor_view') ? 'active' : '' }}" href="{{ url('add_doctor_view') }}">
           <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">Add Doctors</span>
          </a>
        </li>

        <li class="nav-item menu-items {{ Request::is('showdoctor') ? 'active' : '' }}">
          <a class="nav-link {{ Request::is('showdoctor') ? 'active' : '' }}" href="{{url('showdoctor')}}">
           <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">All Doctors </span>
          </a>
        </li>


        <li class="nav-item menu-items {{ Request::is('showappointment') ? 'active' : '' }}">
          <a class="nav-link {{ Request::is('showappointment') ? 'active' : '' }}" href="{{url('showappointment')}}">
           <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">Manage Appointments </span>
          </a>
        </li>

       
        <li class="nav-item menu-items {{ Request::is('showinvoice') ? 'active' : '' }}">
          <a class="nav-link {{ Request::is('showinvoice') ? 'active' : '' }}" href="{{url('showinvoice')}}">
           <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">Reports and Billing </span>
          </a>
        </li>

        </ul>
      </nav>