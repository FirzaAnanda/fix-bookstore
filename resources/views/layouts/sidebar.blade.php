<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  <li class="nav-header">EXAMPLES</li>
  <!-- Pages -->
  {{-- <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-book"></i>
      <p>
        Pages
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="../examples/invoice.html" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Invoice</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="../examples/profile.html" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Profile</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="../examples/e-commerce.html" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>E-commerce</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="../examples/projects.html" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Projects</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="../examples/project-add.html" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Project Add</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="../examples/project-edit.html" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Project Edit</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="../examples/project-detail.html" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Project Detail</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="../examples/contacts.html" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Contacts</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="../examples/faq.html" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>FAQ</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="../examples/contact-us.html" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Contact us</p>
        </a>
      </li>
    </ul>
  </li> --}}
  <li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link{{ request()->routeIs('dashboard') ? ' active' : '' }}">
      <i class="far fa-circle nav-icon"></i>
      <p>Dashboard</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link{{ request()->routeIs('users.*') ? ' active' : '' }}">
      <i class="far fa-circle nav-icon"></i>
      <p>Users</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="{{ route('books.index') }}" class="nav-link{{ request()->routeIs('books.*') ? ' active' : '' }}">
      <i class="far fa-circle nav-icon"></i>
      <p>Books</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
      <p>Transactions</p>
    </a>
  </li>
  <li class="nav-header">Logout</li>
  <li class="nav-item">
    <form action="{{ route('logout') }}" method="POST" id="logout">
    @csrf
    <a href="#" onclick="document.getElementById('logout').submit();" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
      <p>Logout</p>
    </a>
    </form>
  </li>
</ul>
