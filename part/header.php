<header class="navbar sticky-top px-2 px-md-3 bt-theme shadow-sm">
  <a class="navbar-brand d-flex align-items-center fs-4 fw-bold fst-italic ms-2 me-auto" href="index.php">
    <span style="color: #6366f1;"><i class="ri-question-answer-fill me-1 fw-normal fs-3"></i></span>
    <span style="color: #818cf8">Crud</span>
    <span style="color: #a5b4fc">Client</span>
  </a>
  <div class="d-flex">
    <div class="dropdown mt-1 me-1 me-md-3">
      <button class="nav-link dropdown-toggle border-0 ps-2 fs-5 d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i id="iconActive" class="ri-contrast-line ps-2"></i>
        <span class="d-none d-md-block ms-md-2 fs-6">Theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end pop pt-1">
        <li><h6 class="dropdown-header">Change Theme</h6></li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="light" onclick="changeIcon('ri-sun-line')">
            <i class="ri-sun-line me-2"></i>Light Theme
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="dark" onclick="changeIcon('ri-moon-line')">
            <i class="ri-moon-line me-2"></i>Dark Theme
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" type="button" data-bs-theme-value="auto" onclick="changeIcon('ri-contrast-line')">
            <i class="ri-contrast-line me-2"></i>Device Theme
          </button>
        </li>
      </ul>
    </div>
    <button type="button" class="nav-link d-flex align-items-center me-md-2 mx-1" onclick="logout()">
      <i class="ri-logout-box-line pt-1 px-2 fs-5"></i>
      <span class="d-none d-md-block">Sign out</span>
    </button>
    <button class="nav-link d-md-none pt-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <i class="ri-menu-line px-2 fs-5"></i>
    </button>
  </div>
</header>

<div class="container-fluid pop">
  <div class="row">
    <div class="sidebar col-md-3 col-xl-2 p-0 bt-theme shadow-sm">
      <div class="offcanvas-md offcanvas-top border-0 h-100" style="min-height: calc(100vh - 60px)" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <br />
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 px-4">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-3 text-body-secondary">Menu</h6>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a id="dashboard" class="nav-link py-2 my-2 d-flex align-items-center gap-2" href="#" onclick="dashboard()">
                <i class="ri-function-fill fs-5"></i>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a id="manage" class="nav-link py-2 my-2 d-flex align-items-center gap-2" href="#" onclick="manage()">
                <i class="ri-sticky-note-add-fill fs-6"></i>
                Manage Data
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <main class="col-md-9 col-xl-10 ms-sm-auto px-md-5 px-4 py-md-4">
      <div class="row">