<body>
  <nav id="navbar_top" class="w-100 navbar navbar-expand-lg " style="z-index:10000;background:white;box-shadow:1px 1px 2px #aaa;">
    <div class="container-fluid sjcet-nav">
      <a class="navbar-brand" href="http://sjcettnj.edu.in">
        Donar Application
      </a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span> </span>
        <span> </span>
        <span> </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/index.php'){ echo 'active'; } ?>" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#">
              About
              <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" fill="gray"></path> </svg>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/about/">About SJCET</a></li>
              <li><a class="dropdown-item" href="/about/dft_group.php">DFT Group</a></li>
              <li><a class="dropdown-item" href="/about/vision_mission.php">Vision & Mission</a></li>
              <li><a class="dropdown-item" href="/about/chairman.php">Chairman</a></li>
              <li><a class="dropdown-item" href="/about/principal.php">Principal</a></li>
              <li><a class="dropdown-item" href="/about/governing_council.php">Governing Council</a></li>
              <li><a class="dropdown-item" href="/static/md.pdf" target="_blank">Mandatory Disclosure</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#">
              Admission
              <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" fill="gray"></path> </svg>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/admission/">Approved & Affiliation</a></li>
              <li><a class="dropdown-item" href="/admission/courses.php">Courses Offered</a></li>
              <li><a class="dropdown-item" href="/admission/eligibility.php">Eligibility Criteria</a></li>
              <li><a class="dropdown-item" href="#">Apply Online</a></li>
              <li><a class="dropdown-item" href="/admission/contact.php">Contact</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link " aria-current="page" href="#">
              Departments
              <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" fill="gray"></path> </svg>
            </a>
            <ul class="dropdown-menu">
              <!-- <li><a class="dropdown-item" target="_blank" href="#">AI & DS</a></li> -->
              <li><a class="dropdown-item" target="_blank" href="//cse.sjcettnj.edu.in">CSE</a></li>
              <li><a class="dropdown-item" target="_blank" href="//eee.sjcettnj.edu.in">EEE</a></li>
              <li><a class="dropdown-item" target="_blank" href="//ece.sjcettnj.edu.in">ECE</a></li>
              <li><a class="dropdown-item" target="_blank" href="//mech.sjcettnj.edu.in">Mech</a></li>
              <li><a class="dropdown-item" target="_blank" href="//sh.sjcettnj.edu.in">S&H</a></li>
              <li><a class="dropdown-item" target="_blank" href="//mba.sjcettnj.edu.in">MBA</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link " aria-current="page" href="#">
              Placements
              <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" fill="gray"></path> </svg>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/placement/">Training Procedure</a></li>
              <li><a class="dropdown-item" href="/placement/recruiters.php">Our Recruiters</a></li>
              <li><a class="dropdown-item" href="/placement/records.php">Placement Records</a></li>
              <li><a class="dropdown-item" href="/placement/contact.php">Contact</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link " aria-current="page" href="#">
              Facilities
              <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" fill="gray"></path> </svg>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/facilities/">Library</a></li>
              <li><a class="dropdown-item" href="/facilities/sports.php">Sports</a></li>
              <li><a class="dropdown-item" href="/facilities/transport.php">Transport</a></li>
              <li><a class="dropdown-item" href="/facilities/hostel.php">Hostel</a></li>
              <li><a class="dropdown-item" href="/facilities/cafeteria.php">Cafeteria</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link " aria-current="page" href="#">
              Co-curricular
              <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" fill="gray"></path> </svg>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/co_curricular/">EDC</a></li>
              <li><a class="dropdown-item" href="/co_curricular/iic.php">IIC</a></li>
              <li><a class="dropdown-item" href="/co_curricular/rotaract_club.php">Rotaract Club</a></li>
              <li><a class="dropdown-item" href="/co_curricular/rrc.php">Red Ribbon Club</a></li>
              <li><a class="dropdown-item" href="/co_curricular/nss.php">National Service Scheme</a></li>
              <li><a class="dropdown-item" href="/co_curricular/yrc.php">Youth Red Cross</a></li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">IQAC</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/gallery.php'){ echo 'active'; } ?>" aria-current="page" href="/gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/events&news.php'){ echo 'active'; } ?>" aria-current="page" href="/events&news.php">News & Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($_SERVER['PHP_SELF'] == '/contact.php'){ echo 'active'; } ?>" aria-current="page" href="/contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>