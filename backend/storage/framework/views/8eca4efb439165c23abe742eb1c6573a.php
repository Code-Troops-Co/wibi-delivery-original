<?php use App\Enums\FeaturedSection\FeaturedSectionStyleEnum;use App\Enums\FeaturedSection\FeaturedSectionTypeEnum;use App\Enums\HomePageScopeEnum;use Illuminate\Support\Str; ?>


<?php $__env->startSection('title', __('labels.featured_sections')); ?>
<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title =  __('labels.featured_sections');
        $page_pretitle = __('labels.list');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('admin.dashboard')],
        ['title' =>  __('labels.featured_sections'), 'url' => '']
    ];
?>

<?php $__env->startSection('admin-content'); ?>
    <div class="">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <h3 class="card-title"><?php echo e(__('labels.featured_sections')); ?></h3>
                        </div>
                        <div class="card-actions">
                            <div class="row g-2">
                                <div class="col-auto">
                                    <select class="form-select" id="typeFilter">
                                        <option value=""><?php echo e(__('labels.all_types')); ?></option>
                                        <?php $__currentLoopData = FeaturedSectionTypeEnum::values(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                value="<?php echo e($type); ?>"><?php echo e(ucfirst(Str::replace("_"," ", $type))); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <select class="form-select text-capitalize" id="statusFilter">
                                        <option value=""><?php echo e(__('labels.all_status')); ?></option>
                                        <?php $__currentLoopData = \App\Enums\ActiveInactiveStatusEnum::values(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($value); ?>"><?php echo e($value); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <select class="form-select" id="scopeTypeFilter">
                                        <option value=""><?php echo e(__('labels.all_scopes')); ?></option>
                                        <?php $__currentLoopData = HomePageScopeEnum::values(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scopeType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($scopeType); ?>"><?php echo e(ucfirst($scopeType)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <?php if($createPermission ?? false): ?>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#featured-section-modal">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <line x1="12" y1="5" x2="12" y2="19"/>
                                                <line x1="5" y1="12" x2="19" y2="12"/>
                                            </svg> <?php echo e(__('labels.add_featured_section')); ?>

                                        </button>
                                    <?php endif; ?>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-outline-primary" id="refresh">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="icon icon-tabler icons-tabler-outline icon-tabler-refresh">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"/>
                                            <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"/>
                                        </svg>
                                        <?php echo e(__('labels.refresh')); ?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if (isset($component)) { $__componentOriginale217948d0aa10885800ec2994f6a95b1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale217948d0aa10885800ec2994f6a95b1 = $attributes; } ?>
<?php $component = App\View\Components\Datatable::resolve(['id' => 'featured-table','columns' => $columns,'route' => ''.e(route('admin.featured-sections.datatable')).'','options' => ['order' => [[0, 'desc']],'pageLength' => 10,]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('datatable'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Datatable::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale217948d0aa10885800ec2994f6a95b1)): ?>
<?php $attributes = $__attributesOriginale217948d0aa10885800ec2994f6a95b1; ?>
<?php unset($__attributesOriginale217948d0aa10885800ec2994f6a95b1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale217948d0aa10885800ec2994f6a95b1)): ?>
<?php $component = $__componentOriginale217948d0aa10885800ec2994f6a95b1; ?>
<?php unset($__componentOriginale217948d0aa10885800ec2994f6a95b1); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if(($createPermission ?? false) || ($editPermission ?? false)): ?>
        <!-- Edit Featured Section Modal -->
        <div class="modal fade" id="featured-section-modal" tabindex="-1"
             aria-labelledby="FeaturedSectionModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"
                            id="FeaturedSectionModalLabel"><?php echo e(__('labels.add_featured_section')); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="form-submit" method="POST" action="<?php echo e(route('admin.featured-sections.store')); ?>"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" id="edit_featured_section_id" name="featured_section_id">
                        <div class="modal-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="scope_type"
                                               class="form-label required"><?php echo e(__('labels.scope_type')); ?></label>
                                        <select class="form-select text-capitalize" id="scopeType" name="scope_type">
                                            <?php $__currentLoopData = HomePageScopeEnum::values(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($value); ?>"><?php echo e(Str::replace("_", " ", $value)); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6" id="scopeCategoryField" style="display: none;">
                                    <div class="mb-3">
                                        <label for="scope_id"
                                               class="form-label"><?php echo e(__('labels.scope_category')); ?></label>
                                        <select class="form-select" id="select-root-category" name="scope_id">
                                            <option value=""><?php echo e(__('labels.select_category')); ?></option>
                                            <!-- Categories will be loaded via AJAX -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="title"
                                               class="form-label required"><?php echo e(__('labels.title')); ?></label>
                                        <input type="text" class="form-control" id="title" name="title"
                                               placeholder="<?php echo e(__('labels.enter_featured_section_name')); ?>"
                                               required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="edit_section_type"
                                               class="form-label required"><?php echo e(__('labels.section_type')); ?> </label>
                                        <select class="form-select text-capitalize" id="section_type"
                                                name="section_type">
                                            <option value=""><?php echo e(__('labels.select_section_type')); ?></option>
                                            <?php $__currentLoopData = FeaturedSectionTypeEnum::values(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                    value="<?php echo e($type); ?>"><?php echo e(Str::replace("_", " ", $type)); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="sort_order"
                                               class="form-label"><?php echo e(__('labels.sort_order')); ?></label>
                                        <input type="number" class="form-control" id="sort_order" name="sort_order"
                                               placeholder="<?php echo e(__('labels.enter_sort_order')); ?>" min="0">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="style"
                                               class="form-label required"><?php echo e(__('labels.style')); ?></label>
                                        <select class="form-select text-capitalize" id="style"
                                                name="style">
                                            <option value=""><?php echo e(__('labels.select_section_type')); ?></option>
                                            <?php $__currentLoopData = FeaturedSectionStyleEnum::values(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $style): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                    value="<?php echo e($style); ?>"><?php echo e(Str::replace("_", " ", $style)); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="categories"
                                               class="form-label"><?php echo e(__('labels.categories')); ?></label>
                                        <select class="form-select" id="select-category" name="categories[]"
                                                multiple>
                                            <!-- Categories will be loaded via AJAX -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="short_description"
                                               class="form-label"><?php echo e(__('labels.short_description')); ?></label>
                                        <textarea class="form-control required" id="short_description"
                                                  name="short_description" rows="3"
                                                  placeholder="<?php echo e(__('labels.short_description')); ?>"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="background_type"
                                               class="form-label"><?php echo e(__('labels.background_type')); ?></label>
                                        <select class="form-select" id="background_type" name="background_type">
                                            <option value=""><?php echo e(__('labels.select_background_type')); ?></option>
                                            <option value="image"><?php echo e(__('labels.image')); ?></option>
                                            <option value="color"><?php echo e(__('labels.color')); ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6" id="background-color-field" style="display: none;">
                                    <div class="mb-3">
                                        <label for="background_color"
                                               class="form-label"><?php echo e(__('labels.background_color')); ?></label>
                                        <input type="color" class="form-control form-control-color w-100"
                                               id="background_color"
                                               name="background_color" placeholder="#ffffff">
                                    </div>
                                </div>
                                <div class="col-md-6" id="text-color-field">
                                    <div class="mb-3">
                                        <label for="text_color"
                                               class="form-label"><?php echo e(__('labels.text_color')); ?></label>
                                        <input type="color" class="form-control form-control-color w-100"
                                               id="text_color"
                                               name="text_color" placeholder="#00000">
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="background-image-field" style="display: none;">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="desktop_4k_background_image"
                                               class="form-label"><?php echo e(__('labels.desktop_4k_background_image')); ?>

                                            (3840x2160)</label>
                                        <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'desktop_4k_background_image','id' => 'desktop_4k_background_image']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'desktop_4k_background_image','id' => 'desktop_4k_background_image']); ?>
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
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="desktop_fdh_background_image"
                                               class="form-label"><?php echo e(__('labels.desktop_fdh_background_image')); ?>

                                            (1920x1080)</label>
                                        <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'desktop_fdh_background_image','id' => 'desktop_fdh_background_image']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'desktop_fdh_background_image','id' => 'desktop_fdh_background_image']); ?>
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
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="tablet_background_image"
                                               class="form-label"><?php echo e(__('labels.tablet_background_image')); ?>

                                            (768x1024)</label>
                                        <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'tablet_background_image','id' => 'tablet_background_image']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'tablet_background_image','id' => 'tablet_background_image']); ?>
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
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="mobile_background_image"
                                               class="form-label"><?php echo e(__('labels.mobile_background_image')); ?>

                                            (375x812)</label>
                                        <?php if (isset($component)) { $__componentOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3b55f62c5ed1c4c593118e6e52a59ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filepond_image','data' => ['name' => 'mobile_background_image','id' => 'mobile_background_image']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filepond_image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'mobile_background_image','id' => 'mobile_background_image']); ?>
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3 form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="status"
                                               id="status-switch"
                                               value="active" checked>
                                        <label class="form-check-label"
                                               for="status-switch"><?php echo e(__('labels.status')); ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal"><?php echo e(__('labels.cancel')); ?></button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> <?php echo e(__('labels.add')); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/featured-section.js')); ?>" defer></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.app', ['page' => $menuAdmin['featured_section']['active'] ?? "", 'sub_page' => $menuAdmin['featured_section']['route']['featured_section']['sub_active'] ?? "" ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/admin/featured-sections/index.blade.php ENDPATH**/ ?>