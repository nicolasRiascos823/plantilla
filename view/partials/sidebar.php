<!-- Sidebar -->
<div class="sidebar" data-background-color="white">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="white">
        <a href="index.php" class="logo">
            <img
            src="img/R-FAST.png"
            alt="navbar brand"
            class="navbar-brand"
            height="55"
            />
        </a>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
            </button>
            <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
            </button>
        </div>
        <button class="topbar-toggler more">
            <i class="gg-more-vertical-alt"></i>
        </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
        <ul class="nav nav-secondary">
            <li class="nav-section">
            <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Modulos</h4>
            </li>
            <li class="nav-item">
            <a href="index.php">
                <i class="fas fa-layer-group"></i>
                <p>Inicio</p>
                <span class="caret"></span>
            </a>
            </li>
            <li class="nav-item">
                <a href="<?=getUrl("Paciente","Paciente","getPerfil");?>">
                    <i class="fas fa-th-list"></i>
                    <p>Perfil del Paciente</p>
                    <span class="caret"></span>
                </a>
            </li>
        </ul>
        </div>
    </div>
    </div>
    <!-- End Sidebar -->