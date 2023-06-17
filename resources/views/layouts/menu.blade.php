<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="{{url('layout/home')}}" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{url('admin/getAll')}}" class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <p>
            See Books
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{url("admin/create")}}" class="nav-link">
          <i class="nav-icon fas fa-plus"></i>
          <p>
            Add Books
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
      </li>
    </ul>
</nav>
