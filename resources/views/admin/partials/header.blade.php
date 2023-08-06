<!-- Header -->
<header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg" style="padding-right: 1rem;">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block"></div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <i class="mdi mdi-account" style="font-size: 30px; position: relative; top: 6px;"></i>
                      <span class="d-none d-lg-inline-block">{{ Auth::user()->first_name }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header" style="border-bottom: none;">
                        <i class="mdi mdi-account" style="font-size: 30px; position: relative; top: 0px; margin-right: 5px;"></i>
                        <div class="d-inline-block">
                          {{ Auth::user()->first_name }} <small class="pt-1">{{ Auth::user()->email }}</small>
                        </div>
                      </li>

                      <li class="dropdown-footer">
                        <a href="index.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>