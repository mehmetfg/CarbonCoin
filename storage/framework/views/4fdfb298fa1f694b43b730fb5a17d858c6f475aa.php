

<li class="sidebar-main-title">
    <div>
        <h6 class="lan-1">Admin</h6>
        <p class="lan-2">Admin İşlemleri</p>
    </div>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title <?php echo e(Request::is('dealers*') ? 'active' : ''); ?>" href="<?php echo e(route('dealers.index')); ?>"><i data-feather="home"></i><span class="lan-3"><?php echo app('translator')->get('models/dealers.plural'); ?>              </span></a>
</li>

<li class="sidebar-list">
    <a class="sidebar-link sidebar-title <?php echo e(Request::is('partners*') ? 'active' : ''); ?>" href="<?php echo e(route('partners.index')); ?>"><i data-feather="home"></i><span class="lan-3"><?php echo app('translator')->get('models/partners.plural'); ?>              </span></a>

</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title <?php echo e(Request::is('tokens*') ? 'active' : ''); ?>" href="<?php echo e(route('tokens.index')); ?>"><i data-feather="home"></i><span class="lan-3"><?php echo app('translator')->get('models/tokens.plural'); ?>              </span></a>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title <?php echo e(Request::is('powerStations*') ? 'active' : ''); ?>" href="<?php echo e(route('powerStations.index')); ?>"><i data-feather="home"></i><span class="lan-3"><?php echo app('translator')->get('models/powerStations.plural'); ?>              </span></a>

</li>

<li class="sidebar-list">
    <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title " href="#"><i data-feather="home"></i><span class="lan-3">Borsa İşlemleri              </span></a>
    <ul class="sidebar-submenu">
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









<li class="sidebar-list">
    <a class="sidebar-link sidebar-title <?php echo e(Request::is('transactions*') ? 'active' : ''); ?>" href="<?php echo e(route('transactions.index')); ?>"><i data-feather="home"></i><span class="lan-3"><?php echo app('translator')->get('models/transactions.plural'); ?>              </span></a>
</li>

<i data-feather="home"></i>

<?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/layouts/menu/admin.blade.php ENDPATH**/ ?>