<?php $__env->startSection('content'); ?>
    <div id="root">

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('css'); ?>
    <style>

        .hidden { display:none; }

        .page-wrapper .page-body-wrapper .page-title {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .card .card-body {
            padding: 15px;
            background-color: rgba(0,0,0,0);
        }
    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.vue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/customer/transfer.blade.php ENDPATH**/ ?>