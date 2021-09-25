<?php $__env->startSection('content'); ?>
            <div class="card-header">
                <h5><?php echo app('translator')->get('models/knowYourCustomers.plural'); ?></h5>
                <h1 class="pull-right">
                    <?php if(auth_user()->isAdmin()): ?>
                    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px"
                       href="<?php echo e(route('knowYourCustomers.create')); ?>"><?php echo app('translator')->get('crud.add_new'); ?></a>
                        <?php endif; ?>
                </h1>
            </div>
            <div class="card-body">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('know_your_customers.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="card-footer">

            </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/know_your_customers/index.blade.php ENDPATH**/ ?>