<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand"
             href="#"><span class="brand-logo">
                    <h2 class="brand-text"><?php echo e(env('APP_NAME')); ?></h2>
                </a></li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
     <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <!--  Start SideBar     -->
            <li class=" nav-item <?php echo e(Route::is('company.*') ? 'active' : ''); ?> ">
                <a class="d-flex align-items-center "
                   href="<?php echo e(route('company.index')); ?>">
                    <i data-feather="box"></i><span class="menu-title text-truncate"
                    data-i18n="Form Layout">Company</span></a>
            </li>
              <li class=" nav-item <?php echo e(Route::is('employee.*') ? 'active' : ''); ?> ">
                            <a class="d-flex align-items-center "
                               href="<?php echo e(route('employee.index')); ?>">
                                <i data-feather="box"></i><span class="menu-title text-truncate"
                                data-i18n="Form Layout">Empolyee</span></a>
                        </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->
<?php /**PATH /media/kero/CS/Projects/Interviews Project/Task/resources/views/layouts/includes/sidebar.blade.php ENDPATH**/ ?>