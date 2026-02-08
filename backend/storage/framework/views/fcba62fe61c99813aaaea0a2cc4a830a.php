<?php $__env->startSection('title', __('labels.system_settings')); ?>

<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title = __('labels.system_settings');
        $page_pretitle = __('labels.admin') . " " . __('labels.settings');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('admin.dashboard')],
        ['title' => __('labels.settings'), 'url' => route('admin.settings.index')],
        ['title' => __('labels.system_settings'), 'url' => null],
    ];
?>

<?php $__env->startSection('admin-content'); ?>
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title"><?php echo e(__('labels.system_settings')); ?></h2>
                <?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['items' => $breadcrumbs]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($breadcrumbs)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $attributes = $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $component = $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
            </div>
        </div>
    </div>
    <!-- BEGIN PAGE BODY -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row g-5">
                <div class="col-sm-2 d-none d-lg-block">
                    <div class="sticky-top">
                        <h3><?php echo e(__('labels.menu')); ?></h3>
                        <nav class="nav nav-vertical nav-pills" id="pills">
                            <a class="nav-link" href="#pills-general"><?php echo e(__('labels.general')); ?></a>
                            <a class="nav-link"
                               href="#pills-support"><?php echo e(__('labels.support_information')); ?></a>
                            <a class="nav-link"
                               href="#pills-cart"><?php echo e(__('labels.cart_inventory_settings')); ?></a>
                            <a class="nav-link" href="#pills-wallet"><?php echo e(__('labels.wallet_settings')); ?></a>
                            <a class="nav-link"
                               href="#pills-maintenance"><?php echo e(__('labels.maintenance_mode')); ?></a>
                            <a class="nav-link"
                               href="#pills-demomode"><?php echo e(__('labels.demo_mode')); ?></a>
                            
                            
                        </nav>
                    </div>
                </div>
                <div class="col-sm" data-bs-spy="scroll" data-bs-target="#pills" data-bs-offset="0">
                    <div class="row row-cards">
                        <div class="col-12">
                            <form action="<?php echo e(route('admin.settings.store')); ?>" class="form-submit" method="post"
                                  enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="type" value="system">
                                <div class="card mb-4" id="pills-general">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.general')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.app_name')); ?></label>
                                            <input type="text" class="form-control" name="appName"
                                                   placeholder="<?php echo e(__('labels.app_name_placeholder')); ?>"
                                                   value="<?php echo e($settings['appName'] ?? ''); ?>"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.system_timezone')); ?></label>
                                            <input type="text" class="form-control" name="systemTimezone"
                                                   placeholder="<?php echo e(__('labels.system_timezone_placeholder')); ?>"
                                                   value="<?php echo e($settings['systemTimezone'] ?? ''); ?>"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.copyright_details')); ?></label>
                                            <input type="text" class="form-control" name="copyrightDetails"
                                                   placeholder="<?php echo e(__('labels.copyright_details_placeholder')); ?>"
                                                   value="<?php echo e($settings['copyrightDetails'] ?? ''); ?>"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.currency')); ?></label>
                                            <input type="hidden" name="currencySymbol" id="currency-symbol"
                                                   value="<?php echo e($settings['currencySymbol'] ?? ''); ?>">
                                            <input type="hidden" id="selected-currency"
                                                   value="<?php echo e($settings['currency'] ?? ''); ?>">
                                            <select class="form-select" id="select-currency" name="currency"
                                                    placeholder="USD, EUR, INR, etc."></select>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div
                                                        class="form-label required"><?php echo e(__('labels.logo')); ?></div>
                                                    <input type="file" class="form-control" name="logo"
                                                           data-image-url="<?php echo e($settings['logo']); ?>"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div
                                                        class="form-label required"><?php echo e(__('labels.favicon')); ?></div>
                                                    <input type="file" name="favicon"
                                                           data-image-url="<?php echo e($settings['favicon']); ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Company Address</label>
                                            <textarea class="form-control" name="companyAddress" rows="3" placeholder="Enter company address shown on invoice"><?php echo e($settings['companyAddress'] ?? ''); ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Admin Signature (Authorized Signatory)</label>
                                            <input type="file" name="adminSignature" data-image-url="<?php echo e($settings['adminSignature'] ?? ''); ?>"/>
                                            <small class="form-hint">Upload a signature image to display on invoices.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4" id="pills-support">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.support_information')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.seller_support_email')); ?></label>
                                            <div>
                                                <input type="email" class="form-control" name="sellerSupportEmail"
                                                       aria-describedby="emailHelp"
                                                       placeholder="<?php echo e(__('labels.seller_support_email_placeholder')); ?>"
                                                       value="<?php echo e($settings['sellerSupportEmail'] ?? ''); ?>"/>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.seller_support_number')); ?></label>
                                            <div>
                                                <input type="tel" class="form-control" name="sellerSupportNumber"
                                                       aria-describedby="numberHelp"
                                                       placeholder="<?php echo e(__('labels.seller_support_number_placeholder')); ?>"
                                                       value="<?php echo e($settings['sellerSupportNumber'] ?? ''); ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4" id="pills-cart">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.cart_inventory_settings')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.select_checkout_type')); ?></label>
                                            <div>
                                                <label class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="checkoutType"
                                                           value="single_store" <?php echo e(!empty($settings['checkoutType']) && $settings['checkoutType'] === 'single_store' ? 'checked' : ''); ?>>
                                                    <span
                                                        class="form-check-label"><?php echo e(__('labels.single_store')); ?></span>
                                                </label>
                                                <label class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="checkoutType"
                                                           value="multi_store" <?php echo e(!empty($settings['checkoutType']) && $settings['checkoutType'] === 'multi_store' ? 'checked' : ''); ?>>
                                                    <span class="form-check-label"><?php echo e(__('labels.multi_store')); ?></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.minimum_cart_amount')); ?></label>
                                            <input type="number" step="0.01" min="0" class="form-control"
                                                   name="minimumCartAmount"
                                                   placeholder="<?php echo e(__('labels.minimum_cart_amount_placeholder')); ?>"
                                                   value="<?php echo e($settings['minimumCartAmount'] ?? ''); ?>"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.maximum_items_allowed_in_cart')); ?></label>
                                            <input type="number" min="1" class="form-control"
                                                   name="maximumItemsAllowedInCart"
                                                   placeholder="<?php echo e(__('labels.maximum_items_allowed_in_cart placeholder')); ?>"
                                                   value="<?php echo e($settings['maximumItemsAllowedInCart'] ?? ''); ?>"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.low_stock_limit')); ?></label>
                                            <input type="number" min="0" class="form-control" name="lowStockLimit"
                                                   placeholder="<?php echo e(__('labels.low_stock_limit_placeholder')); ?>"
                                                   value="<?php echo e($settings['lowStockLimit'] ?? ''); ?>"/>
                                        </div>








                                    </div>
                                </div>
                                <div class="card mb-4" id="pills-wallet">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.wallet_settings')); ?></h4>
                                    </div>
                                    <div class="card-body">











                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.welcome_wallet_balance_amount')); ?></label>
                                            <input type="number" step="0.01" min="0" class="form-control"
                                                   name="welcomeWalletBalanceAmount"
                                                   placeholder="<?php echo e(__('labels.welcome_wallet_balance_amount_placeholder')); ?>"
                                                   value="<?php echo e($settings['welcomeWalletBalanceAmount'] ?? '0'); ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4" id="pills-maintenance">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.maintenance_mode')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="row">
                                                    <span
                                                        class="col"><?php echo e(__('labels.seller_app_maintenance_mode')); ?></span>
                                                <span class="col-auto">
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                   name="sellerAppMaintenanceMode" value="1" <?php echo e(isset($settings['sellerAppMaintenanceMode']) && $settings['sellerAppMaintenanceMode'] ? 'checked' : ''); ?>/>
                                                        </label>
                                                    </span>
                                            </label>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.seller_app_maintenance_message')); ?></label>
                                            <input type="text" class="form-control"
                                                   name="sellerAppMaintenanceMessage"
                                                   placeholder="<?php echo e(__('labels.seller_app_maintenance_message_placeholder')); ?>"
                                                   value="<?php echo e($settings['sellerAppMaintenanceMessage'] ?? ''); ?>"/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="row">
                                                    <span
                                                        class="col"><?php echo e(__('labels.web_maintenance_mode')); ?></span>
                                                <span class="col-auto">
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                   name="webMaintenanceMode" value="1" <?php echo e(isset($settings['webMaintenanceMode']) && $settings['webMaintenanceMode'] ? 'checked' : ''); ?>/>
                                                        </label>
                                                    </span>
                                            </label>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.web_maintenance_message')); ?></label>
                                            <input type="text" class="form-control" name="webMaintenanceMessage"
                                                   placeholder="<?php echo e(__('labels.web_maintenance_message_placeholder')); ?>"
                                                   value="<?php echo e($settings['webMaintenanceMessage'] ?? ''); ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4" id="pills-demomode">

                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.demo_mode')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="row">
                                                <span class="col"><?php echo e(__('labels.enable_demo_mode')); ?></span>
                                                <span class="col-auto">
                                                    <label class="form-check form-check-single form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                               name="demoMode" value="1" <?php echo e(isset($settings['demoMode']) && $settings['demoMode'] ? 'checked' : ''); ?>/>
                                                    </label>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.admin_demo_mode_message')); ?></label>
                                            <input type="text" class="form-control" name="adminDemoModeMessage"
                                                   placeholder="<?php echo e(__('labels.admin_demo_mode_message_placeholder')); ?>"
                                                   value="<?php echo e($settings['adminDemoModeMessage'] ?? ''); ?>"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.seller_demo_mode_message')); ?></label>
                                            <input type="text" class="form-control" name="sellerDemoModeMessage"
                                                   placeholder="<?php echo e(__('labels.seller_demo_mode_message_placeholder')); ?>"
                                                   value="<?php echo e($settings['sellerDemoModeMessage'] ?? ''); ?>"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.customer_demo_mode_message')); ?></label>
                                            <input type="text" class="form-control" name="customerDemoModeMessage"
                                                   placeholder="<?php echo e(__('labels.customer_demo_mode_message_placeholder')); ?>"
                                                   value="<?php echo e($settings['customerDemoModeMessage'] ?? ''); ?>"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.customer_location_demo_mode_message')); ?></label>
                                            <input type="text" class="form-control" name="customerLocationDemoModeMessage"
                                                   placeholder="<?php echo e(__('labels.customer_location_demo_mode_message_placeholder')); ?>"
                                                   value="<?php echo e($settings['customerLocationDemoModeMessage'] ?? ''); ?>"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.delivery_boy_demo_mode_message')); ?></label>
                                            <input type="text" class="form-control" name="deliveryBoyDemoModeMessage"
                                                   placeholder="<?php echo e(__('labels.delivery_boy_demo_mode_message_placeholder')); ?>"
                                                   value="<?php echo e($settings['deliveryBoyDemoModeMessage'] ?? ''); ?>"/>
                                        </div>
                                    </div>
                                </div>

                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div class="card-footer text-end">
                                    <div class="d-flex">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('updateSetting', [\App\Models\Setting::class, 'system'])): ?>
                                            <button type="submit"
                                                    class="btn btn-primary ms-auto"><?php echo e(__('labels.submit')); ?></button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE BODY -->
    <script>
        const toggle = document.getElementById('referEarnToggle');
        const fields = document.getElementById('referEarnFields');
        const toggleFields = () => {
            fields.style.display = toggle.checked ? 'block' : 'none';
        };
        toggle.addEventListener('change', toggleFields);
        toggleFields(); // initial state
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', ['page' => $menuAdmin['settings']['active'] ?? "", 'sub_page' => $menuAdmin['settings']['route']['system']['sub_active'] ?? "" ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/admin/settings/system.blade.php ENDPATH**/ ?>