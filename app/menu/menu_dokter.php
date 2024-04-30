<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dokter.php?page=dashboard" class="nav-link <?php echo ($_GET['page'] == 'dashboard') ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="dokter.php?page=data-jadwal-periksa" class="nav-link <?php echo ($_GET['page'] == 'data-jadwal-periksa') ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Jadwal Periksa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="dokter.php?page=data-periksa-pasien" class="nav-link <?php echo ($_GET['page'] == 'data-periksa-pasien') ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-stethoscope"></i>
              <p>
                Memeriksa Pasien
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="dokter.php?page=data-riwayat-pasien" class="nav-link <?php echo ($_GET['page'] == 'data-riwayat-pasien') ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-notes-medical"></i>
              <p>
                Riwayat Pasien
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="dokter.php?page=data-profil" class="nav-link <?php echo ($_GET['page'] == 'data-profil') ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
        </ul>
    </nav>