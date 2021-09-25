<?php $__env->startPush('outside-content'); ?>
   <?php echo $__env->make('components.exchange-asset-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>


            <div class="card-body">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('trades.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="card-footer">

            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("components.exchange-assets", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/trades/index.blade.php ENDPATH**/ ?>