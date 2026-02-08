<div>
    <input
        type="file"
        class="form-control"
        id="<?php echo e($id ?? $name); ?>"
        name="<?php echo e($name); ?>"
        data-image-url="<?php echo e($imageUrl ?? ''); ?>"
        disabled="<?php echo e($disabled ?? 'false'); ?>"
        multiple="<?php echo e($multiple ?? 'false'); ?>"
    />
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        FilePond.registerPlugin(FilePondPluginImagePreview);
        const input = document.querySelector('[name="<?php echo e($name); ?>"]');
        if (input) {
            let imageUrl = input.getAttribute('data-image-url');
            FilePond.create(input, {
                allowImagePreview: true,
                instantUpload: false,
                acceptedFileTypes: ['image/*'],
                credits: false,
                storeAsFile: true,
                files: imageUrl ? [{
                    source: imageUrl, options: {
                        type: 'remote'
                    }
                }] : []
            });
        }
    });
</script>
<?php /**PATH /var/www/wibi-backend/resources/views/components/filepond_image.blade.php ENDPATH**/ ?>