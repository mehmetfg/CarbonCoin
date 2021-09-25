<?php echo Form::open(['route' => ['traders.destroy', $id], 'method' => 'delete']); ?>

<div class='btn-group'>
    <a href="<?php echo e(route('traders.show', $id)); ?>" class='btn btn-warning-gradien btn-sm'>
        <i class="fa fa-eye"></i>
    </a>
    <a href="<?php echo e(route('traders.edit', $id)); ?>" class='btn btn-primary btn-sm'>
        <i class="fa fa-edit"></i>
    </a>
    <?php echo Form::button('<i class="fa  fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-sm',
        'onclick' => 'return confirm("'.__('crud.are_you_sure').'")'
    ]); ?>

</div>
<?php echo Form::close(); ?>

<?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/traders/datatables_actions.blade.php ENDPATH**/ ?>