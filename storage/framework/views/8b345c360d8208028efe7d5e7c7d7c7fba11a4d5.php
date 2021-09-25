<?php $__env->startSection('content'); ?>
    <div class="card-header">
        <h5>
            <?php echo app('translator')->get('models/powerStations.singular'); ?>
        </h5>
        <a href="/react/transfer-list/<?php echo e($token->id); ?>/<?php echo e($powerStation->wallet_address); ?>" class="pull-right btn btn-primary">
            <?php echo app('translator')->get('Transfer'); ?>
        </a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <?php echo $__env->make('power_stations.show_fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="<?php echo e(route('powerStations.index')); ?>" class="pull-right btn btn-default">
            <?php echo app('translator')->get('crud.back'); ?>
        </a>
        <?php if(auth_user()->isAdmin()): ?>
        <a href="/react/transfer-list/<?php echo e($token->id); ?>/<?php echo e($powerStation->wallet_address); ?>" class=" btn btn-primary">
            <?php echo app('translator')->get('Transfer'); ?>
        </a>
        <?php else: ?>
            <a href="/react/transfer-view/<?php echo e($token->id); ?>/<?php echo e($powerStation->wallet_address); ?>" class=" btn btn-primary">
                <?php echo app('translator')->get('Transfer'); ?>
            </a>
            <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/power_stations/show.blade.php ENDPATH**/ ?>