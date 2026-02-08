 <?php
     use App\Models\Notification;
     use App\Enums\AdminPermissionEnum;
     use App\Enums\SellerPermissionEnum;
     use App\Enums\DefaultSystemRolesEnum;
     use Illuminate\Support\Facades\Auth;
 ?>
<div class="page-header d-print-none mt-0">
    <div class="container-xl navbar align-items-end justify-content-end py-2">
        <div class="">
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <!-- Theme switcher -->
                    <div class="nav-item dropdown d-none d-md-flex me-3">
                        <a href="#" onclick="toggleTheme()" class="nav-link px-0" tabindex="-1" aria-label="Switch theme">
                            <i id="theme-icon" class="ti ti-moon fs-2"></i>
                        </a>
                    </div>

                    <!-- Seller store status toggle -->



















                    <!-- Language dropdown -->
                    <div class="nav-item dropdown d-none d-md-flex me-3">
                        <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
                           aria-label="Select language">
                            <i class="ti ti-language fs-2"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="<?php echo e(route('set.language', 'en')); ?>"
                               class="dropdown-item <?php echo e(app()->getLocale() == 'en' ? 'active' : ''); ?>">
                                <?php echo e(__('labels.languages.english')); ?></a>
                            <a href="<?php echo e(route('set.language', 'es')); ?>"
                               class="dropdown-item <?php echo e(app()->getLocale() == 'es' ? 'active' : ''); ?>">
                                <?php echo e(__('labels.languages.spanish')); ?></a>
                            <a href="<?php echo e(route('set.language', 'fr')); ?>"
                               class="dropdown-item <?php echo e(app()->getLocale() == 'fr' ? 'active' : ''); ?>">
                                <?php echo e(__('labels.languages.french')); ?></a>
                            <a href="<?php echo e(route('set.language', 'de')); ?>"
                               class="dropdown-item <?php echo e(app()->getLocale() == 'de' ? 'active' : ''); ?>">
                                <?php echo e(__('labels.languages.german')); ?></a>
                            <a href="<?php echo e(route('set.language', 'zh')); ?>"
                               class="dropdown-item <?php echo e(app()->getLocale() == 'zh' ? 'active' : ''); ?>">
                                <?php echo e(__('labels.languages.chinese')); ?></a>
                        </div>
                    </div>

                    <!-- Notification dropdown -->
                    <?php
                        $currentPanel = request()->segment(1); // Get current panel (admin/seller)
                        $userAuth = Auth::user();
                        // Determine if the user can view notifications in the header
                        $canViewNotifications = false;
                        if ($currentPanel === 'admin') {
                            // Super Admin bypass on an admin panel
                            if ($userAuth && $userAuth->hasRole(DefaultSystemRolesEnum::SUPER_ADMIN())) {
                                $canViewNotifications = true;
                            } else {
                                try {
                                    $canViewNotifications = $userAuth?->hasPermissionTo(AdminPermissionEnum::NOTIFICATION_VIEW()) ?? false;
                                } catch (\Throwable $e) {
                                    $canViewNotifications = false;
                                }
                            }
                        } elseif ($currentPanel === 'seller') {
                            // Default SELLER role has full seller module access
                            if ($userAuth && $userAuth->hasRole(DefaultSystemRolesEnum::SELLER())) {
                                $canViewNotifications = true;
                            } else {
                                try {
                                    $canViewNotifications = $userAuth?->hasPermissionTo(SellerPermissionEnum::NOTIFICATION_VIEW()) ?? false;
                                } catch (\Throwable $e) {
                                    $canViewNotifications = false;
                                }
                            }
                        } else {
                            $canViewNotifications = false; // other panels: hide by default
                        }
                    ?>
                    <?php if($canViewNotifications): ?>
                        <?php
                            $sentTo = $currentPanel === 'admin' ? 'admin' : 'seller';

                            // Fetch latest notifications for current panel
                            $notifications = Notification::where('sent_to', $sentTo)
                                ->orderBy('created_at', 'desc')
                                ->limit(5)
                                ->get();

                            // Get unread count
                            $unreadCount = Notification::where('sent_to', $sentTo)
                                ->where('is_read', false)
                                ->count();
                        ?>
                        <div class="nav-item dropdown d-none d-md-flex me-3">
                            <button type="button" class="btn btn-icon border-0 shadow-none nav-link px-0"
                                    data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                                <i class="ti ti-bell fs-2"></i>
                                <?php if($unreadCount > 0): ?>
                                    <span class="badge bg-red badge-sm mt-1 badge-notification text-red-fg">
                                        <?php echo e($unreadCount > 9 ? '9+' : $unreadCount); ?>

                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                <?php endif; ?>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"><?php echo e(__('labels.notifications')); ?>

                                        </h3>
                                    </div>
                                    <div class="list-group list-group-flush list-group-hoverable">
                                        <?php $__empty_1 = true; $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <div class="list-group-item">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <span
                                                            class="status-dot <?php echo e($notification->is_read ? 'bg-secondary' : 'status-dot-animated bg-red'); ?> d-block"></span>
                                                    </div>
                                                    <div class="col text-truncate">
                                                        <a href="#" class="text-body d-block text-ellipsis-1"><?php echo e($notification->message); ?></a>
                                                        <div class="d-block text-muted text-truncate mt-n1">
                                                            <?php echo e($notification->created_at->diffForHumans()); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <div class="list-group-item">
                                                <div class="row align-items-center">
                                                    <div class="col text-center text-muted">
                                                        <i class="ti ti-bell-off fs-2 mb-2"></i>
                                                        <div><?php echo e(__('labels.no_notifications')); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-footer">
                                        <a href="<?php echo e(route($currentPanel . '.notifications.index')); ?>"
                                           class="btn btn-outline-primary w-100"><?php echo e(__('labels.view_all_notifications')); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Admin profile dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                           aria-label="Open user menu">
                            <?php if($user->profile_image): ?>
                                <span class="avatar avatar-sm" id="profile"
                                      style="background-image: url(<?php echo e($user->profile_image); ?>);"></span>
                            <?php else: ?>
                                <span class="avatar avatar-sm bg-primary text-white"
                                      id="profile"><?php echo e(strtoupper(substr($user->name, 0, 2))); ?></span>
                            <?php endif; ?>
                            <div class="d-none d-xl-block ps-2">
                                <div><?php echo e($user->username ?? ""); ?></div>
                                <div class="mt-1 small text-muted">
                                    <?php if($user->role == 'admin'): ?>
                                        <?php echo e(__('labels.administrator')); ?>

                                    <?php elseif($user->role == 'delivery_boy'): ?>
                                        <?php echo e(__('labels.delivery_boy')); ?>

                                    <?php endif; ?>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="<?php echo e(route(request()->segment(1).'.profile.index')); ?>" class="dropdown-item">
                                <i class="ti ti-user me-2 fs-2"></i><?php echo e(__('labels.profile')); ?>

                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?php echo e(route(request()->segment(1).'.logout')); ?>" class="dropdown-item">
                                <i class="ti ti-logout me-2 fs-2"></i><?php echo e(__('labels.logout')); ?>

                            </a>
                        </div>
                    </div>
                </div>
                <!-- BEGIN MODAL -->
                <!-- END MODAL -->
            </div>
        </div>
    </div>
    <?php if(($systemSettings['demoMode'] ?? false)): ?>
        <div class="alert alert-danger alert-dismissible mt-3 text-danger" role="alert">
            <div class="alert-icon">
                <!-- Download SVG icon from http://tabler.io/icons/icon/info-circle -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon alert-icon icon-2">
                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                    <path d="M12 9h.01"></path>
                    <path d="M11 12h1v4h1"></path>
                </svg>
            </div>
            <?php
                $demoMessage = $user->access_panel->value === 'admin'
                    ? ($systemSettings['adminDemoModeMessage'] ?? null)
                    : ($systemSettings['sellerDemoModeMessage'] ?? null);
            ?>
            <?php echo e($demoMessage ?: __('labels.demo_mode_message')); ?>

        </div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/wibi-backend/resources/views/layouts/partials/_header.blade.php ENDPATH**/ ?>