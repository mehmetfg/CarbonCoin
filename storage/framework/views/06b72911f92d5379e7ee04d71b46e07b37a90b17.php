<?php $__env->startPush('css'); ?>
    <?php echo $__env->make('layouts.datatables_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<div class="dt-ext table-responsive">
<?php echo $dataTable->table(['class' => 'display dt-responsive']); ?>

</div>
<?php $__env->startPush('js'); ?>
    <?php echo $__env->make('layouts.datatables_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $dataTable->scripts(); ?>

<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/traders/table.blade.php ENDPATH**/ ?>