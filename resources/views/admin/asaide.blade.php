<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
    
          </li>

          <li class="nav-item menu-open">
            <a href="{{ route('admin.mahsulotlar.index') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                mahsulotlar
              </p>
            </a>
    
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('admin.user.index') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                user
              </p>
            </a>
    
          </li>
                    <li class="nav-item menu-open">
            <a href="{{ route('admin.phone.index') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                phone
              </p>
            </a>
    
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('admin.user.index') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                user
              </p>
            </a>
    
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('admin.tell.index') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               telefon
              </p>
            </a>
    
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('admin.new.index') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                malumot 
              </p>
            </a>
    
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('admin.post.index') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                post 
              </p>
            </a>
    
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('admin.category.index') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                category
              </p>
            </a>
    
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('admin.pst.index') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                post-2
              </p>
            </a>
    
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('admin.ctg.index') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                category-2
              </p>
            </a>
    
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>