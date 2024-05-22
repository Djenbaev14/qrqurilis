
            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
              <div class="topbar container-fluid">
                  <div class="d-flex align-items-center gap-lg-2 gap-1">

                      <!-- Topbar Brand Logo -->
                      <div class="logo-topbar">
                          <!-- Logo light -->
                          <a href="index.html" class="logo-light">
                              <span class="logo-lg">
                                  <img src="{{asset('assets/images/logo.png')}}" alt="logo">
                              </span>
                              <span class="logo-sm">
                                  <img src="{{asset('assets/images/logo-sm.png')}}" alt="small logo">
                              </span>
                          </a>

                          <!-- Logo Dark -->
                          <a href="index.html" class="logo-dark">
                              <span class="logo-lg">
                                  <img src="{{asset('assets/images/logo-dark.png')}}" alt="dark logo">
                              </span>
                              <span class="logo-sm">
                                  <img src="{{asset('assets/images/logo-dark-sm.png')}}" alt="small logo">
                              </span>
                          </a>
                      </div>

                      <!-- Sidebar Menu Toggle Button -->
                      <button class="button-toggle-menu">
                          <i class="mdi mdi-menu"></i>
                      </button>


                  </div>

                  <ul class="topbar-menu d-flex align-items-center gap-3">

                      <li class="d-none d-sm-inline-block">
                          <div class="nav-link" id="light-dark-mode" data-bs-toggle="tooltip" data-bs-placement="left" title="Theme Mode">
                              <i class="ri-moon-line font-22"></i>
                          </div>
                      </li>


                      <li class="d-none d-md-inline-block">
                          <a class="nav-link" href="#" data-toggle="fullscreen">
                              <i class="ri-fullscreen-line font-22"></i>
                          </a>
                      </li>

                      <li class="dropdown">
                          <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                              <span class="account-user-avatar">
                                {{auth()->user()->login}} <i class="ri-arrow-down-s-fill"></i>
                              </span>
                              <span class="d-lg-flex flex-column gap-1 d-none">
                              </span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                              <!-- item-->
                              <div class=" dropdown-header noti-title">
                                  <h6 class="text-overflow m-0">Welcome !</h6>
                              </div>

                              <!-- item-->
                              <a href="{{route('logout')}}" class="dropdown-item">
                                  <i class="ri-logout-box-line"></i>
                                  <span>Logout</span>
                              </a>

                              <!-- item-->
                              {{-- <a href="{{route('logout')}}" class="dropdown-item">
                                  <i class="mdi mdi-logout me-1"></i>
                                  <span>Logout</span>
                              </a> --}}
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
          <!-- ========== Topbar End ========== -->
