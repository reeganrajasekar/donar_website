<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="/assets/images/face.jpg" alt="profile">
            <span class="login-status online"></span>
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2"><?php echo($_SESSION["staffname"]) ?></span>
            <span class="text-secondary text-small">Staff</span>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/staff/home.php">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/staff/vol.php">
          <span class="menu-title">Volunteer</span>
          <i class="mdi mdi-new-box menu-icon"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/staff/password.php">
          <span class="menu-title">Change Password</span>
          <i class="mdi mdi-lock menu-icon"></i>
        </a>
      </li>
      
    </ul>
  </nav>