<?php $__env->startSection('title', __('labels.add_store')); ?>

<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title = __('labels.add_store');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('seller.dashboard')],
        ['title' => __('labels.stores'), 'url' => route('seller.stores.index')],
        ['title' => __('labels.add_store'), 'url' => '']
    ];
?>

<?php $__env->startSection('seller-content'); ?>
    <div class="page-wrapper">
        <?php echo $__env->make('components.page_header', ['title' => empty($store) ? "Register New Store" : "Update ".$store->name." Store", 'step' => 2], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <!-- BEGIN PAGE BODY -->
        <!-- resources/views/admin/sellers/form.blade.php -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row g-5">
                    <div class="col-sm-2 d-none d-lg-block">
                        <div class="sticky-top">
                            <h3><?php echo e(__('labels.menu')); ?></h3>
                            <nav class="nav nav-vertical nav-pills" id="pills">
                                <a class="nav-link" href="#pills-basic"><?php echo e(__('labels.basic_details')); ?></a>
                                <a class="nav-link" href="#pills-location"><?php echo e(__('labels.location_details')); ?></a>
                                <a class="nav-link" href="#pills-logos"><?php echo e(__('labels.logo_and_banner')); ?></a>
                                <a class="nav-link" href="#pills-documents"><?php echo e(__('labels.business_documents')); ?></a>
                                <a class="nav-link" href="#pills-bank"><?php echo e(__('labels.bank_details')); ?></a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-sm" data-bs-spy="scroll" data-bs-target="#pills" data-bs-offset="0">
                        <div class="row row-cards">
                            <div class="col-12">
                                <form
                                    action="<?php echo e(empty($store) ? route('seller.stores.store') : route('seller.stores.update', $store->id ?? '')); ?>"
                                    class="form-submit" method="post"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <!-- Basic Details -->
                                    <div class="card mb-4" id="pills-basic">
                                        <div class="card-header">
                                            <h4 class="card-title"><?php echo e(__('labels.basic_details')); ?></h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.store_name')); ?></label>
                                                <input type="text" class="form-control" name="name"
                                                       placeholder="<?php echo e(__('labels.enter_store_name')); ?>"
                                                       value="<?php echo e(old('name', $store->name ?? '')); ?> "/>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label
                                                            class="form-label required"><?php echo e(__('labels.contact_email')); ?></label>
                                                        <input type="email" class="form-control" name="contact_email"
                                                               placeholder="<?php echo e(__('labels.enter_email_address')); ?>"
                                                               value="<?php echo e(old('contact_email', $store->contact_email ?? '')); ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label
                                                            class="form-label required"><?php echo e(__('labels.contact_number')); ?></label>
                                                        <input type="number" min="0" class="form-control" name="contact_number"
                                                               id="mobile"
                                                               placeholder="<?php echo e(__('labels.enter_mobile_number')); ?>"
                                                               value="<?php echo e(old('contact_number', $store->contact_number ?? '')); ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Location Details -->
                                    <div class="card mb-4" id="pills-location">
                                        <div class="card-header">
                                            <h4 class="card-title"><?php echo e(__('labels.location_details')); ?></h4>
                                        </div>
                                        <div class="card-body">
                                            <div id="autocomplete-container" class="form-row" style="display: none;"></div>
                                            <div id="map"></div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.country')); ?></label>
                                                <select class="form-select" name="country"
                                                        id="select-countries">
                                                </select>
                                                <input type="hidden" id="selected-country"
                                                       value="<?php echo e(!empty($store) && $store->country ? $store->country : ""); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label required"><?php echo e(__('labels.address')); ?></label>
                                                <input type="text" class="form-control" name="address" id="address"
                                                       placeholder="<?php echo e(__('labels.enter_address')); ?>"
                                                       value="<?php echo e(old('address', $store->address ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label required"><?php echo e(__('labels.landmark')); ?></label>
                                                <input type="text" class="form-control" name="landmark" id="landmark"
                                                       placeholder="<?php echo e(__('labels.enter_landmark')); ?>"
                                                       value="<?php echo e(old('landmark', $store->landmark ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label required"><?php echo e(__('labels.city')); ?></label>
                                                <input type="text" class="form-control" name="city" id="city"
                                                       placeholder="<?php echo e(__('labels.enter_city')); ?>"
                                                       value="<?php echo e(old('city', $store->city ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label required"><?php echo e(__('labels.state')); ?></label>
                                                <input type="text" class="form-control" name="state" id="state"
                                                       placeholder="<?php echo e(__('labels.enter_state')); ?>"
                                                       value="<?php echo e(old('state', $store->state ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label required"><?php echo e(__('labels.zipcode')); ?></label>
                                                <input type="text" class="form-control" name="zipcode" id="zipcode"
                                                       placeholder="<?php echo e(__('labels.enter_zipcode')); ?>"
                                                       value="<?php echo e(old('zipcode', $store->zipcode ?? '')); ?>"/>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"><?php echo e(__('labels.latitude')); ?></label>
                                                        <input type="text" class="form-control" name="latitude"
                                                               id="latitude"
                                                               placeholder="<?php echo e(__('labels.enter_latitude')); ?>"
                                                               value="<?php echo e(old('latitude', $store->latitude ?? '')); ?>"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"><?php echo e(__('labels.longitude')); ?></label>
                                                        <input type="text" class="form-control" name="longitude"
                                                               id="longitude"
                                                               placeholder="<?php echo e(__('labels.enter_longitude')); ?>"
                                                               value="<?php echo e(old('longitude', $store->longitude ?? '')); ?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mb-4" id="pills-logos">
                                        <div class="card-header">
                                            <h4 class="card-title"><?php echo e(__('labels.logo_and_banner')); ?></h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.store_logo')); ?></label>
                                                <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'store_logo','imageUrl' => ''.e($store->store_logo ?? null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'store_logo','imageUrl' => ''.e($store->store_logo ?? null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff)): ?>
<?php $attributes = $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff; ?>
<?php unset($__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff)): ?>
<?php $component = $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff; ?>
<?php unset($__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff); ?>
<?php endif; ?>
                                                <?php $__errorArgs = ['store_logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="text-danger mt-2"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label"><?php echo e(__('labels.store_banner')); ?></label>
                                                <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'store_banner','imageUrl' => ''.e($store->store_banner ?? null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'store_banner','imageUrl' => ''.e($store->store_banner ?? null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff)): ?>
<?php $attributes = $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff; ?>
<?php unset($__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff)): ?>
<?php $component = $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff; ?>
<?php unset($__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff); ?>
<?php endif; ?>
                                                <?php $__errorArgs = ['store_banner'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="text-danger mt-2"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Business Documents -->
                                    <div class="card mb-4" id="pills-documents">
                                        <div class="card-header">
                                            <h4 class="card-title"><?php echo e(__('labels.business_documents')); ?></h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.address_proof')); ?></label>
                                                <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'address_proof','imageUrl' => ''.e($store->address_proof ?? null).'','disabled' => ''.e(!empty($store->address_proof) ? 'true' : 'false').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'address_proof','imageUrl' => ''.e($store->address_proof ?? null).'','disabled' => ''.e(!empty($store->address_proof) ? 'true' : 'false').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff)): ?>
