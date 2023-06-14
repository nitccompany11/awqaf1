<!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="<?php echo e(url('admin')); ?>">
                            <img src="<?php echo e(getImage('settings', getSetting()->site_logo)); ?>" class="header-brand-img desktop-logo" alt="logo">
                            <img src="<?php echo e(getImage('settings', getSetting()->site_logo)); ?>" class="header-brand-img toggle-logo"
                                alt="logo">
                            <img src="<?php echo e(getImage('settings', getSetting()->site_logo)); ?>" class="header-brand-img light-logo" alt="logo">
                            <img src="<?php echo e(getImage('settings', getSetting()->site_logo)); ?>" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="<?php echo e(url('admin')); ?>">
                                  <i class="side-menu__icon fe fe-home"></i>
                                  <span class="side-menu__label"><?php echo e(trans('admin.dashboard')); ?></span>
                                </a>
                            </li>

                            <li class="sub-category">
                                <h3><?php echo e(trans('admin.settings')); ?></h3>
                            </li>

                            <?php if(checkPermission(auth()->user()->id, 1) == true || checkPermission(auth()->user()->id, 2) == true || checkPermission(auth()->user()->id, 44) == true): ?>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-slack"></i><span
                                        class="side-menu__label"><?php echo e(trans('admin.settings')); ?></span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">

                                    <?php if(checkPermission(auth()->user()->id, 1) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/setting')); ?>" class="slide-item"><?php echo e(trans('admin.settings')); ?></a></li>
                                    <?php endif; ?>

                                    <?php if(checkPermission(auth()->user()->id, 2) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/setting/image')); ?>" class="slide-item"><?php echo e(trans('admin.settingsImage')); ?></a></li>
                                    <?php endif; ?>

                                </ul>
                            </li>
                            <?php endif; ?>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-users"></i><span
                                        class="side-menu__label"><?php echo e(trans('admin.myProfile')); ?></span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">

                                    <li><a href="<?php echo e(url('admin/user/myProfile')); ?>" class="slide-item"><?php echo e(trans('admin.myProfile')); ?></a></li>

                                </ul>
                            </li>

                            <li class="sub-category">
                                <h3><?php echo e(trans('admin.inputs')); ?></h3>
                            </li>

                            <?php if(checkPermission(auth()->user()->id, 3) == true): ?>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-users"></i><span
                                        class="side-menu__label"><?php echo e(trans('admin.user')); ?></span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">

                                    <li><a href="<?php echo e(url('admin/user/user')); ?>" class="slide-item"><?php echo e(trans('admin.user')); ?></a></li>

                                </ul>
                            </li>

                            <?php endif; ?>

                            <?php if(checkPermission(auth()->user()->id, 8) == true || checkPermission(auth()->user()->id, 10) == true): ?>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fa fa-folder-o"></i><span
                                        class="side-menu__label"><?php echo e(trans('admin.pages')); ?></span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">

                                    <?php if(checkPermission(auth()->user()->id, 10) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/page/add')); ?>" class="slide-item"> <?php echo e(trans('admin.addPage')); ?> </a></li>
                                    <?php endif; ?>

                                    <?php if(checkPermission(auth()->user()->id, 8) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/page')); ?>" class="slide-item"> <?php echo e(trans('admin.pages')); ?> </a></li>
                                    <?php endif; ?>

                                </ul>
                            </li>
                            <?php endif; ?>

                            <?php if(checkPermission(auth()->user()->id, 90) == true): ?>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fa fa-folder-o"></i><span
                                        class="side-menu__label"><?php echo e(trans('admin.layouts')); ?></span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">

                                    <?php if(checkPermission(auth()->user()->id, 90) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/layouts')); ?>" class="slide-item"> <?php echo e(trans('admin.layouts')); ?> </a></li>
                                    <?php endif; ?>

                                </ul>
                            </li>
                            <?php endif; ?>

                            <?php if(checkPermission(auth()->user()->id, 102) == true || checkPermission(auth()->user()->id, 103) == true): ?>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fa fa-newspaper-o"></i><span
                                        class="side-menu__label"><?php echo e(trans('admin.blogs')); ?></span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">

                                    <?php if(checkPermission(auth()->user()->id, 103) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/blogs/add')); ?>" class="slide-item"> <?php echo e(trans('admin.addBlog')); ?> </a></li>
                                    <?php endif; ?>

                                    <?php if(checkPermission(auth()->user()->id, 102) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/blogs')); ?>" class="slide-item"> <?php echo e(trans('admin.blogs')); ?> </a></li>
                                    <?php endif; ?>

                                </ul>
                            </li>
                            <?php endif; ?>

                            <?php if(checkPermission(auth()->user()->id, 150) == true || checkPermission(auth()->user()->id, 151) == true): ?>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fa fa-photo"></i><span
                                        class="side-menu__label"><?php echo e(trans('admin.testom')); ?></span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">

                                    <?php if(checkPermission(auth()->user()->id, 151) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/testom/add')); ?>" class="slide-item"> <?php echo e(trans('admin.addTestom')); ?> </a></li>
                                    <?php endif; ?>

                                    <?php if(checkPermission(auth()->user()->id, 150) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/testom')); ?>" class="slide-item"> <?php echo e(trans('admin.testom')); ?> </a></li>
                                    <?php endif; ?>

                                </ul>
                            </li>
                            <?php endif; ?>

                            <?php if(checkPermission(auth()->user()->id, 155) == true || checkPermission(auth()->user()->id, 156) == true): ?>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-users"></i><span
                                        class="side-menu__label"><?php echo e(trans('admin.teamwork')); ?></span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">

                                    <?php if(checkPermission(auth()->user()->id, 156) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/teamwork/add')); ?>" class="slide-item"> <?php echo e(trans('admin.addTeamwork')); ?> </a></li>
                                    <?php endif; ?>

                                    <?php if(checkPermission(auth()->user()->id, 155) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/teamwork')); ?>" class="slide-item"> <?php echo e(trans('admin.teamwork')); ?> </a></li>
                                    <?php endif; ?>

                                </ul>
                            </li>
                            <?php endif; ?>

                            <?php if(checkPermission(auth()->user()->id, 175) == true || checkPermission(auth()->user()->id, 176) == true): ?>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-home"></i><span
                                        class="side-menu__label"><?php echo e(trans('admin.companies')); ?></span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">

                                    <?php if(checkPermission(auth()->user()->id, 176) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/companies/add')); ?>" class="slide-item"> <?php echo e(trans('admin.addCompany')); ?> </a></li>
                                    <?php endif; ?>

                                    <?php if(checkPermission(auth()->user()->id, 175) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/companies')); ?>" class="slide-item"> <?php echo e(trans('admin.companies')); ?> </a></li>
                                    <?php endif; ?>

                                </ul>
                            </li>
                            <?php endif; ?>

                            <?php if(checkPermission(auth()->user()->id, 180) == true || checkPermission(auth()->user()->id, 181) == true): ?>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-home"></i><span
                                        class="side-menu__label"><?php echo e(trans('admin.projects')); ?></span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">

                                    <?php if(checkPermission(auth()->user()->id, 181) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/projects/add')); ?>" class="slide-item"> <?php echo e(trans('admin.addProject')); ?> </a></li>
                                    <?php endif; ?>

                                    <?php if(checkPermission(auth()->user()->id, 180) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/projects')); ?>" class="slide-item"> <?php echo e(trans('admin.projects')); ?> </a></li>
                                    <?php endif; ?>

                                </ul>
                            </li>
                            <?php endif; ?>

                            <?php if(checkPermission(auth()->user()->id, 185) == true || checkPermission(auth()->user()->id, 186) == true): ?>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-line-chart"></i><span
                                        class="side-menu__label"><?php echo e(trans('admin.reports')); ?></span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">

                                    <?php if(checkPermission(auth()->user()->id, 186) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/reports/add')); ?>" class="slide-item"> <?php echo e(trans('admin.addReport')); ?> </a></li>
                                    <?php endif; ?>

                                    <?php if(checkPermission(auth()->user()->id, 185) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/reports')); ?>" class="slide-item"> <?php echo e(trans('admin.reports')); ?> </a></li>
                                    <?php endif; ?>

                                </ul>
                            </li>
                            <?php endif; ?>

                            <?php if(checkPermission(auth()->user()->id, 26) == true): ?>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fa fa-envelope-o"></i><span
                                        class="side-menu__label"><?php echo e(trans('admin.contact')); ?></span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">

                                    <?php if(checkPermission(auth()->user()->id, 26) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/contact')); ?>" class="slide-item"> <?php echo e(trans('admin.contact')); ?> </a></li>
                                    <?php endif; ?>

                                </ul>
                            </li>
                            <?php endif; ?>

                            <?php if(checkPermission(auth()->user()->id, 28) == true || checkPermission(auth()->user()->id, 29) == true || checkPermission(auth()->user()->id, 3) == true): ?>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fa fa-key"></i><span
                                        class="side-menu__label"><?php echo e(trans('admin.permissionGroup')); ?></span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">

                                    <?php if(checkPermission(auth()->user()->id, 29) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/permissionGroup/add')); ?>" class="slide-item"> <?php echo e(trans('admin.addPermissionGroup')); ?> </a></li>
                                    <?php endif; ?>

                                    <?php if(checkPermission(auth()->user()->id, 28) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/permissionGroup')); ?>" class="slide-item"> <?php echo e(trans('admin.permissionGroup')); ?> </a></li>
                                    <?php endif; ?>

                                    <?php if(checkPermission(auth()->user()->id, 3) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/user/admin')); ?>" class="slide-item"> <?php echo e(trans('admin.admins')); ?> </a></li>
                                    <?php endif; ?>

                                </ul>
                            </li>
                            <?php endif; ?>

                            <?php if(checkPermission(auth()->user()->id, 63) == true): ?>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fa fa-bell-o"></i><span
                                        class="side-menu__label"><?php echo e(trans('admin.notifications')); ?></span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">

                                    <?php if(checkPermission(auth()->user()->id, 63) == true): ?>
                                    <li><a href="<?php echo e(url('/admin/notifications/send')); ?>" class="slide-item"> <?php echo e(trans('admin.notifications')); ?> </a></li>
                                    <?php endif; ?>

                                </ul>
                            </li>
                            <?php endif; ?>

                            <li class="sub-category">
                                <h3><?php echo e(trans('admin.logOut')); ?></h3>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fa fa-user"></i><span
                                        class="side-menu__label"><?php echo e(trans('admin.logOut')); ?></span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">

                                    <li>
                                      <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="slide-item">
                                        <?php echo e(trans('admin.logOut')); ?>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                          <?php echo e(csrf_field()); ?>

                                        </form>
                                      </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>