<div class="main-header">
    <div class="main-header-logo">

    <div class="logo-header" data-background-color="white">
        <a href="index.php" class="logo">
        <img
            src="img/R-FAST.png"
            alt="navbar brand"
            class="navbar-brand"
            height="20"
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
    </div>

    <nav
    class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
    >
    <div class="container-fluid">
        

        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
        

        <li class="nav-item topbar-user dropdown hidden-caret">
            <a
            class="dropdown-toggle profile-pic"
            data-bs-toggle="dropdown"
            href="#"
            aria-expanded="false"
            >
            <?php
                if($_SESSION['id_sexobiologico']==1){
                    $imagen = "img/hombre.png";
                }else{
                    $imagen = "img/mujer.png";
                }
            ?>
            <div class="avatar-sm">
                <img
                src="<?=$imagen?>"
                alt="..."
                class="avatar-img rounded-circle"
                />
            </div>
            <span class="profile-username">
                <span class="op-7">Hola,</span>
                <span class="fw-bold"><?=$_SESSION['nombre1']?></span>
            </span>
            </a>
            <ul class="dropdown-menu dropdown-user animated fadeIn">
            <div class="dropdown-user-scroll scrollbar-outer">
                <li>
                <div class="user-box">
                    <div class="avatar-lg">
                    <img
                        src="<?=$imagen?>"
                        alt="image profile"
                        class="avatar-img rounded"
                    />
                    </div>
                    <div class="u-text">
                    <h4><?=$_SESSION['nombre1']." ".$_SESSION['nombre2']." ".$_SESSION['apellido1']." ".$_SESSION['apellido2']?></h4>
                    <p class="text-muted"><?=$_SESSION['email']?></p>
                    <a
                        href="<?=getUrl("Paciente","Paciente","getPerfil")?>"
                        class="btn btn-xs btn-secondary btn-sm"
                        >Ver Perfil</a
                    >
                    </div>
                </div>
                </li>
                <li>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?=getUrl("Paciente","Paciente","getPerfil")?>">Mi Perfil</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?=getUrl("Acceso","Acceso","logout",false,"ajax")?>">Cerrar sesion</a>
                
                </li>
            </div>
            </ul>
        </li>
        </ul>
    </div>
    </nav>
    
</div>