<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="/assets/images/face.jpg" alt="profile">
            <span class="login-status online"></span>
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2"><?php echo($_SESSION["membername"]) ?></span>
            <span class="text-secondary text-small">Member</span>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/member/home.php">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/member/new.php">
          <span class="menu-title">New Requests</span>
          <i class="mdi mdi-new-box menu-icon"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/member/old.php">
          <span class="menu-title">Old Requests</span>
          <i class="mdi mdi-note menu-icon"></i>
        </a>
      </li>
      
    </ul>
  </nav>