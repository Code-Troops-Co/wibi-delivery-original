<?php $__env->startSection('title', __('labels.bulk_upload_categories')); ?>

<?php $__env->startSection('header_data'); ?>
    <?php
        $page_title = __('labels.bulk_upload_categories');
        $page_pretitle = __('labels.categories');
    ?>
<?php $__env->stopSection(); ?>

<?php
    $breadcrumbs = [
        ['title' => __('labels.home'), 'url' => route('admin.dashboard')],
        ['title' => __('labels.categories'), 'url' => route('admin.categories.index')],
        ['title' => __('labels.bulk_upload'), 'url' => null],
    ];
?>

<?php $__env->startPush('scripts'); ?>
<script>
window.BULK_UPLOAD_CFG = {
  uploadUrl: "<?php echo e(route('admin.categories.bulk-upload')); ?>",
  csrf: "<?php echo e(csrf_token()); ?>",
  i18n: {
    upload_success_count: "<?php echo e(__('labels.upload_success_count')); ?>",
    upload_failed_count: "<?php echo e(__('labels.upload_failed_count')); ?>",
    some_rows_failed: "<?php echo e(__('labels.some_rows_failed')); ?>",
    upload_failed_generic: "<?php echo e(__('labels.upload_failed_generic') ?? 'Upload failed'); ?>",
    unexpected_error: "<?php echo e(__('labels.unexpected_error') ?? 'Unexpected error occurred'); ?>"
  }
};
</script>
<script src="<?php echo e(hyperAsset('assets/admin/js/bulk-upload.js')); ?>" defer></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('admin-content'); ?>
<div class="row row-cards">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <div>
          <h3 class="card-title"><?php echo e(__('labels.bulk_upload_categories')); ?></h3>
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
        <div class="card-actions">
            <a href="<?php echo e(route('admin.categories.index')); ?>" class="btn btn-outline-secondary">
                <?php echo e(__('labels.back') ?? 'Back'); ?>

            </a>
        </div>
      </div>
      <div class="card-body">
        <div class="row g-4">
          <div class="col-12">
            <div class="alert alert-info" role="alert">
              <div class="alert-title"><?php echo e(__('labels.instructions') ?? 'Instructions'); ?></div>
              <ul class="mb-2">
                <li><?php echo e(__('labels.bulk_upload_hint') ?? 'Upload a CSV up to 10MB. First row should include headers.'); ?></li>
                <li><?php echo e(__('labels.required_fields') ?? 'Required fields'); ?>: <strong>title</strong></li>
                <li><?php echo e(__('labels.optional_fields') ?? 'Optional fields'); ?>: parent_id, parent_title, description, status, requires_approval, commission, background_type, background_color, font_color</li>
              </ul>
              <a href="<?php echo e(route('admin.categories.bulk-template')); ?>" class="btn btn-outline-primary btn-sm"><?php echo e(__('labels.download_template')); ?></a>
            </div>
          </div>
          <div class="col-12">
            <form id="bulk-upload-form" enctype="multipart/form-data" Method="POST" action="<?php echo e(route('admin.categories.bulk-upload')); ?>">
              <?php echo csrf_field(); ?>
              <label class="form-label"><?php echo e(__('labels.drag_drop_csv') ?? 'Drag & drop CSV here, or click to browse'); ?></label>
              <input id="csv-file" type="file" name="csv-file" accept=".csv,text/csv" class="filepond" required data-max-file-size="10MB" data-allow-reorder="false" data-max-files="1">
              <div class="small text-muted">.csv, max 10MB</div>
              <div class="mt-3 d-flex gap-2">
                <button type="submit" class="btn btn-primary" id="bulk-upload-submit">
                  <span class="upload-text"><?php echo e(__('labels.upload')); ?></span>
                  <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                </button>
                <a href="<?php echo e(route('admin.categories.bulk-template')); ?>" class="btn btn-outline-secondary"><?php echo e(__('labels.download_template')); ?></a>
              </div>
            </form>
          </div>
        </div>

        <div class="mt-4 d-none" id="bulk-upload-result">
          <div class="alert alert-success" id="bulk-success" role="alert"></div>
          <div class="alert alert-danger d-none" id="bulk-failed" role="alert"></div>
          <div class="table-responsive d-none" id="bulk-failed-table-wrap">
            <table class="table table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th><?php echo e(__('labels.title')); ?></th>
                  <th><?php echo e(__('labels.error')); ?></th>
                </tr>
              </thead>
              <tbody id="bulk-failed-tbody"></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', ['page' => $menuAdmin['categories']['active'] ?? ""], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/wibi-backend/resources/views/admin/categories/bulk_upload.blade.php ENDPATH**/ ?>