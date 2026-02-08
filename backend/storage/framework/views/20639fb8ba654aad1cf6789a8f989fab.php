
<!-- include jQuery library -->
<script src="<?php echo e(asset('assets/vendor/axios/axios.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/jquery/jquery.js')); ?>"></script>

<script src="<?php echo e(asset('assets/theme/js/tabler.min.js')); ?>" defer></script>



<!-- include FilePond library -->
<script src="<?php echo e(asset('assets/vendor/filepond/js/filepond.min.js')); ?>"></script>

<!-- include FilePond plugins -->
<script src="<?php echo e(asset('assets/vendor/filepond/js/filepond-plugin-image-preview.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/filepond/js/filepond-plugin-file-validate-type.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/filepond/js/filepond-plugin-file-validate-size.js')); ?>"></script>

<!-- include FilePond jQuery adapter -->
<script src="<?php echo e(asset('assets/vendor/filepond/js/filepond.jquery.js')); ?>" defer></script>
<script src="<?php echo e(hyperAsset('assets/js/filepond.custom.js')); ?>" defer></script>


<script src="<?php echo e(asset('assets/vendor/lightbox/index.js')); ?>"></script>


<script src="<?php echo e(asset('assets/vendor/tom-select/js/tom-select.base.min.js')); ?>" defer></script>


<script src="<?php echo e(asset('assets/vendor/sweetalert/js/sweetalert2.all.min.js')); ?>"></script>


<script src="<?php echo e(asset('assets/vendor/datatable/js/dataTables.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/vendor/datatable/js/dataTables.bootstrap5.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/vendor/datatable/js/dataTables.buttons.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/vendor/datatable/js/buttons.bootstrap5.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/vendor/datatable/js/buttons.colVis.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/vendor/datatable/js/buttons.html5.min.js')); ?>" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>




<script src="<?php echo e(asset('assets/vendor/hugerte/hugerte.min.js')); ?>" defer></script>

<script src="<?php echo e(hyperAsset('assets/js/datatable.custom.js')); ?>" defer></script>
<script src="<?php echo e(hyperAsset('assets/js/custom.js')); ?>" defer></script>
<script type="module" src="<?php echo e(hyperAsset('assets/js/firebase.js')); ?>" defer></script>
<script src="<?php echo e(hyperAsset('assets/admin/js/custom.js')); ?>" defer></script>
<script src="<?php echo e(hyperAsset('assets/seller/js/custom.js')); ?>" defer></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
<script>
    const base_url = document.getElementById('base_url')?.value;
    const user_id = document.getElementById('user_id')?.value;
    const currencySymbol = document.getElementById('selected-currency-symbol')?.value;
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });

    // Theme switching functions
    function getCurrentTheme() {
        // Check localStorage first, then data attribute, fallback to 'light'
        const storedTheme = localStorage.getItem('tabler-theme');
        const dataTheme = document.documentElement.getAttribute('data-bs-theme');
        return storedTheme || dataTheme || 'light';
    }

    function setTheme(theme) {
        // Store in localStorage
        localStorage.setItem('tabler-theme', theme);

        // Update data attribute
        if (theme === 'light') {
            document.documentElement.removeAttribute('data-bs-theme');
        } else {
            document.documentElement.setAttribute('data-bs-theme', theme);
        }

        // Update icon
        updateThemeIcon(theme);
    }

    function updateThemeIcon(theme) {
        const themeIcon = document.getElementById('theme-icon');
        if (themeIcon) {
            if (theme === 'dark') {
                themeIcon.className = 'ti ti-sun fs-2';
            } else {
                themeIcon.className = 'ti ti-moon fs-2';
            }
        }
    }

    function toggleTheme() {
        const currentTheme = getCurrentTheme();
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        setTheme(newTheme);
    }

    // Initialize theme icon on page load
    document.addEventListener('DOMContentLoaded', function() {
        const currentTheme = getCurrentTheme();
        updateThemeIcon(currentTheme);
    });
</script>
<?php /**PATH /var/www/wibi-backend/resources/views/layouts/partials/_scripts.blade.php ENDPATH**/ ?>