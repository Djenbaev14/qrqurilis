
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

              <!-- Brand Logo Light -->
              <a href="index.html" class="logo logo-light">
                  <span class="logo-lg">
                      <img src="{{asset('files/logo.png')}}" alt="logo">
                  </span>
                  <span class="logo-sm">
                      <img src="{{asset('assets/images/logo-sm.png')}}" alt="small logo">
                  </span>
              </a>

              <!-- Brand Logo Dark -->
              <a href="index.html" class="logo logo-dark">
                  <span class="logo-lg">
                      <img src="{{asset('assets/images/logo-dark.png')}}" alt="dark logo">
                  </span>
                  <span class="logo-sm">
                      <img src="{{asset('assets/images/logo-dark-sm.png')}}" alt="small logo">
                  </span>
              </a>

              <!-- Sidebar Hover Menu Toggle Button -->
              <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                  <i class="ri-checkbox-blank-circle-line align-middle"></i>
              </div>

              <!-- Full Sidebar Menu Close Button -->
              <div class="button-close-fullsidebar">
                  <i class="ri-close-fill align-middle"></i>
              </div>

              <!-- Sidebar -left -->
              <div class="h-100" id="leftside-menu-container" data-simplebar>
                  <!-- Leftbar User -->
                  <div class="leftbar-user">
                      <a href="pages-profile.html">
                          <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                          <span class="leftbar-user-name mt-2">Dominic Keller</span>
                      </a>
                  </div>

                  <!--- Sidemenu -->
                  <ul class="side-nav">



                        <li class="side-nav-item">
                            <a href="apps-calendar.html" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Главный </span>
                            </a>
                        </li>


                        <li class="side-nav-item">
                          <a data-bs-toggle="collapse" href="#pages" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                              <i class="ri-pages-fill"></i>
                              <span> Страницы </span>
                              <span class="menu-arrow"></span>
                          </a>
                          <div class="collapse" id="pages">
                            <ul class="side-nav-second-level">
                              <li class="side-nav-item">
                                  <a href="{{route('dashboard.pages.index')}}" class="side-nav-link">
                                      <span> Все  страницы</span>
                                  </a>
                              </li>
                              <li class="side-nav-item">
                                  <a href="{{route('dashboard.pages.create')}}" class="side-nav-link">
                                      <span> Добавит  страницу</span>
                                  </a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        
                        <li class="side-nav-item">
                            <a href="{{route('dashboard.menu.index')}}" class="side-nav-link">
                                <i class="ri-menu-line"></i>
                                <span> Меню </span>
                            </a>
                        </li>
                        
                        <li class="side-nav-item">
                          <a data-bs-toggle="collapse" href="#posts" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                              <i class="ri-mail-add-fill"></i>
                              <span> Пост </span>
                              <span class="menu-arrow"></span>
                          </a>
                          <div class="collapse" id="posts">
                            <ul class="side-nav-second-level">
                              <li class="side-nav-item">
                                  <a href="{{route('dashboard.post.index')}}" class="side-nav-link">
                                      <span> Все  пост</span>
                                  </a>
                              </li>
                              <li class="side-nav-item">
                                  <a href="{{route('dashboard.post.create')}}" class="side-nav-link">
                                      <span> Добавит  пост</span>
                                  </a>
                              </li>
                              
                            </ul>
                          </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="{{route('dashboard.appeal.index')}}" class="side-nav-link">
                                <i class="ri-file-paper-2-fill"></i>
                                <span> Мүрәжатлар </span>
                            </a>
                        </li>


                  </ul>
                  <!--- End Sidemenu -->

                  <div class="clearfix"></div>
              </div>
          </div>