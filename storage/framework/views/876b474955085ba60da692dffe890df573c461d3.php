<!-- Token Id Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('token_id', __('models/vallets.fields.token_id').':', ['class' => 'form-label']); ?>

    <?php echo Form::select('token_id', $tokenItems, null, ['id'=> 'tokenId', 'class' => 'form-select']); ?>

</div>
    <?php echo Form::hidden('user_id', request("id",1), null); ?>

    <?php echo Form::hidden('partner_id', request("partner_id"), null); ?>

<!-- Name Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('name', __('models/vallets.fields.name').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>


<!-- Public Key Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('public_key', __('models/vallets.fields.public_key').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('public_key', null, ['class' => 'form-control']); ?>

</div>


<!-- Private Key Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('private_key', __('models/vallets.fields.private_key').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('private_key', null, ['class' => 'form-control']); ?>

</div>


<!-- Id Card Number Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('id_card_number', __('models/vallets.fields.id_card_number').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('id_card_number', null, ['class' => 'form-control']); ?>

</div>


<!-- Balance Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('balance', __('models/vallets.fields.balance').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('balance', null, ['class' => 'form-control']); ?>

</div>


<!-- Progress Payment Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('progress_payment', __('models/vallets.fields.progress_payment').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('progress_payment', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="card-footer">
    <?php echo Form::submit(__('crud.save'), ['id'=> 'btnValletSave', 'class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('vallets.index')); ?>" class="btn btn-light"><?php echo app('translator')->get('crud.cancel'); ?></a>
</div>
<?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/vallets/fields.blade.php ENDPATH**/ ?>