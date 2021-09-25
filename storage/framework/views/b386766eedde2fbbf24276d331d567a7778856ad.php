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
    <div class="col-md-3 xl-50  box-col-4">
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
    <div class="col-md-3 xl-50  box-col-4">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="media-body right-chart-content">
                        <strong> İşlem Hacmi (CYCE)</strong><br>

                        Günlük
                        <h4>
                            <?php echo e(local_price_format($totalOutBid->where("taker_side", "ASK")->where("inserted_at", ">=", \Carbon\Carbon::now()->subDay())->sum("amount"))); ?> </h4>
                        <h4>
                            <?php echo e(local_price_format($totalOutBid->where("taker_side", "BID")->where("inserted_at",">=", \Carbon\Carbon::now()->subDay())->sum("amount"))); ?> </h4>
                        Toplam
                        <h4>
                            <?php echo e(local_price_format($totalOutBid->where("taker_side", "ASK")->sum("amount"))); ?> </h4>
                        <h4>
                            <?php echo e(local_price_format($totalOutBid->where("taker_side", "BID")->sum("amount"))); ?> </h4>
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
<?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/components/exchange-asset-dashboard.blade.php ENDPATH**/ ?>