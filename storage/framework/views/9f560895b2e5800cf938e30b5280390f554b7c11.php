<!-- Exchange Id Field -->
<div class="form-group">
    <?php echo Form::label('exchange_id', __('models/traderAssets.fields.exchange_id').':', ['class' => 'form-label']); ?>

    <p><?php echo e($traderAsset->exchange_id); ?></p>
</div>


<!-- Locked Balance Field -->
<div class="form-group">
    <?php echo Form::label('locked_balance', __('models/traderAssets.fields.locked_balance').':', ['class' => 'form-label']); ?>

    <p><?php echo e($traderAsset->locked_balance); ?></p>
</div>


<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', __('models/traderAssets.fields.created_at').':', ['class' => 'form-label']); ?>

    <p><?php echo e($traderAsset->created_at); ?></p>
</div>


<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', __('models/traderAssets.fields.updated_at').':', ['class' => 'form-label']); ?>

    <p><?php echo e($traderAsset->updated_at); ?></p>
</div>


<?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/trader_assets/show_fields.blade.php ENDPATH**/ ?>