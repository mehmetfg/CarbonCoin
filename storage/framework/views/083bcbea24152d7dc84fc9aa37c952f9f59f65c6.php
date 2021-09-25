<?php $__env->startSection('content'); ?>
            <div class="card-header">
                <h5><?php echo app('translator')->get('models/traders.plural'); ?></h5>
                <h1 class="pull-right">
                    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px"
                       href="<?php echo e(route('traders.create')); ?>"><?php echo app('translator')->get('crud.add_new'); ?></a>
                </h1>
            </div>
            <div class="card-body">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('traders.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="card-footer">
                
            </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/traders/index.blade.php ENDPATH**/ ?>