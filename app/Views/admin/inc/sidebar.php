<!-- start sidebar -->

<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="index.html">
            <div class="logo-img">
                <img src="<?php assetsAdmin('src/img/brand-white.svg') ?>" class="header-brand-img" alt="lavalite">
            </div>
            <small class="text"><?= SITE_TITLE; ?></small>
        </a>
        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">

                <!-- start section nav -->
                <div class="nav-lavel">Section Books</div>
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Menu Books</span></a>
                    <div class="submenu-content">
                        <a href="<?php url('dashboard/books'); ?>" class="menu-item">All Books</a>
                        <a href="<?php url('dashboard/books/create'); ?>" class="menu-item">Create New Book</a>
                    </div>
                </div>
                <!-- end section nav -->

                <!-- start section nav -->
                <div class="nav-lavel">Section Categories</div>
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Menu Categories</span></a>
                    <div class="submenu-content">
                        <a href="<?php url('dashboard/categories'); ?>" class="menu-item">All Categories</a>
                        <a href="<?php url('dashboard/category/create'); ?>" class="menu-item">Create New Category</a>
                    </div>
                </div>
                <!-- end section nav -->

                <!-- start section nav -->
                <div class="nav-lavel">Section Authors</div>
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Menu Authors</span></a>
                    <div class="submenu-content">
                        <a href="<?php  url('dashboard/authors') ?>" class="menu-item">All Authors</a>
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)" class="menu-item">Menu Level 2.2</a>
                            <div class="submenu-content">
                                <a href="javascript:void(0)" class="menu-item">Menu Level 3.1</a>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.3</a>
                    </div>
                </div>
                <!-- end section nav -->

                <!-- start section nav -->
                <div class="nav-lavel">Section Users</div>
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Menu Users</span></a>
                    <div class="submenu-content">
                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.1</a>
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)" class="menu-item">Menu Level 2.2</a>
                            <div class="submenu-content">
                                <a href="javascript:void(0)" class="menu-item">Menu Level 3.1</a>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.3</a>
                    </div>
                </div>
                <!-- end section nav -->

                <!-- start section nav -->
                <div class="nav-lavel">Section Admins</div>
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Menu Admins</span></a>
                    <div class="submenu-content">
                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.1</a>
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)" class="menu-item">Menu Level 2.2</a>
                            <div class="submenu-content">
                                <a href="javascript:void(0)" class="menu-item">Menu Level 3.1</a>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.3</a>
                    </div>
                </div>
                <!-- end section nav -->

                <!-- start section nav -->
                <div class="nav-lavel">Section Orders</div>
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Menu Orders</span></a>
                    <div class="submenu-content">
                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.1</a>
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)" class="menu-item">Menu Level 2.2</a>
                            <div class="submenu-content">
                                <a href="javascript:void(0)" class="menu-item">Menu Level 3.1</a>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.3</a>
                    </div>
                </div>
                <!-- end section nav -->

                <!-- start section nav -->
                <div class="nav-lavel">Section Settings</div>
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Menu Settings</span></a>
                    <div class="submenu-content">
                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.1</a>
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)" class="menu-item">Menu Level 2.2</a>
                            <div class="submenu-content">
                                <a href="javascript:void(0)" class="menu-item">Menu Level 3.1</a>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.3</a>
                    </div>
                </div>
                <!-- end section nav -->

                <!-- start section nav -->
                <div class="nav-lavel">Section Messages</div>
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Menu Messages</span></a>
                    <div class="submenu-content">
                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.1</a>
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)" class="menu-item">Menu Level 2.2</a>
                            <div class="submenu-content">
                                <a href="javascript:void(0)" class="menu-item">Menu Level 3.1</a>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.3</a>
                    </div>
                </div>
                <!-- end section nav -->

            </nav>
        </div>
    </div>
</div>

<!-- end sidebar -->