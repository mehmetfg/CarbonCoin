<!-- Name Field -->

<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('dealer_id', __('models/traders.fields.dealer_id').':', ['class' => 'form-label']); ?>

    <?php echo Form::select('dealer_id', $dealerItems, null, ['class' => 'form-select']); ?>

</div>

<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('name', __('models/tokens.fields.name').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>


<!-- Symbol Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('symbol', __('models/tokens.fields.symbol').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('symbol', null, ['class' => 'form-control']); ?>

</div>


<!-- Total Supply Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('total_supply', __('models/tokens.fields.total_supply').':', ['class' => 'form-label']); ?>

    <?php echo Form::number('total_supply', null, ['class' => 'form-control']); ?>

</div>


<!-- Decimal Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('decimal', __('models/tokens.fields.decimal').':', ['class' => 'form-label']); ?>

    <?php echo Form::number('decimal', null, ['class' => 'form-control']); ?>

</div>


<!-- Owner Address Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('owner_address', __('models/tokens.fields.owner_address').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('owner_address', null, ['class' => 'form-control']); ?>

</div>


<!-- Contract Address Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('contract_address', __('models/tokens.fields.contract_address').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('contract_address', null, ['class' => 'form-control']); ?>

</div>


<!-- Usd Price Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('usd_price', __('models/tokens.fields.usd_price').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('usd_price', null, ['class' => 'form-control']); ?>

</div>


<!-- Description Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('description', __('models/tokens.fields.description').':', ['class' => 'form-label']); ?>

    <?php echo Form::textarea('description', null, ['class' => 'form-control']); ?>

</div>


<!-- Main Abi Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('main_abi', __('models/tokens.fields.main_abi').':', ['class' => 'form-label']); ?>

    <?php echo Form::textarea('main_abi', null, ['class' => 'form-control']); ?>

</div>


<!-- Sub Abi Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('sub_abi', __('models/tokens.fields.sub_abi').':', ['class' => 'form-label']); ?>

    <?php echo Form::textarea('sub_abi', null, ['class' => 'form-control']); ?>

</div>


<!-- Status Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('status', __('models/tokens.fields.status').':', ['class' => 'form-label']); ?>

    <?php echo Form::select('status', ['Uretimte' => 'Uretimte', 'Dağıtıma Başladı' => ' Dağıtıma Başladı', 'Borsada' => ' Borsada'], null, ['class' => 'form-select']); ?>

</div>


<!-- Is Active Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('is_active', __('models/tokens.fields.is_active').':', ['class' => 'form-label']); ?>

    <?php echo Form::select('is_active', ['Aktif' => '1', 'Pasif' => '0'], null, ['class' => 'form-select']); ?>

</div>

<!-- Submit Field -->
<div class="card-footer">
    <?php echo Form::submit(__('crud.save'), ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('tokens.index')); ?>" class="btn btn-light"><?php echo app('translator')->get('crud.cancel'); ?></a>
</div>
<?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/tokens/fields.blade.php ENDPATH**/ ?>