<!-- Name Field -->
<div class="form-group">
    <?php echo Form::label('name', __('models/powerStations.fields.name').':', ['class' => 'form-label']); ?>

       <strong><?php echo e($powerStation->name); ?> </strong>
</div>


<!-- Wallet Address Field -->
<div class="form-group">
    <?php echo Form::label('wallet_address', __('models/powerStations.fields.wallet_address').':', ['class' => 'form-label']); ?> :
      <strong><?php echo e($powerStation->wallet_address); ?> </strong>
</div>


<!-- Phone Field -->
<div class="form-group">
    <?php echo Form::label('phone', __('models/powerStations.fields.phone').':', ['class' => 'form-label']); ?>

      <strong><?php echo e($powerStation->phone); ?> </strong>
</div>


<!-- Country Field -->
<div class="form-group">
    <?php echo Form::label('country', __('models/powerStations.fields.country').':', ['class' => 'form-label']); ?>

      <strong><?php echo e($powerStation->country); ?> </strong>
</div>


<!-- City Field -->
<div class="form-group">
    <?php echo Form::label('city', __('models/powerStations.fields.city').':', ['class' => 'form-label']); ?>

      <strong><?php echo e($powerStation->city); ?> </strong>
</div>


<!-- Address Field -->
<div class="form-group">
    <?php echo Form::label('address', __('models/powerStations.fields.address').':', ['class' => 'form-label']); ?>

      <strong><?php echo e($powerStation->address); ?> </strong>
</div>


<!-- Web Field -->
<div class="form-group">
    <?php echo Form::label('web', __('models/powerStations.fields.web').':', ['class' => 'form-label']); ?>

      <strong><?php echo e($powerStation->web); ?> </strong>
</div>


<!-- Installed Power Field -->
<div class="form-group">
    <?php echo Form::label('installed_power', __('models/powerStations.fields.installed_power').':', ['class' => 'form-label']); ?>

      <strong><?php echo e($powerStation->installed_power); ?> </strong>
</div>


<!-- Tax Number Field -->
<div class="form-group">
    <?php echo Form::label('tax_number', __('models/powerStations.fields.tax_number').':', ['class' => 'form-label']); ?>

      <strong><?php echo e($powerStation->tax_number); ?> </strong>
</div>


<!-- Authorized Field -->
<div class="form-group">
    <?php echo Form::label('authorized', __('models/powerStations.fields.authorized').':', ['class' => 'form-label']); ?>

      <strong><?php echo e($powerStation->authorized); ?> </strong>
</div>


<!-- Paid Date Field -->
<div class="form-group">
    <?php echo Form::label('paid_date', __('models/powerStations.fields.paid_date').':', ['class' => 'form-label']); ?>

      <strong><?php echo e($powerStation->paid_date); ?> </strong>
</div>


<!-- Description Field -->
<div class="form-group">
    <?php echo Form::label('description', __('models/powerStations.fields.description').':', ['class' => 'form-label']); ?>

      <strong><?php echo e($powerStation->description); ?> </strong>
</div>


<!-- Status Field -->
<div class="form-group">
    <?php echo Form::label('status', __('models/powerStations.fields.status').':', ['class' => 'form-label']); ?>

      <strong><?php echo e($powerStation->status); ?> </strong>
</div>


<!-- Doc1 Field -->
<div class="form-group">
    <?php echo Form::label('doc1', __('models/powerStations.fields.doc1').':', ['class' => 'form-label']); ?>

    <a href="<?php echo e($powerStation->doc1); ?>" class="btn-outline-primary btn btn-block btn-sm"> <i class="fa fa-file"></i>   İndir </a>
</div>


<!-- Doc2 Field -->
<div class="form-group">
    <?php echo Form::label('doc2', __('models/powerStations.fields.doc2').':', ['class' => 'form-label']); ?>

    <a href="<?php echo e($powerStation->doc2); ?>" class="btn-outline-primary btn btn-block btn-sm"> <i class="fa fa-file"></i>   İndir </a>
</div>


<!-- Doc3 Field -->
<div class="form-group">
    <?php echo Form::label('doc3', __('models/powerStations.fields.doc3').':', ['class' => 'form-label']); ?>

    <a href="<?php echo e($powerStation->doc3); ?>" class="btn-outline-primary btn btn-block btn-sm"> <i class="fa fa-file"></i>   İndir </a>

</div>


<!-- Doc4 Field -->
<div class="form-group">
    <?php echo Form::label('doc4', __('models/powerStations.fields.doc4').':', ['class' => 'form-label']); ?>

    <a href="<?php echo e($powerStation->doc4); ?>" class="btn-outline-primary btn btn-block btn-sm"> <i class="fa fa-file"></i>   İndir </a>
</div>


<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', __('models/powerStations.fields.created_at').':', ['class' => 'form-label']); ?>

      <strong><?php echo e($powerStation->created_at); ?> </strong>
</div>


<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', __('models/powerStations.fields.updated_at').':', ['class' => 'form-label']); ?>

      <strong><?php echo e($powerStation->updated_at); ?> </strong>
</div>


<?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/power_stations/show_fields.blade.php ENDPATH**/ ?>