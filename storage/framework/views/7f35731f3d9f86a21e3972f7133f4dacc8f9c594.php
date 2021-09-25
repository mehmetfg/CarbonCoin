<?php $__env->startPush('outside-content'); ?>
    <div class="row">

        <?php $__currentLoopData = $data->groupBy("trader_id"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 xl-50  box-col-4">

                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body right-chart-content">
                                <?php echo e($asset[0]["name"]); ?> Bakiye
                                <br>
                                <?php $__currentLoopData = $asset; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($item["asset_symbol"]); ?>

                                    <h4>    <?php if($item["asset_symbol"]=='USDT'): ?>  $ <?php endif; ?><?php echo e(number_format(round($item["balance"], 3), 3)); ?></h4>
                                    <h4><i class="fa fa-lock"></i> <?php echo e(number_format(round($item["locked_balance"], 3), 3)); ?> <span class="new-box"></span></h4><span></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div>


                            <div class="knob-block text-center">
                                <div class="fa fa-2x fa-bar-chart  text-primary"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6 xl-50  box-col-4">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="media-body right-chart-content">
                            Toplam Bakiye
                            <br>
                            CYCE

                            <h4>  <?php echo e(number_format(round($data->where("asset_symbol", "CYCE")->sum("balance"),3),3)); ?></h4>
                            <h4><i class="fa fa-lock"></i> <?php echo e(number_format(round($data->where("asset_symbol", "CYCE")->sum("locked_balance"),3),3)); ?></h4>
                            USDT
                            <h4> $ <?php echo e(number_format(round($data->where("asset_symbol", "USDT")->sum("balance"),3),3)); ?></h4>
                            <h4><i class="fa fa-lock"></i> <?php echo e(number_format(round($data->where("asset_symbol", "USDT")->sum("locked_balance"),3),3)); ?>

                        </div>


                        <div class="knob-block text-center">
                            <div class="fa fa-2x fa-bar-chart  text-primary"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="col-xl-6 col-lg-12 box-col-6">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9">
                        <h5>USDT</h5>
                    </div>
                    <div class="col-3 text-end"><i class="text-muted" data-feather="shopping-bag"></i></div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <div id="linechart1"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12 box-col-6">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9">
                        <h5>CYCE</h5>
                    </div>
                    <div class="col-3 text-end"><i class="text-muted" data-feather="shopping-bag"></i></div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <div id="linechart2"></div>
                </div>
            </div>
        </div>
    </div>


    </div>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>



            <div class="card-body">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('trader_assets.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="card-footer">

            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("components.exchange-assets", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/trader_assets/index.blade.php ENDPATH**/ ?>