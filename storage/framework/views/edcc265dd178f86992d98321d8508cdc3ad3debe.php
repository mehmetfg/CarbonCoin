<li class="sidebar-main-title">
    <div>
        <h6 class="lan-1">Bayi</h6>
        <p class="lan-2">Bayi İşlemleri</p>
    </div>
</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title <?php echo e(Request::is('partners*') ? 'active' : ''); ?>" href="<?php echo e(route('partners.index')); ?>"><i data-feather="home"></i><span class="lan-3"><?php echo app('translator')->get('models/partners.plural'); ?>              </span></a>

</li>
<li class="sidebar-list">
    <a class="sidebar-link sidebar-title <?php echo e(Request::is('powerStations*') ? 'active' : ''); ?>" href="<?php echo e(route('powerStations.index')); ?>"><i data-feather="home"></i><span class="lan-3"><?php echo app('translator')->get('models/powerStations.plural'); ?>              </span></a>

</li>

<li class="sidebar-list">
    <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title " href="#"><i data-feather="home"></i><span class="lan-3"><?php echo app('translator')->get('models/customers.plural'); ?>              </span></a>
    <ul class="sidebar-submenu">
        <li><a href="<?php echo e(route('customers.index')); ?>"><?php echo app('translator')->get('models/users.plural'); ?></a></li>
        <li><a href="<?php echo e(route('knowYourCustomers.index')); ?>"><?php echo app('translator')->get('models/knowYourCustomers.plural'); ?>  </a></li>
        <li class="sidebar-list">
            <a class="sidebar-link sidebar-title <?php echo e(Request::is('vallets*') ? 'active' : ''); ?>" href="<?php echo e(route('partner.vallets.index')); ?>"><i data-feather="home"></i><span class="lan-3"><?php echo app('translator')->get('models/vallets.plural'); ?>              </span></a>
        </li>
    </ul>
</li>
<li class="sidebar-list">
    <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title " href="#"><span class="lan-3">Borsa İşlemleri              </span></a>
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
            <a class="sidebar-link sidebar-title <?php echo e(Request::is('traderAssets*') ? 'active' : ''); ?>" href="<?php echo e(route('traderAssets.index')); ?>"><i data-feather="home"></i><span class="lan-3"><?php echo app('translator')->get('models/traderAssets.plural'); ?>              </span></a>
        </li>

    </ul>
</li>

<?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/layouts/menu/dealer.blade.php ENDPATH**/ ?>