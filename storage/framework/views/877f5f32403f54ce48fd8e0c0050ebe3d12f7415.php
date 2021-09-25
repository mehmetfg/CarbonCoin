<?php echo Form::open(['route' => ['powerStations.destroy', $id], 'method' => 'delete']); ?>

<div class='btn-group'>
    <a href="<?php echo e(route('powerStations.show', $id)); ?>" class='btn btn-warning-gradien btn-sm'>
        <i class="fa fa-eye"></i>
    </a>
    <?php if(auth_user()->isAdmin()): ?>

    <a href="<?php echo e(route('powerStations.edit', $id)); ?>" class='btn btn-primary btn-sm'>
        <i class="fa fa-edit"></i>
    </a>
    <?php echo Form::button('<i class="fa  fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-sm',
        'onclick' => 'return confirm("'.__('crud.are_you_sure').'")'
    ]); ?>

        <?php endif; ?>
</div>
<?php echo Form::close(); ?>

<?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/power_stations/datatables_actions.blade.php ENDPATH**/ ?>