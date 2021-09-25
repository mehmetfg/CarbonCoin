<!-- Name Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('name', __('models/exchanges.fields.name').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>


<!-- Definition Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('definition', __('models/exchanges.fields.definition').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('definition', null, ['class' => 'form-control']); ?>

</div>


<!-- Api Key Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('api_key', __('models/exchanges.fields.api_key').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('api_key', null, ['class' => 'form-control']); ?>

</div>


<!-- Public Trade Url Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('public_trade_url', __('models/exchanges.fields.public_trade_url').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('public_trade_url', null, ['class' => 'form-control']); ?>

</div>


<!-- Private Trade Url Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('private_trade_url', __('models/exchanges.fields.private_trade_url').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('private_trade_url', null, ['class' => 'form-control']); ?>

</div>


<!-- Asset Url Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('asset_url', __('models/exchanges.fields.asset_url').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('asset_url', null, ['class' => 'form-control']); ?>

</div>


<!-- Orders Url Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('orders_url', __('models/exchanges.fields.orders_url').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('orders_url', null, ['class' => 'form-control']); ?>

</div>


<!-- Candles Url Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('candles_url', __('models/exchanges.fields.candles_url').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('candles_url', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="card-footer">
    <?php echo Form::submit(__('crud.save'), ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('exchanges.index')); ?>" class="btn btn-light"><?php echo app('translator')->get('crud.cancel'); ?></a>
</div>
<?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/exchanges/fields.blade.php ENDPATH**/ ?>