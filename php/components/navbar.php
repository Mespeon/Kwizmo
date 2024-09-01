<div id="navbar-container" class="container-fluid px-3 py-2 py-md-4 bg-light">
    <nav id="navbar-inner-container">
        <div class="d-flex flex-row flex-wrap align-items-center justify-content-between p-2">
            <div class="d-grid gap-2">
                <div class="align-self-center d-flex d-md-none">
                    <button type="button" class="btn btn-outline-secondary border-0" data-bs-toggle="collapse" data-bs-target="#menu-drawer" aria-controls="menu-drawer" aria-expanded="false" aria-label="Open menu drawer">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="d-block d-md-none font-nerko-regular display-6 ms-3">
                        <a class="nav-link" href="<?php echo ($urls['home']); ?>"><?php echo (APP_NAME); ?></a>
                    </div>
                </div>
                <div class="d-none d-md-block font-nerko-regular display-4">
                    <a class="nav-link" href="<?php echo ($urls['home']); ?>"><?php echo (APP_NAME); ?></a>
                </div>
            </div>
            <?php
            // Expanded menu
            // include('navbar_menu.php');
            // Expanded button group
            include('navbar_expanded_button_group.php');
            // Collapsed menu
            include('navbar_menu_drawer.php');
            ?>
        </div>
    </nav>
</div>