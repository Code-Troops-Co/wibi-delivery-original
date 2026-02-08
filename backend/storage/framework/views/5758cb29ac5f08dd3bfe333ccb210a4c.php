<?php use App\Enums\PoliciesEnum; ?>


<?php $__env->startSection('title', __('labels.web_settings')); ?>

<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title = __('labels.web_settings');
        $page_pretitle = __('labels.admin') . " " . __('labels.settings');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('admin.dashboard')],
        ['title' => __('labels.settings'), 'url' => route('admin.settings.index')],
        ['title' => __('labels.web_settings'), 'url' => null],
    ];
?>

<?php $__env->startSection('admin-content'); ?>
    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title"><?php echo e(__('labels.web_settings')); ?></h2>
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
                            <a class="nav-link" href="#pills-default-location"><?php echo e(__('labels.default_location')); ?></a>
                            <a class="nav-link"
                               href="#pills-country-validation"><?php echo e(__('labels.country_validation')); ?></a>
                            <a class="nav-link"
                               href="#pills-support"><?php echo e(__('labels.support_information')); ?></a>
                            <a class="nav-link" href="#pills-seo"><?php echo e(__('labels.seo_settings')); ?></a>
                            <a class="nav-link" href="#pills-social"><?php echo e(__('labels.social_media')); ?></a>
                            <a class="nav-link" href="#pills-app"><?php echo e(__('labels.app_download_section')); ?></a>
                            <a class="nav-link" href="#pills-features"><?php echo e(__('labels.feature_sections')); ?></a>
                            <a class="nav-link" href="#pills-policies"><?php echo e(__('labels.policy_settings')); ?></a>
                            <a class="nav-link" href="#pills-pwa-manifest"><?php echo e(__('labels.pwa_manifest_settings')); ?></a>
                            <a class="nav-link" href="#pills-scripts"><?php echo e(__('labels.scripts')); ?></a>
                        </nav>
                    </div>
                </div>
                <div class="col-sm" data-bs-spy="scroll" data-bs-target="#pills" data-bs-offset="0">
                    <div class="row row-cards">
                        <div class="col-12">
                            <form action="<?php echo e(route('admin.settings.store')); ?>" class="form-submit" method="post"
                                  enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="type" value="web">
                                <div class="card mb-4" id="pills-general">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.general')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.site_name')); ?></label>
                                            <input type="text" class="form-control" name="siteName"
                                                   placeholder="<?php echo e(__('labels.site_name_placeholder')); ?>"
                                                   value="<?php echo e($settings['siteName'] ?? ''); ?>" maxlength="255"
                                                   required/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.site_copyright')); ?></label>
                                            <input type="text" class="form-control" name="siteCopyright"
                                                   placeholder="<?php echo e(__('labels.site_copyright_placeholder')); ?>"
                                                   value="<?php echo e($settings['siteCopyright'] ?? ''); ?>" maxlength="255"
                                                   required/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.address')); ?></label>
                                            <input type="text" class="form-control" name="address"
                                                   placeholder="<?php echo e(__('labels.address_placeholder')); ?>"
                                                   value="<?php echo e($settings['address'] ?? ''); ?>" maxlength="255"
                                                   required/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.short_description')); ?></label>
                                            <textarea class="form-control" name="shortDescription"
                                                      placeholder="<?php echo e(__('labels.short_description_placeholder')); ?>"
                                                      maxlength="500"
                                                      required><?php echo e($settings['shortDescription'] ?? ''); ?></textarea>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <div
                                                        class="form-label required"><?php echo e(__('labels.site_header_logo')); ?></div>
                                                    <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'siteHeaderLogo','imageUrl' => ''.e($settings['siteHeaderLogo'] ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'siteHeaderLogo','imageUrl' => ''.e($settings['siteHeaderLogo'] ?? '').'']); ?>
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
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <div
                                                        class="form-label required"><?php echo e(__('labels.site_header_dark_logo')); ?></div>
                                                    <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'siteHeaderDarkLogo','imageUrl' => ''.e($settings['siteHeaderDarkLogo'] ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'siteHeaderDarkLogo','imageUrl' => ''.e($settings['siteHeaderDarkLogo'] ?? '').'']); ?>
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
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <div
                                                        class="form-label required"><?php echo e(__('labels.site_footer_logo')); ?></div>
                                                    <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'siteFooterLogo','imageUrl' => ''.e($settings['siteFooterLogo'] ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'siteFooterLogo','imageUrl' => ''.e($settings['siteFooterLogo'] ?? '').'']); ?>
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
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <div
                                                        class="form-label required"><?php echo e(__('labels.site_favicon')); ?></div>
                                                    <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'siteFavicon','imageUrl' => ''.e($settings['siteFavicon'] ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'siteFavicon','imageUrl' => ''.e($settings['siteFavicon'] ?? '').'']); ?>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Default Location Section -->
                                <div class="card mb-4" id="pills-default-location">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.default_location')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.default_location')); ?></label>
                                            <div class="position-relative">
                                                <!-- Search field will be positioned inside the map -->
                                                <div id="place-autocomplete-card"
                                                     style="position: absolute; top: 10px; left: 10px; z-index: 1000; ">
                                                    <!-- This will be populated by JavaScript -->
                                                </div>
                                                <div id="default-location-map"
                                                     style="height: 400px; width: 100%;"></div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label
                                                        class="form-label required"><?php echo e(__('labels.latitude')); ?></label>
                                                    <input type="number" class="form-control" id="default-latitude"
                                                           name="defaultLatitude" step="any"
                                                           placeholder="<?php echo e(__('labels.latitude_placeholder')); ?>"
                                                           value="<?php echo e($settings['defaultLatitude'] ?? ''); ?>" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label
                                                        class="form-label required"><?php echo e(__('labels.longitude')); ?></label>
                                                    <input type="number" class="form-control" id="default-longitude"
                                                           name="defaultLongitude" step="any"
                                                           placeholder="<?php echo e(__('labels.longitude_placeholder')); ?>"
                                                           value="<?php echo e($settings['defaultLongitude'] ?? ''); ?>" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Country Validation Section -->
                                <div class="card mb-4" id="pills-country-validation">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.country_validation')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="row">
                                                <span class="col"><?php echo e(__('labels.enable_country_validation')); ?></span>
                                                <span class="col-auto">
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                   name="enableCountryValidation" value="1"
                                                                   <?php echo e(isset($settings['enableCountryValidation']) && $settings['enableCountryValidation'] ? 'checked' : ''); ?> />
                                                        </label>
                                                    </span>
                                            </label>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.allowed_countries')); ?></label>
                                            <select class="form-select" id="select-countries" name="allowedCountries[]"
                                                    multiple placeholder="<?php echo e(__('labels.select_countries')); ?>">
                                            </select>
                                            <input type="hidden" id="selected-country"
                                                   value='<?php echo json_encode($settings['allowedCountries'] ?? "", 15, 512) ?>'>
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
                                                class="form-label required"><?php echo e(__('labels.support_email')); ?></label>
                                            <input type="email" class="form-control" name="supportEmail"
                                                   placeholder="<?php echo e(__('labels.support_email_placeholder')); ?>"
                                                   value="<?php echo e($settings['supportEmail'] ?? ''); ?>" maxlength="255"
                                                   required/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.support_number')); ?></label>
                                            <input type="tel" class="form-control" name="supportNumber"
                                                   placeholder="<?php echo e(__('labels.support_number_placeholder')); ?>"
                                                   value="<?php echo e($settings['supportNumber'] ?? ''); ?>" maxlength="20"
                                                   required/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.google_map_key')); ?></label>
                                            <input type="text" class="form-control" name="googleMapKey"
                                                   placeholder="<?php echo e(__('labels.google_map_key_placeholder')); ?>"
                                                   value="<?php echo e(($systemSettings['demoMode'] ?? false) ? Str::mask(($settings['googleMapKey'] ?? '****'), '****', 3, 8) : ($settings['googleMapKey'] ?? '')); ?>" maxlength="255"/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.map_iframe')); ?></label>
                                            <textarea class="form-control" name="mapIframe"
                                                      placeholder="<?php echo e(__('labels.map_iframe_placeholder')); ?>"><?php echo e($settings['mapIframe'] ?? ''); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4" id="pills-seo">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.seo_settings')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.meta_keywords')); ?></label>
                                            <input type="text" class="form-control" name="metaKeywords"
                                                   placeholder="<?php echo e(__('labels.meta_keywords_placeholder')); ?>"
                                                   value="<?php echo e($settings['metaKeywords'] ?? ''); ?>" maxlength="255"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.meta_description')); ?></label>
                                            <textarea class="form-control" name="metaDescription"
                                                      placeholder="<?php echo e(__('labels.meta_description_placeholder')); ?>"
                                                      maxlength="500"><?php echo e($settings['metaDescription'] ?? ''); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4" id="pills-social">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.social_media')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.facebook_link')); ?></label>
                                            <input type="text" class="form-control" name="facebookLink"
                                                   placeholder="<?php echo e(__('labels.facebook_link_placeholder')); ?>"
                                                   value="<?php echo e($settings['facebookLink'] ?? ''); ?>" maxlength="255"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.instagram_link')); ?></label>
                                            <input type="text" class="form-control" name="instagramLink"
                                                   placeholder="<?php echo e(__('labels.instagram_link_placeholder')); ?>"
                                                   value="<?php echo e($settings['instagramLink'] ?? ''); ?>" maxlength="255"/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.x_link')); ?></label>
                                            <input type="text" class="form-control" name="xLink"
                                                   placeholder="<?php echo e(__('labels.x_link_placeholder')); ?>"
                                                   value="<?php echo e($settings['xLink'] ?? ''); ?>" maxlength="255"/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.youtube_link')); ?></label>
                                            <input type="text" class="form-control" name="youtubeLink"
                                                   placeholder="<?php echo e(__('labels.youtube_link_placeholder')); ?>"
                                                   value="<?php echo e($settings['youtubeLink'] ?? ''); ?>" maxlength="255"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4" id="pills-app">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.app_download_section')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="row">
                                                    <span
                                                        class="col"><?php echo e(__('labels.app_download_section')); ?></span>
                                                <span class="col-auto">
                                                        <label class="form-check form-check-single form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                   name="appDownloadSection" value="1" <?php echo e(isset($settings['appDownloadSection']) && $settings['appDownloadSection'] ? 'checked' : ''); ?> />
                                                        </label>
                                                    </span>
                                            </label>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.app_section_title')); ?></label>
                                            <input type="text" class="form-control" name="appSectionTitle"
                                                   placeholder="<?php echo e(__('labels.app_section_title_placeholder')); ?>"
                                                   value="<?php echo e($settings['appSectionTitle'] ?? ''); ?>"
                                                   maxlength="255"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.app_section_tagline')); ?></label>
                                            <input type="text" class="form-control" name="appSectionTagline"
                                                   placeholder="<?php echo e(__('labels.app_section_tagline_placeholder')); ?>"
                                                   value="<?php echo e($settings['appSectionTagline'] ?? ''); ?>"
                                                   maxlength="255"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.app_section_playstore_link')); ?></label>
                                            <input type="url" class="form-control" name="appSectionPlaystoreLink"
                                                   placeholder="<?php echo e(__('labels.app_section_playstore_link_placeholder')); ?>"
                                                   value="<?php echo e($settings['appSectionPlaystoreLink'] ?? ''); ?>"
                                                   maxlength="255"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.app_section_appstore_link')); ?></label>
                                            <input type="url" class="form-control" name="appSectionAppstoreLink"
                                                   placeholder="<?php echo e(__('labels.app_section_appstore_link_placeholder')); ?>"
                                                   value="<?php echo e($settings['appSectionAppstoreLink'] ?? ''); ?>"
                                                   maxlength="255"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.app_section_short_description')); ?></label>
                                            <textarea class="form-control" name="appSectionShortDescription"
                                                      placeholder="<?php echo e(__('labels.app_section_short_description_placeholder')); ?>"
                                                      maxlength="500"><?php echo e($settings['appSectionShortDescription'] ?? ''); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4" id="pills-features">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.feature_sections')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.shipping_feature_section')); ?></label>
                                            <input type="text" class="form-control" name="shippingFeatureSection"
                                                   placeholder="<?php echo e(__('labels.shipping_feature_section_placeholder')); ?>"
                                                   value="<?php echo e($settings['shippingFeatureSection'] ?? ''); ?>"
                                                   maxlength="255"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.shipping_feature_section_title')); ?></label>
                                            <input type="text" class="form-control"
                                                   name="shippingFeatureSectionTitle"
                                                   placeholder="<?php echo e(__('labels.shipping_feature_section_title_placeholder')); ?>"
                                                   value="<?php echo e($settings['shippingFeatureSectionTitle'] ?? ''); ?>"
                                                   maxlength="255"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.shipping_feature_section_description')); ?></label>
                                            <textarea class="form-control" name="shippingFeatureSectionDescription"
                                                      placeholder="<?php echo e(__('labels.shipping_feature_section_description_placeholder')); ?>"
                                                      maxlength="500"><?php echo e($settings['shippingFeatureSectionDescription'] ?? ''); ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.return_feature_section')); ?></label>
                                            <input type="text" class="form-control" name="returnFeatureSection"
                                                   placeholder="<?php echo e(__('labels.return_feature_section_placeholder')); ?>"
                                                   value="<?php echo e($settings['returnFeatureSection'] ?? ''); ?>"
                                                   maxlength="255"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.return_feature_section_title')); ?></label>
                                            <input type="text" class="form-control" name="returnFeatureSectionTitle"
                                                   placeholder="<?php echo e(__('labels.return_feature_section_title_placeholder')); ?>"
                                                   value="<?php echo e($settings['returnFeatureSectionTitle'] ?? ''); ?>"
                                                   maxlength="255"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.return_feature_section_description')); ?></label>
                                            <textarea class="form-control" name="returnFeatureSectionDescription"
                                                      placeholder="<?php echo e(__('labels.return_feature_section_description_placeholder')); ?>"
                                                      maxlength="500"><?php echo e($settings['returnFeatureSectionDescription'] ?? ''); ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.safety_security_feature_section')); ?></label>
                                            <input type="text" class="form-control"
                                                   name="safetySecurityFeatureSection"
                                                   placeholder="<?php echo e(__('labels.safety_security_feature_section_placeholder')); ?>"
                                                   value="<?php echo e($settings['safetySecurityFeatureSection'] ?? ''); ?>"
                                                   maxlength="255"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.safety_security_feature_section_title')); ?></label>
                                            <input type="text" class="form-control"
                                                   name="safetySecurityFeatureSectionTitle"
                                                   placeholder="<?php echo e(__('labels.safety_security_feature_section_title_placeholder')); ?>"
                                                   value="<?php echo e($settings['safetySecurityFeatureSectionTitle'] ?? ''); ?>"
                                                   maxlength="255"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.safety_security_feature_section_description')); ?></label>
                                            <textarea class="form-control"
                                                      name="safetySecurityFeatureSectionDescription"
                                                      placeholder="<?php echo e(__('labels.safety_security_feature_section_description_placeholder')); ?>"
                                                      maxlength="500"><?php echo e($settings['safetySecurityFeatureSectionDescription'] ?? ''); ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.support_feature_section')); ?></label>
                                            <input type="text" class="form-control" name="supportFeatureSection"
                                                   placeholder="<?php echo e(__('labels.support_feature_section_placeholder')); ?>"
                                                   value="<?php echo e($settings['supportFeatureSection'] ?? ''); ?>"
                                                   maxlength="255"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.support_feature_section_title')); ?></label>
                                            <input type="text" class="form-control"
                                                   name="supportFeatureSectionTitle"
                                                   placeholder="<?php echo e(__('labels.support_feature_section_title_placeholder')); ?>"
                                                   value="<?php echo e($settings['supportFeatureSectionTitle'] ?? ''); ?>"
                                                   maxlength="255"/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label"><?php echo e(__('labels.support_feature_section_description')); ?></label>
                                            <textarea class="form-control" name="supportFeatureSectionDescription"
                                                      placeholder="<?php echo e(__('labels.support_feature_section_description_placeholder')); ?>"
                                                      maxlength="500"><?php echo e($settings['supportFeatureSectionDescription'] ?? ''); ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Policy Settings Section -->
                                <div class="card mb-4" id="pills-policies">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.policy_settings')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.return_refund_policy')); ?>

                                                <a href="<?php echo e(route('policies.show', PoliciesEnum::REFUND_AND_RETURN())); ?>"
                                                   target="_blank">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"/>
                                                        <path
                                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"/>
                                                    </svg>
                                                </a>
                                            </label>
                                            <textarea class="hugerte-mytextarea" name="returnRefundPolicy" rows="8"
                                                      placeholder="<?php echo e(__('labels.return_refund_policy_placeholder')); ?>"><?php echo e($settings['returnRefundPolicy'] ?? ''); ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.shipping_policy')); ?>

                                                <a href="<?php echo e(route('policies.show', PoliciesEnum::SHIPPING())); ?>"
                                                   target="_blank">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"/>
                                                        <path
                                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"/>
                                                    </svg>
                                                </a></label>
                                            <textarea class="hugerte-mytextarea" name="shippingPolicy" rows="8"
                                                      placeholder="<?php echo e(__('labels.shipping_policy_placeholder')); ?>"><?php echo e($settings['shippingPolicy'] ?? ''); ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.privacy_policy')); ?>

                                                <a href="<?php echo e(route('policies.show', PoliciesEnum::PRIVACY())); ?>"
                                                   target="_blank">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"/>
                                                        <path
                                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"/>
                                                    </svg>
                                                </a></label>
                                            <textarea class="hugerte-mytextarea" name="privacyPolicy" rows="8"
                                                      placeholder="<?php echo e(__('labels.privacy_policy_placeholder')); ?>"><?php echo e($settings['privacyPolicy'] ?? ''); ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.terms_condition')); ?>

                                                <a href="<?php echo e(route('policies.show', PoliciesEnum::TERMS())); ?>"
                                                   target="_blank">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"/>
                                                        <path
                                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"/>
                                                    </svg>
                                                </a></label>
                                            <textarea class="hugerte-mytextarea" name="termsCondition" rows="8"
                                                      placeholder="<?php echo e(__('labels.terms_condition_placeholder')); ?>"><?php echo e($settings['termsCondition'] ?? ''); ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.about_us')); ?></label>
                                            <textarea class="hugerte-mytextarea" name="aboutUs" rows="8"
                                                      placeholder="<?php echo e(__('labels.about_us_placeholder')); ?>"><?php echo e($settings['aboutUs'] ?? ''); ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- PWA Manifest Settings Section -->
                                <div class="card mb-4" id="pills-pwa-manifest">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.pwa_manifest_settings')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label required"><?php echo e(__('labels.pwa_name')); ?></label>
                                            <input type="text" class="form-control" name="pwaName"
                                                   placeholder="<?php echo e(__('labels.pwa_name_placeholder')); ?>"
                                                   value="<?php echo e($settings['pwaName'] ?? ''); ?>" maxlength="255" required/>
                                        </div>
                                        <div class="mb-3">
                                            <label
                                                class="form-label required"><?php echo e(__('labels.pwa_description')); ?></label>
                                            <textarea class="form-control" name="pwaDescription"
                                                      placeholder="<?php echo e(__('labels.pwa_description_placeholder')); ?>"
                                                      maxlength="500"
                                                      required><?php echo e($settings['pwaDescription'] ?? ''); ?></textarea>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <div
                                                        class="form-label required"><?php echo e(__('labels.pwa_logo_192x192')); ?></div>
                                                    <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'pwaLogo192x192','imageUrl' => ''.e($settings['pwaLogo192x192'] ?? '').'','dataAcceptedFileTypes' => 'image/png,image/jpeg,image/webp','dataMaxFileSize' => '2MB','dataImageCropAspectRatio' => '1:1','dataImageResizeTargetWidth' => '192','dataImageResizeTargetHeight' => '192']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'pwaLogo192x192','imageUrl' => ''.e($settings['pwaLogo192x192'] ?? '').'','data-accepted-file-types' => 'image/png,image/jpeg,image/webp','data-max-file-size' => '2MB','data-image-crop-aspect-ratio' => '1:1','data-image-resize-target-width' => '192','data-image-resize-target-height' => '192']); ?>
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
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <div
                                                        class="form-label required"><?php echo e(__('labels.pwa_logo_512x512')); ?></div>
                                                    <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'pwaLogo512x512','imageUrl' => ''.e($settings['pwaLogo512x512'] ?? '').'','dataAcceptedFileTypes' => 'image/png,image/jpeg,image/webp','dataMaxFileSize' => '2MB','dataImageCropAspectRatio' => '1:1','dataImageResizeTargetWidth' => '512','dataImageResizeTargetHeight' => '512']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'pwaLogo512x512','imageUrl' => ''.e($settings['pwaLogo512x512'] ?? '').'','data-accepted-file-types' => 'image/png,image/jpeg,image/webp','data-max-file-size' => '2MB','data-image-crop-aspect-ratio' => '1:1','data-image-resize-target-width' => '512','data-image-resize-target-height' => '512']); ?>
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
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <div
                                                        class="form-label required"><?php echo e(__('labels.pwa_logo_144x144')); ?></div>
                                                    <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'pwaLogo144x144','imageUrl' => ''.e($settings['pwaLogo144x144'] ?? '').'','dataAcceptedFileTypes' => 'image/png,image/jpeg,image/webp','dataMaxFileSize' => '2MB','dataImageCropAspectRatio' => '1:1','dataImageResizeTargetWidth' => '144','dataImageResizeTargetHeight' => '144']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'pwaLogo144x144','imageUrl' => ''.e($settings['pwaLogo144x144'] ?? '').'','data-accepted-file-types' => 'image/png,image/jpeg,image/webp','data-max-file-size' => '2MB','data-image-crop-aspect-ratio' => '1:1','data-image-resize-target-width' => '144','data-image-resize-target-height' => '144']); ?>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-4" id="pills-scripts">
                                    <div class="card-header">
                                        <h4 class="card-title"><?php echo e(__('labels.scripts')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.header_script')); ?></label>
                                            <textarea class="form-control" name="headerScript"
                                                      placeholder="<?php echo e(__('labels.header_script_placeholder')); ?>"><?php echo e($settings['headerScript'] ?? ''); ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"><?php echo e(__('labels.footer_script')); ?></label>
                                            <textarea class="form-control" name="footerScript"
                                                      placeholder="<?php echo e(__('labels.footer_script_placeholder')); ?>"><?php echo e($settings['footerScript'] ?? ''); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <div class="d-flex">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('updateSetting', [\App\Models\Setting::class, 'web'])): ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script async defer>(g => {
            var h, a, k, p = "The Google Maps JavaScript API", c = "google", l = "importLibrary", q = "__ib__",
                m = document, b = window;
            b = b[c] || (b[c] = {});
            var d = b.maps || (b.maps = {}), r = new Set, e = new URLSearchParams,
                u = () => h || (h = new Promise(async (f, n) => {
                    await (a = m.createElement("script"));
                    e.set("libraries", [...r] + "");
                    for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                    e.set("callback", c + ".maps." + q);
                    a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                    d[q] = f;
                    a.onerror = () => h = n(Error(p + " could not load."));
                    a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                    m.head.append(a)
                }));
            d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
        })
        ({key: "<?php echo e($settings['googleMapKey']); ?>", v: "weekly"});</script>
    <script src="<?php echo e(hyperAsset('assets/js/settings.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.app', ['page' => $menuAdmin['settings']['active'] ?? "", 'sub_page' => $menuAdmin['settings']['route']['web']['sub_active'] ?? "" ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/admin/settings/web.blade.php ENDPATH**/ ?>