

<?php if(\Illuminate\Support\Facades\Session::has('success')): ?>
    <script>
        Swal.fire({
            title: 'Good job!',
            text: "<?php echo e(\Illuminate\Support\Facades\Session::get('success')); ?>",
            icon: 'success',
            customClass: {
                confirmButton: 'btn btn-primary'
            },
            buttonsStyling: false
        });
    </script>
<?php endif; ?>

<?php /**PATH C:\Digital Experts\postman\ASk\resources\views/partials/swal.blade.php ENDPATH**/ ?>