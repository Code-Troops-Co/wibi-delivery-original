<?php $__env->startSection('title', __('labels.authentication_settings')); ?>

<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title = __('labels.authentication_settings');
        $page_pretitle = __('labels.admin') . " " . __('labels.settings');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('admin.dashboard')],
        ['title' => __('labels.settings'), 'url' => route('admin.settings.index')],
        ['title' => __('labels.authentication_settings'), 'url' => null],
    ];
?>

<?php $__env->startSection('admin-content'); ?>
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title"><?php echo e(__('labels.authentication_settings')); ?></h2>
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
    <div class="page-body">
        <div class="container-xl">
            <div class="row g-5">
                <div class="col-sm-2 d-none d-lg-block">
                    <div class="sticky-top">
                        <h3><?php echo e(__('labels.menu')); ?></h3>
                        <nav class="nav nav-vertical nav-pills" id="pills">
                            <a class="nav-link" href="#pills-custom-sms"><?php echo e(__('labels.custom_sms')); ?></a>
                            <a class="nav-link" href="#pills-google-keys"><?php echo e(__('labels.google_keys')); ?></a>
                            <a class="nav-link" href="#pills-firebase"><?php echo e(__('labels.firebase')); ?></a>
                            <a class="nav-link" href="#pills-social-login"><?php echo e(__('labels.social_login')); ?></a>
                        </nav>
                    </div>
                </div>
                <div class="col-sm" data-bs-spy="scroll" data-bs-target="#pills" data-bs-offset="0">
                    <div class="row row-cards">
                        <div class="col-12">
                            <form action="<?php echo e(route('admin.settings.store')); ?>" class="form-submit" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="type" value="authentication">
                                <div class="card mb-4" id="pills-custom-sms">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.custom_sms')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="row">
                                                <span class="col"><?php echo e(__('labels.enable_custom_sms')); ?></span>
                                                <span class="col-auto">
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                   name="customSms" value="1" <?php echo e(isset($settings['customSms']) && $settings['customSms'] ? 'checked' : ''); ?> />
                                                        </label>
                                                    </span>
                                            </label>
                                        </div>
                                        <div id="customSmsFields"
                                             style="<?php echo e(isset($settings['customSms']) && $settings['customSms'] ? 'display: block;' : 'display: none;'); ?>">
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.custom_sms_url')); ?></label>
                                                <input type="url" class="form-control" name="customSmsUrl"
                                                       placeholder="<?php echo e(__('labels.custom_sms_url_placeholder')); ?>"
                                                       value="<?php echo e($settings['customSmsUrl'] ?? ''); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.custom_sms_method')); ?></label>
                                                <select class="form-select" name="customSmsMethod">
                                                    <option
                                                        value="" <?php echo e(!isset($settings['customSmsMethod']) ? 'selected' : ''); ?>><?php echo e(__('labels.custom_sms_method_placeholder')); ?></option>
                                                    <option
                                                        value="GET" <?php echo e(isset($settings['customSmsMethod']) && $settings['customSmsMethod'] === 'GET' ? 'selected' : ''); ?>>
                                                        GET
                                                    </option>
                                                    <option
                                                        value="POST" <?php echo e(isset($settings['customSmsMethod']) && $settings['customSmsMethod'] === 'POST' ? 'selected' : ''); ?>>
                                                        POST
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.custom_sms_token_account_sid')); ?></label>
                                                <input type="text" class="form-control"
                                                       name="customSmsTokenAccountSid"
                                                       placeholder="<?php echo e(__('labels.custom_sms_token_account_sid_placeholder')); ?>"
                                                       value="<?php echo e($settings['customSmsTokenAccountSid'] ?? ''); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.custom_sms_auth_token')); ?></label>
                                                <input type="text" class="form-control" name="customSmsAuthToken"
                                                       placeholder="<?php echo e(__('labels.custom_sms_auth_token_placeholder')); ?>"
                                                       value="<?php echo e($settings['customSmsAuthToken'] ?? ''); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.custom_sms_text_format_data')); ?></label>
                                                <input type="text" class="form-control"
                                                       name="customSmsTextFormatData"
                                                       placeholder="<?php echo e(__('labels.custom_sms_text_format_data_placeholder')); ?>"
                                                       value="<?php echo e($settings['customSmsTextFormatData'] ?? ''); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.custom_sms_header')); ?></label>
                                                <div id="headerFields">
                                                    <?php if(isset($settings['customSmsHeaderKey']) && is_array($settings['customSmsHeaderKey'])): ?>
                                                        <?php $__currentLoopData = $settings['customSmsHeaderKey']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="row mb-2 header-field">
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control"
                                                                           name="customSmsHeaderKey[]"
                                                                           placeholder="<?php echo e(__('labels.custom_sms_header_key_placeholder')); ?>"
                                                                           value="<?php echo e($key); ?>"/>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control"
                                                                           name="customSmsHeaderValue[]"
                                                                           placeholder="<?php echo e(__('labels.custom_sms_header_value_placeholder')); ?>"
                                                                           value="<?php echo e($settings['customSmsHeaderValue'][$index] ?? ''); ?>"/>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <button type="button"
                                                                            class="btn btn-danger btn-sm remove-field">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             class="icon icon-tabler icon-tabler-trash"
                                                                             width="24" height="24"
                                                                             viewBox="0 0 24 24" stroke-width="2"
                                                                             stroke="currentColor" fill="none"
                                                                             stroke-linecap="round"
                                                                             stroke-linejoin="round">
                                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                                  fill="none"/>
                                                                            <path d="M4 7l16 0"/>
                                                                            <path d="M10 11l0 6"/>
                                                                            <path d="M14 11l0 6"/>
                                                                            <path
                                                                                d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"/>
                                                                            <path
                                                                                d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"/>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </div>
                                                <button type="button" class="btn btn-primary mt-2"
                                                        id="addHeaderField">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="icon icon-tabler icon-tabler-plus" width="24"
                                                         height="24" viewBox="0 0 24 24" stroke-width="2"
                                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                                         stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M12 5l0 14"/>
                                                        <path d="M5 12l14 0"/>
                                                    </svg>
                                                    <?php echo e(__('labels.add_header')); ?>

                                                </button>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.custom_sms_params')); ?></label>
                                                <div id="paramsFields">
                                                    <?php if(isset($settings['customSmsParamsKey']) && is_array($settings['customSmsParamsKey'])): ?>
                                                        <?php $__currentLoopData = $settings['customSmsParamsKey']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="row mb-2 params-field">
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control"
                                                                           name="customSmsParamsKey[]"
                                                                           placeholder="<?php echo e(__('labels.custom_sms_params_key_placeholder')); ?>"
                                                                           value="<?php echo e($key); ?>"/>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control"
                                                                           name="customSmsParamsValue[]"
                                                                           placeholder="<?php echo e(__('labels.custom_sms_params_value_placeholder')); ?>"
                                                                           value="<?php echo e($settings['customSmsParamsValue'][$index] ?? ''); ?>"/>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <button type="button"
                                                                            class="btn btn-danger btn-sm remove-field">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             class="icon icon-tabler icon-tabler-trash"
                                                                             width="24" height="24"
                                                                             viewBox="0 0 24 24" stroke-width="2"
                                                                             stroke="currentColor" fill="none"
                                                                             stroke-linecap="round"
                                                                             stroke-linejoin="round">
                                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                                  fill="none"/>
                                                                            <path d="M4 7l16 0"/>
                                                                            <path d="M10 11l0 6"/>
                                                                            <path d="M14 11l0 6"/>
                                                                            <path
                                                                                d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"/>
                                                                            <path
                                                                                d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"/>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </div>
                                                <button type="button" class="btn btn-primary mt-2"
                                                        id="addParamsField">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="icon icon-tabler icon-tabler-plus" width="24"
                                                         height="24" viewBox="0 0 24 24" stroke-width="2"
                                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                                         stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M12 5l0 14"/>
                                                        <path d="M5 12l14 0"/>
                                                    </svg>
                                                    <?php echo e(__('labels.add_param')); ?>

                                                </button>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.custom_sms_body')); ?></label>
                                                <div id="bodyFields">
                                                    <?php if(isset($settings['customSmsBodyKey']) && is_array($settings['customSmsBodyKey'])): ?>
                                                        <?php $__currentLoopData = $settings['customSmsBodyKey']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="row mb-2 body-field">
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control"
                                                                           name="customSmsBodyKey[]"
                                                                           placeholder="<?php echo e(__('labels.custom_sms_body_key_placeholder')); ?>"
                                                                           value="<?php echo e($key); ?>"/>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control"
                                                                           name="customSmsBodyValue[]"
                                                                           placeholder="<?php echo e(__('labels.custom_sms_body_value_placeholder')); ?>"
                                                                           value="<?php echo e($settings['customSmsBodyValue'][$index] ?? ''); ?>"/>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <button type="button"
                                                                            class="btn btn-danger btn-sm remove-field">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             class="icon icon-tabler icon-tabler-trash"
                                                                             width="24" height="24"
                                                                             viewBox="0 0 24 24" stroke-width="2"
                                                                             stroke="currentColor" fill="none"
                                                                             stroke-linecap="round"
                                                                             stroke-linejoin="round">
                                                                            <path stroke="none" d="M0 0h24v24H0z"
                                                                                  fill="none"/>
                                                                            <path d="M4 7l16 0"/>
                                                                            <path d="M10 11l0 6"/>
                                                                            <path d="M14 11l0 6"/>
                                                                            <path
                                                                                d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"/>
                                                                            <path
                                                                                d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"/>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </div>
                                                <button type="button" class="btn btn-primary mt-2"
                                                        id="addBodyField">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="icon icon-tabler icon-tabler-plus" width="24"
                                                         height="24" viewBox="0 0 24 24" stroke-width="2"
                                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                                         stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M12 5l0 14"/>
                                                        <path d="M5 12l14 0"/>
                                                    </svg>
                                                    <?php echo e(__('labels.add_body')); ?>

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4" id="pills-google-keys">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.google_recaptcha')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.google_recaptcha_site_key')); ?></label>
                                            <input type="text" class="form-control" name="googleRecaptchaSiteKey"
                                                   placeholder="<?php echo e(__('labels.google_recaptcha_site_key_placeholder')); ?>"
                                                   value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['googleRecaptchaSiteKey'] ?? '****'), '****', 3, 8) : ($settings['googleRecaptchaSiteKey'] ?? '')); ?>"/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.google_api_key')); ?></label>
                                            <input type="text" class="form-control" name="googleApiKey"
                                                   placeholder="<?php echo e(__('labels.enter_google_api_key')); ?>"
                                                   value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['googleApiKey'] ?? '****'), '****', 3, 8) : ($settings['googleApiKey'] ?? '')); ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4" id="pills-firebase">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.firebase')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="row">
                                                <span class="col"><?php echo e(__('labels.enable_firebase')); ?></span>
                                                <span class="col-auto">
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                   name="firebase" value="1" <?php echo e(isset($settings['firebase']) && $settings['firebase'] ? 'checked' : ''); ?> />
                                                        </label>
                                                    </span>
                                            </label>
                                        </div>
                                        <div id="firebaseFields"
                                             style="<?php echo e(isset($settings['firebase']) && $settings['firebase'] ? 'display: block;' : 'display: none;'); ?>">
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.firebase_api_key')); ?></label>
                                                <input type="text" class="form-control" name="fireBaseApiKey"
                                                       placeholder="<?php echo e(__('labels.firebase_api_key_placeholder')); ?>"
                                                       value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['fireBaseApiKey'] ?? '****'), '****', 3, 8) : ($settings['fireBaseApiKey'] ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.firebase_auth_domain')); ?></label>
                                                <input type="text" class="form-control" name="fireBaseAuthDomain"
                                                       placeholder="<?php echo e(__('labels.firebase_auth_domain_placeholder')); ?>"
                                                       value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['fireBaseAuthDomain'] ?? '****'), '****', 3, 8) : ($settings['fireBaseAuthDomain'] ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.firebase_database_url')); ?></label>
                                                <input type="url" class="form-control" name="fireBaseDatabaseURL"
                                                       placeholder="<?php echo e(__('labels.firebase_database_url_placeholder')); ?>"
                                                       value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['fireBaseDatabaseURL'] ?? '****'), '****', 3, 8) : ($settings['fireBaseDatabaseURL'] ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.firebase_project_id')); ?></label>
                                                <input type="text" class="form-control" name="fireBaseProjectId"
                                                       placeholder="<?php echo e(__('labels.firebase_project_id_placeholder')); ?>"
                                                       value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['fireBaseProjectId'] ?? '****'), '****', 3, 8) : ($settings['fireBaseProjectId'] ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.firebase_storage_bucket')); ?></label>
                                                <input type="text" class="form-control" name="fireBaseStorageBucket"
                                                       placeholder="<?php echo e(__('labels.firebase_storage_bucket_placeholder')); ?>"
                                                       value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['fireBaseStorageBucket'] ?? '****'), '****', 3, 8) : ($settings['fireBaseStorageBucket'] ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.firebase_messaging_sender_id')); ?></label>
                                                <input type="text" class="form-control"
                                                       name="fireBaseMessagingSenderId"
                                                       placeholder="<?php echo e(__('labels.firebase_messaging_sender_id_placeholder')); ?>"
                                                       value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['fireBaseMessagingSenderId'] ?? '****'), '****', 3, 8) : ($settings['fireBaseMessagingSenderId'] ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.firebase_app_id')); ?></label>
                                                <input type="text" class="form-control" name="fireBaseAppId"
                                                       placeholder="<?php echo e(__('labels.firebase_app_id_placeholder')); ?>"
                                                       value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['fireBaseAppId'] ?? '****'), '****', 3, 8) : ($settings['fireBaseAppId'] ?? '')); ?>"/>
                                            </div>
                                            <div class="mb-3">
                                                <label
                                                    class="form-label required"><?php echo e(__('labels.firebase_measurement_id')); ?></label>
                                                <input type="text" class="form-control" name="fireBaseMeasurementId"
                                                       placeholder="<?php echo e(__('labels.firebase_measurement_id_placeholder')); ?>"
                                                       value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['fireBaseMeasurementId'] ?? '****'), '****', 3, 8) : ($settings['fireBaseMeasurementId'] ?? '')); ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4" id="pills-social-login">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.social_login')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="row">
                                                <span class="col"><?php echo e(__('labels.apple_login')); ?></span>
                                                <span class="col-auto">
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                   name="appleLogin" value="1" <?php echo e(isset($settings['appleLogin']) && $settings['appleLogin'] ? 'checked' : ''); ?> />
                                                        </label>
                                                    </span>
                                            </label>
                                        </div>
                                        <div class="mb-3">
                                            <label class="row">
                                                <span class="col"><?php echo e(__('labels.google_login')); ?></span>
                                                <span class="col-auto">
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                   name="googleLogin" value="1" <?php echo e(isset($settings['googleLogin']) && $settings['googleLogin'] ? 'checked' : ''); ?> />
                                                        </label>
                                                    </span>
                                            </label>
                                        </div>











                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <div class="d-flex">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('updateSetting', [\App\Models\Setting::class, 'authentication'])): ?>
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
    <script>
        function addField(containerId, keyName, valueName, keyPlaceholder, valuePlaceholder) {
            const container = document.getElementById(containerId);
            const fieldDiv = document.createElement('div');
            fieldDiv.className = 'row mb-2 ' + containerId.replace('Fields', '') + '-field';
            fieldDiv.innerHTML = `
                <div class="col-md-5">
                    <input type="text" class="form-control" name="${keyName}[]" placeholder="${keyPlaceholder}" />
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="${valueName}[]" placeholder="${valuePlaceholder}" />
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger btn-sm remove-field">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M4 7l16 0" />
                            <path d="M10 11l0 6" />
                            <path d="M14 11l0 6" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg>
                    </button>
                </div>
            `;
            container.appendChild(fieldDiv);
        }

        document.getElementById('addHeaderField').addEventListener('click', () => {
            addField('headerFields', 'customSmsHeaderKey', 'customSmsHeaderValue', '<?php echo e(__('labels.custom_sms_header_key_placeholder')); ?>', '<?php echo e(__('labels.custom_sms_header_value_placeholder')); ?>');
        });

        document.getElementById('addParamsField').addEventListener('click', () => {
            addField('paramsFields', 'customSmsParamsKey', 'customSmsParamsValue', '<?php echo e(__('labels.custom_sms_params_key_placeholder')); ?>', '<?php echo e(__('labels.custom_sms_params_value_placeholder')); ?>');
        });

        document.getElementById('addBodyField').addEventListener('click', () => {
            addField('bodyFields', 'customSmsBodyKey', 'customSmsBodyValue', '<?php echo e(__('labels.custom_sms_body_key_placeholder')); ?>', '<?php echo e(__('labels.custom_sms_body_value_placeholder')); ?>');
        });

        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('remove-field') || e.target.closest('.remove-field')) {
                e.target.closest('.row').remove();
            }
        });

        const customSmsToggle = document.querySelector('input[name="customSms"]');
        const customSmsFields = document.getElementById('customSmsFields');
        const firebaseToggle = document.querySelector('input[name="firebase"]');
        const firebaseFields = document.getElementById('firebaseFields');

        const toggleCustomSmsFields = () => {
            customSmsFields.style.display = customSmsToggle.checked ? 'block' : 'none';
        };
        const toggleFirebaseFields = () => {
            firebaseFields.style.display = firebaseToggle.checked ? 'block' : 'none';
        };

        customSmsToggle.addEventListener('change', toggleCustomSmsFields);
        firebaseToggle.addEventListener('change', toggleFirebaseFields);
        toggleCustomSmsFields();
        toggleFirebaseFields();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', ['page' => $menuAdmin['settings']['active'] ?? "", 'sub_page' => $menuAdmin['settings']['route']['authentication']['sub_active'] ?? "" ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/admin/settings/authentication.blade.php ENDPATH**/ ?>