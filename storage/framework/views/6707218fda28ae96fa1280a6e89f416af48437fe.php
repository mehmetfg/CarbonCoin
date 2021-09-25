<li class="sidebar-list">
   <a class="sidebar-link sidebar-title" href="/"><i data-feather="home"></i><span class="lan-3">Back Office              </span></a>
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