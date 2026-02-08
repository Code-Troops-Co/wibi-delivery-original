<?php $__env->startSection('title', __('labels.add_seller')); ?>

<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title = __('labels.sellers');
        $page_pretitle = __('labels.' . (!empty($seller)) ? __('labels.edit_seller') : __('labels.add_seller'));
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('admin.dashboard')],
        ['title' => __('labels.sellers'), 'url' => null],
    ];
?>

<?php $__env->startSection('admin-content'); ?>
    <div class="page-wrapper">
        <?php echo $__env->make('components.page_header', ['title' => (!empty($seller)) ? __('labels.edit_seller') : __('labels.add_seller'), 'step' => 2], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

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
                                <a class="nav-link" href="#pills-documents"><?php echo e(__('labels.business_documents')); ?></a>
                                <a class="nav-link" href="#pills-status"><?php echo e(__('labels.status_and_metadata')); ?></a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-sm" data-bs-spy="scroll" data-bs-target="#pills" data-bs-offset="0">
                        <div class="row row-cards">
                            <div class="col-12">
                                <form
                                    action="<?php echo e((!empty($seller)) ? route('admin.sellers.update',['id' => $seller->id]) : route('admin.sellers.store')); ?>"
                                    class="form-submit" method="post">
                                    <?php echo csrf_field(); ?>
                                    <!-- Basic Details -->
                                    <div class="card mb-4" id="pills-basic">
                                        <div class="card-header">
                                            <h4 class="card-title"><?php echo e(__('labels.basic_details')); ?></h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.seller_name')); ?></label>
                                                <input type="text"
                                                       class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                       name="name"
                                                       placeholder="<?php echo e(__('labels.enter_seller_name')); ?>"
                                                       value="<?php echo e(old('name', $seller->user->name ?? '')); ?>"
                                                />
                                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label required"><?php echo e(__('labels.country')); ?></label>
                                                <select type="text"
                                                        class="form-select <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        name="country"
                                                        id="select-countries" <?php echo e(!empty($seller) && $seller->country ? "disabled" : ""); ?>>
                                                </select>
                                                <input type="hidden" id="selected-country"
                                                       value="<?php echo e(!empty($seller) && $seller->country ? $seller->country : ""); ?>"/>
                                                <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label required"><?php echo e(__('labels.mobile')); ?></label>
                                                <input type="tel"
                                                       class="form-control <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                       id="mobile" name="mobile"
                                                       placeholder="<?php echo e(__('labels.enter_mobile_number')); ?>"
                                                       value="<?php echo e(old('mobile', $seller->user->mobile ?? '')); ?>" <?php echo e(!empty($seller) ? "readonly disabled" : ""); ?>/>
                                                <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label
                                                            class="form-label required"><?php echo e(__('labels.email')); ?></label>
                                                        <input type="text"
                                                               class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                               name="email"
                                                               placeholder="<?php echo e(__('labels.enter_email_address')); ?>"
                                                               value="<?php echo e(old('email', $seller->user->email ?? '')); ?>"
                                                            <?php echo e(!empty($seller) ? "readonly disabled" : ""); ?>/>
                                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <?php if(empty($seller)): ?>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label
                                                                class="form-label required"><?php echo e(__('labels.password')); ?></label>

                                                            <div class="input-group mb-2">
                                                                <input type="password"
                                                                       class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                       name="password"
                                                                       placeholder="<?php echo e(__('labels.enter_password')); ?>"
                                                                       autocomplete="off" id="password"/>
                                                                <span class="input-group-text">
                                                                    <a href="#" class="link-secondary"
                                                                       title="Show password" id="password-toggle"
                                                                       data-bs-toggle="tooltip">
                                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
                                                                        Show
                                                                      </a>
                                                                </span>

                                                                <button class="btn password-button" type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24"
                                                                         viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor"
                                                                         stroke-width="2" stroke-linecap="round"
                                                                         stroke-linejoin="round"
                                                                         class="icon icon-tabler icons-tabler-outline icon-tabler-sparkles m-0">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                              fill="none"/>
                                                                        <path
                                                                            d="M16 18a2 2 0 0 1 2 2a2 2 0 0 1 2 -2a2 2 0 0 1 -2 -2a2 2 0 0 1 -2 2zm0 -12a2 2 0 0 1 2 2a2 2 0 0 1 2 -2a2 2 0 0 1 -2 -2a2 2 0 0 1 -2 2zm-7 12a6 6 0 0 1 6 -6a6 6 0 0 1 -6 -6a6 6 0 0 1 -6 6a6 6 0 0 1 6 6z"/>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-4" id="pills-location">
                                        <div class="card-header">
                                            <h4 class="card-title"><?php echo e(__('labels.location_details')); ?></h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="form-label required"><?php echo e(__('labels.address')); ?></label>
                                                <input type="text"
                                                       class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                       name="address"
                                                       placeholder="<?php echo e(__('labels.enter_address')); ?>"
                                                       value="<?php echo e(old('address', $seller->address ?? '')); ?>"/>
                                                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label
                                                            class="form-label required"><?php echo e(__('labels.city')); ?></label>
                                                        <input type="text"
                                                               class="form-control <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                               name="city"
                                                               placeholder="<?php echo e(__('labels.enter_city')); ?>"
                                                               value="<?php echo e(old('city', $seller->city ?? '')); ?>"/>
                                                        <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label
                                                            class="form-label required"><?php echo e(__('labels.landmark')); ?></label>
                                                        <input type="text"
                                                               class="form-control <?php $__errorArgs = ['landmark'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                               name="landmark"
                                                               placeholder="<?php echo e(__('labels.enter_landmark')); ?>"
                                                               value="<?php echo e(old('landmark', $seller->landmark ?? '')); ?>"
                                                        />
                                                        <?php $__errorArgs = ['landmark'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label
                                                            class="form-label required"><?php echo e(__('labels.state')); ?></label>
                                                        <input type="text"
                                                               class="form-control <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                               name="state"
                                                               placeholder="<?php echo e(__('labels.enter_state')); ?>"
                                                               value="<?php echo e(old('state', $seller->state ?? '')); ?>"
                                                        />
                                                        <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label
                                                            class="form-label required"><?php echo e(__('labels.zipcode')); ?></label>
                                                        <input type="text"
                                                               class="form-control <?php $__errorArgs = ['zipcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                               name="zipcode"
                                                               placeholder="<?php echo e(__('labels.enter_zipcode')); ?>"
                                                               value="<?php echo e(old('zipcode', $seller->zipcode ?? '')); ?>"
                                                        />
                                                        <?php $__errorArgs = ['zipcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-4" id="pills-documents">
                                        <div class="card-header">
                                            <h4 class="card-title"><?php echo e(__('labels.business_documents')); ?></h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.business_license')); ?></label>
                                                <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'business_license','imageUrl' => ''.e($seller->business_license ?? null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'business_license','imageUrl' => ''.e($seller->business_license ?? null).'']); ?>
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
                                                <small
                                                    class="form-text text-muted mt-1"><?php echo e(__('messages.business_license_note')); ?></small>
                                                <?php $__errorArgs = ['business_license'];
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
                                                    class="form-label required"><?php echo e(__('labels.articles_of_incorporation')); ?></label>
                                                <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'articles_of_incorporation','imageUrl' => ''.e($seller->articles_of_incorporation ?? null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'articles_of_incorporation','imageUrl' => ''.e($seller->articles_of_incorporation ?? null).'']); ?>
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
                                                <small
                                                    class="form-text text-muted mt-1"><?php echo e(__('messages.articles_of_incorporation_note')); ?></small>
                                                <?php $__errorArgs = ['articles_of_incorporation'];
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
                                                    class="form-label required"><?php echo e(__('labels.national_identity_card')); ?></label>
                                                <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'national_identity_card','imageUrl' => ''.e($seller->national_identity_card ?? null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'national_identity_card','imageUrl' => ''.e($seller->national_identity_card ?? null).'']); ?>
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
                                                <small
                                                    class="form-text text-muted mt-1"><?php echo e(__('messages.national_identity_card_note')); ?></small>
                                                <?php $__errorArgs = ['national_identity_card'];
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
                                                    class="form-label required"><?php echo e(__('labels.authorized_signature')); ?></label>
                                                <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'authorized_signature','imageUrl' => ''.e($seller->authorized_signature ?? null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'authorized_signature','imageUrl' => ''.e($seller->authorized_signature ?? null).'']); ?>
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
                                                <small
                                                    class="form-text text-muted mt-1"><?php echo e(__('messages.authorized_signature_note')); ?></small>
                                                <?php $__errorArgs = ['authorized_signature'];
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
                                    <div class="card mb-4" id="pills-status">
                                        <div class="card-header">
                                            <h4 class="card-title"><?php echo e(__('labels.status_and_metadata')); ?></h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.verification_status')); ?></label>
                                                <select
                                                    class="form-select <?php $__errorArgs = ['verification_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    name="verification_status">
                                                    <option
                                                        value="approved" <?php echo e(old('verification_status', $seller->verification_status ?? '') == 'approved' ? 'selected' : ''); ?>>
                                                        <?php echo e(__('labels.approved')); ?>

                                                    </option>
                                                    <option
                                                        value="not_approved" <?php echo e(old('verification_status', $seller->verification_status ?? '') == 'not_approved' ? 'selected' : ''); ?>>
                                                        <?php echo e(__('labels.not_approved')); ?>

                                                    </option>
                                                </select>
                                                <?php $__errorArgs = ['verification_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label required"><?php echo e(__('labels.metadata')); ?></label>
                                                <textarea class="form-control <?php $__errorArgs = ['metadata'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                          name="metadata"
                                                          placeholder="<?php echo e(__('labels.enter_metadata_json')); ?>"><?php echo e(old('metadata', $seller->metadata ?? '')); ?></textarea>
                                                <?php $__errorArgs = ['metadata'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.visibility_status')); ?></label>
                                                <select
                                                    class="form-select <?php $__errorArgs = ['visibility_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    name="visibility_status">
                                                    <option
                                                        value="visible" <?php echo e(old('visibility_status', $seller->visibility_status ?? '') == 'visible' ? 'selected' : ''); ?>>
                                                        <?php echo e(__('labels.visible')); ?>

                                                    </option>
                                                    <option
                                                        value="draft" <?php echo e(old('visibility_status', $seller->visibility_status ?? '') == 'draft' ? 'selected' : ''); ?>>
                                                        <?php echo e(__('labels.draft')); ?>

                                                    </option>
                                                </select>
                                                <?php $__errorArgs = ['visibility_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-end">
                                        <div class="d-flex">
                                            <button type="submit"
                                                    class="btn btn-primary ms-auto"><?php echo e((!empty($seller)) ? __('labels.edit_seller') : __('labels.add_seller')); ?></button>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', ['page' => $menuAdmin['seller_management']['active'] ?? "", 'sub_page' => $menuAdmin['seller_management']['route']['add_sellers']['sub_active'] ?? "" ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/admin/sellers/form.blade.php ENDPATH**/ ?>