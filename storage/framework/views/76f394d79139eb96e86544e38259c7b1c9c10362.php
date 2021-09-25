
<div class='btn-group'>

    <?php echo Form::open(['route' => ['partners.destroy', $id], 'method' => 'delete']); ?>

    <a href="<?php echo e(route('powerStations.create', ["id"=> $id])); ?>" class='btn btn-primary btn-sm' title="Yek Ekle">
        <i class="fa fa-eject"></i>
    </a>
    <a href="<?php echo e(route('vallets.create', ["id"=> $id])); ?>" class='btn btn-primary btn-sm'>
        <i class="fa fa-vcard"></i>
    </a>
    <a href="<?php echo e(route('partners.show', $id)); ?>" class='btn btn-warning-gradien btn-sm'>
        <i class="fa fa-eye"></i>
    </a>
    <a href="<?php echo e(route('partners.edit', $id)); ?>" class='btn btn-danger-gradien btn-sm'>
        <i class="fa fa-edit"></i>
    </a>
    <?php echo Form::button('<i class="fa  fa-trash"></i>', [
        'type' => 'submit',
        'class' => ' btn-info btn-sm',
        'onclick' => 'return confirm("'.__('crud.are_you_sure').'")'
    ]); ?>

    <?php echo Form::close(); ?>

    <?php if(Auth::user()->type=="1"): ?>
        <form  action="<?php echo e(route("impersonate.login")); ?>"  method="post">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="id" value="<?php echo e($id); ?>">
            <input type="hidden" name="admin_id" value="<?php echo e(auth()->id()); ?>">
            <button  class="btn-info  btn-xs ">     <i class="fa fa-sign-out"></i></button>
        </form>

    <?php endif; ?>
</div>

<?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/partners/datatables_actions.blade.php ENDPATH**/ ?>