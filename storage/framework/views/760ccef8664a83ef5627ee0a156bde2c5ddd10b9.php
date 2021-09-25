<?php $__env->startSection('content'); ?>
    <div class="card-header">
        <h5>
            <?php echo app('translator')->get('models/traderAssets.singular'); ?>
        </h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <?php echo $__env->make('trader_assets.show_fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="<?php echo e(route('traderAssets.index')); ?>" class="btn btn-default">
            <?php echo app('translator')->get('crud.back'); ?>
        </a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/trader_assets/show.blade.php ENDPATH**/ ?>