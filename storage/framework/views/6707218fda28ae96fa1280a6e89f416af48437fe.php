<li class="sidebar-list">
   <a class="sidebar-link sidebar-title" href="/"><i data-feather="home"></i><span class="lan-3">Back Office              </span></a>
</li>
<li class="sidebar-list">
    <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title " href="#"><i data-feather="home"></i><span class="lan-3">Borsa İşlemleri              </span></a>
    <ul class="sidebar-submenu">

        <li>
            <a class="sidebar-link sidebar-title" href="<?php echo e(route('exchange.report')); ?>"> <span class="lan-3"> Raporlar            </span></a>
        </li>
        <li>
            <a class="<?php echo e(Request::is('exchanges*') ? 'active' : ''); ?>" href="<?php echo e(route('exchanges.index')); ?>"><span class="lan-3"><?php echo app('translator')->get('models/exchanges.plural'); ?>              </span></a>
        </li>
        <li>
            <a class="<?php echo e(Request::is('traders*') ? 'active' : ''); ?>" href="<?php echo e(route('traders.index')); ?>"><span class="lan-3"><?php echo app('translator')->get('models/traders.plural'); ?>              </span></a>
        </li>
        <li>
            <a class=" <?php echo e(Request::is('trades*') ? 'active' : ''); ?>" href="<?php echo e(route('trades.index')); ?>"><span class="lan-3"><?php echo app('translator')->get('models/trades.plural'); ?>              </span></a>
        </li>
        <li>
            <a class="sidebar-link sidebar-title <?php echo e(Request::is('traderAssets*') ? 'active' : ''); ?>" href="<?php echo e(route('traderAssets.index')); ?>"><?php echo app('translator')->get('models/traderAssets.plural'); ?>              </span></a>
        </li>
    </ul>
</li>

<?php if(auth()->user()->isAdmin()): ?>
    <?php echo $__env->make("layouts.menu.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php if(auth()->user()->isDealer()): ?>
    <?php echo $__env->make("layouts.menu.dealer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php if(auth()->user()->isPartner()): ?>
    <?php echo $__env->make("layouts.menu.partner", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php if(auth()->user()->isCustomer()): ?>
    <?php echo $__env->make("layouts.menu.customer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php if(! auth()->user()->isAdmin()): ?>
<i data-feather="home"></i>
<?php endif; ?>


<i data-feather="home"></i>




<?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/layouts/menu.blade.php ENDPATH**/ ?>