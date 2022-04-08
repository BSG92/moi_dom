<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <span class="bi bi-house-fill navbar-brand"
        translate="no"
        style="font-style: bold; font-family: 'Varela Round', sans-serif; color: #ffc107;"><?php echo SITENAME; ?></span>
        <button
        class="navbar-toggler" type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navmenu"> <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#home" class="nav-link lng-main" >Главный</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link lng-about_us" target="_self" rel="noreferrer">О нас</a>
                </li>
                <li class="nav-item">
                    <a href="#services" class="nav-link lng-services" target="_self" rel="noreferrer">Услуги</a>
                </li>
                <li class="nav-item">
                    <a href="#projects" class="nav-link lng-projects" target="_self" rel="noreferrer">Проекты</a>
                </li>
                <li class="nav-item">
                    <a href="#contacts" class="nav-link lng-contacts" target="_self" rel="noreferrer">Контакты</a>
                </li>
            </ul>
            <div class="dropdown">
                <a class="btn dropdown-toggle txt-medium-white" href="#" role="button" id="langSelect" data-bs-toggle="dropdown" aria-expanded="false">
                    EN | Ру
                </a>
                <ul id="lang-select" class="dropdown-menu dropdown-menu-dark" aria-labelledby="langSelect">
                    <li><img src="assets/images/ru.svg" style="height: 30px; width:30px;"><div class="dropdown-item txt-medium-white" id="ru" style="cursor: pointer;">Русский</div></li>
                    <li><img src="assets/images/en.svg" style="height: 30px; width:30px;"><div class="dropdown-item txt-medium-white" id="en" style="cursor: pointer;">English</div></li>
                </ul>
            </div>
        </div>
    </div>            
</nav>