<?php $__env->startSection('content'); ?>
    <div class="card-header">
        <h5>
            <?php echo app('translator')->get('models/traderAssets.singular'); ?>
        </h5>
    </div>
    <div class="card-body">
        <div class="row g-2">
            <div class="col-md-12">
                <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo Form::open(['route' => 'traderAssets.store']); ?>

                <div class="row">
                <?php echo $__env->make('trader_assets.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <?php echo Form::close(); ?>


            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/trader_assets/create.blade.php ENDPATH**/ ?>