<?php $attributes = $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff; ?>
<?php unset($__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff)): ?>
<?php $component = $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff; ?>
<?php unset($__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff); ?>
<?php endif; ?>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.voided_check')); ?></label>
                                                <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'voided_check','imageUrl' => ''.e($store->voided_check ?? null).'','disabled' => ''.e(!empty($store->voided_check) ? 'true' : 'false').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'voided_check','imageUrl' => ''.e($store->voided_check ?? null).'','disabled' => ''.e(!empty($store->voided_check) ? 'true' : 'false').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff)): ?>
<?php $attributes = $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff; ?>
<?php unset($__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff)): ?>
<?php $component = $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff; ?>
<?php unset($__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff); ?>
<?php endif; ?>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label required"><?php echo e(__('labels.tax_name')); ?></label>
                                                <input type="text" class="form-control" name="tax_name"
                                                       placeholder="<?php echo e(__('labels.enter_tax_name')); ?>"
                                                       value="<?php echo e(old('tax_name', $store->tax_name ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label required"><?php echo e(__('labels.tax_number')); ?></label>
                                                <input type="text" class="form-control" name="tax_number"
                                                       placeholder="<?php echo e(__('labels.enter_tax_number')); ?>"
                                                       value="<?php echo e(old('tax_number', $store->tax_number ?? '')); ?>"/>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Bank Details -->
                                    <div class="card mb-4" id="pills-bank">
                                        <div class="card-header">
                                            <h4 class="card-title"><?php echo e(__('labels.bank_details')); ?></h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="form-label required"><?php echo e(__('labels.bank_name')); ?></label>
                                                <input type="text" class="form-control" name="bank_name"
                                                       placeholder="<?php echo e(__('labels.enter_bank_name')); ?>"
                                                       value="<?php echo e(old('bank_name', $store->bank_name ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.bank_branch_code')); ?></label>
                                                <input type="text" class="form-control" name="bank_branch_code"
                                                       placeholder="<?php echo e(__('labels.enter_bank_branch_code')); ?>"
                                                       value="<?php echo e(old('bank_branch_code', $store->bank_branch_code ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.account_holder_name')); ?></label>
                                                <input type="text" class="form-control" name="account_holder_name"
                                                       placeholder="<?php echo e(__('labels.enter_account_holder_name')); ?>"
                                                       value="<?php echo e(old('account_holder_name', $store->account_holder_name ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.account_number')); ?></label>
                                                <input type="number" min="0" class="form-control" name="account_number"
                                                       placeholder="<?php echo e(__('labels.enter_account_number')); ?>"
                                                       value="<?php echo e(old('account_number', $store->account_number ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.routing_number')); ?></label>
                                                <input type="number" min="0" class="form-control" name="routing_number"
                                                       placeholder="<?php echo e(__('labels.enter_routing_number')); ?>"
                                                       value="<?php echo e(old('routing_number', $store->routing_number ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.bank_account_type')); ?></label>
                                                <select class="form-select" name="bank_account_type">
                                                    <?php $__currentLoopData = $bankAccountTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accountType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option
                                                            value="<?php echo e($accountType); ?>" <?php echo e(!empty($store) && $store->bank_account_type === $accountType ? "selected" : ""); ?>><?php echo e($accountType); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer text-end">
                                    <div class="d-flex">
                                            <button type="submit"
                                                    class="btn btn-primary ms-auto"><?php echo e(empty($store) ? "Submit" : "Update"); ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        #map {
            height: 400px;
            width: 100%;
            margin-bottom: 20px;
        }

        .form-row {
            margin-bottom: 8px;
        }

        /* Additional styles for the city selector inside map */
        #city-selector-card gmp-place-autocomplete {
            width: 100%;
        }

        #infowindow-content .title {
            font-weight: bold;
        }

        #map #infowindow-content {
            display: inline;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=<?php echo e($googleApiKey); ?>&libraries=maps,places,marker&callback=initMap"
        async defer>
    </script>
    <script src="<?php echo e(hyperAsset('assets/js/stores.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.seller.app', [
    'page' => $menuSeller['stores']['active'] ?? "",
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/seller/stores/form.blade.php ENDPATH**/ ?>