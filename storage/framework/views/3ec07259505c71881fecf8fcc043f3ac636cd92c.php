<?php if(env('APP_DEBUG', false)): ?> <?php echo e(url()->current()); ?> <?php endif; ?>
<?php echo $__env->make('errors.error', ['code' => 404], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/html/resources/views/errors/404.blade.php ENDPATH**/ ?>