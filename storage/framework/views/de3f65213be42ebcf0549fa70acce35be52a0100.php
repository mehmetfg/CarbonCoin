<!-- Exchange Id Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('exchange_id', __('models/traderAssets.fields.exchange_id').':', ['class' => 'form-label']); ?>

    <?php echo Form::select('exchange_id', $exchangeItems, null, ['class' => 'form-select']); ?>

</div>


<!-- Asset Symbol Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('asset_symbol', __('models/traderAssets.fields.asset_symbol').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('asset_symbol', null, ['class' => 'form-control']); ?>

</div>


<!-- Balance Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('balance', __('models/traderAssets.fields.balance').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('balance', null, ['class' => 'form-control']); ?>

</div>


<!-- Locked Balance Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('locked_balance', __('models/traderAssets.fields.locked_balance').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('locked_balance', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="card-footer">
    <?php echo Form::submit(__('crud.save'), ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('traderAssets.index')); ?>" class="btn btn-light"><?php echo app('translator')->get('crud.cancel'); ?></a>
</div>
<?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/trader_assets/fields.blade.php ENDPATH**/ ?>