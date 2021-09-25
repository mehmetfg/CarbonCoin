<!-- Vallet Id Field -->

<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('partner_id', __('models/traders.fields.partner_id').':', ['class' => 'form-label']); ?>

    <?php echo Form::select('partner_id', $partnerItems, null, ['class' => 'form-select']); ?>

</div>
<!-- Name Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('name', __('models/powerStations.fields.name').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>


<!-- Wallet Address Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('wallet_address', __('models/powerStations.fields.wallet_address').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('wallet_address', null, ['class' => 'form-control']); ?>

</div>


<!-- Email Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('email', __('models/powerStations.fields.email').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('email', null, ['class' => 'form-control']); ?>

</div>


<!-- Phone Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('phone', __('models/powerStations.fields.phone').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('phone', null, ['class' => 'form-control']); ?>

</div>


<!-- Country Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('country', __('models/powerStations.fields.country').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('country', null, ['class' => 'form-control']); ?>

</div>


<!-- City Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('city', __('models/powerStations.fields.city').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('city', null, ['class' => 'form-control']); ?>

</div>




<!-- Web Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('web', __('models/powerStations.fields.web').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('web', null, ['class' => 'form-control']); ?>

</div>


<!-- Installed Power Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('installed_power', __('models/powerStations.fields.installed_power').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('installed_power', null, ['class' => 'form-control']); ?>

</div>


<!-- Tax Number Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('tax_number', __('models/powerStations.fields.tax_number').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('tax_number', null, ['class' => 'form-control']); ?>

</div>


<!-- Authorized Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('authorized', __('models/powerStations.fields.authorized').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('authorized', null, ['class' => 'form-control']); ?>

</div>


<!-- Paid Date Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('paid_date', __('models/powerStations.fields.paid_date').':', ['class' => 'form-label']); ?>

    <?php echo Form::date('paid_date', null, ['class' => 'datepicker-here form-control digits','id'=>'paid_date']); ?>

</div>

<?php $__env->startPush('scripts'); ?>
    <script src="../assets/js/datepicker/date-time-picker/moment.min.js"></script>
    <script src="../assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../assets/js/datepicker/date-time-picker/datetimepicker.custom.js"></script>
<?php $__env->stopPush(); ?>

<!-- Address Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('address', __('models/powerStations.fields.address').':', ['class' => 'form-label']); ?>

    <?php echo Form::textarea('address', null, ['class' => 'form-control']); ?>

</div>
<!-- Description Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('description', __('models/powerStations.fields.description').':', ['class' => 'form-label']); ?>

    <?php echo Form::textarea('description', null, ['class' => 'form-control']); ?>

</div>



<!-- Status Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('status', __('models/powerStations.fields.status').':', ['class' => 'form-label']); ?>

    <?php echo Form::select('status', ['1' => 'Beklemede', '2' => 'Onay Aşamasında', '3' => ' Onaylandı'], null, ['class' => 'form-select']); ?>

</div>


<!-- Is Active Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('is_active', __('models/powerStations.fields.is_active').':', ['class' => 'form-label']); ?>

    <?php echo Form::select('is_active', ['1' => 'Aktif', '0' => 'Pasif'], null, ['class' => 'form-select']); ?>

</div>


<!-- Doc1 Field -->
<div class="mb-3 row">
        <?php echo Form::label('doc1', __('models/powerStations.fields.doc1').':', ['class' => 'col-sm-3 col-form-label']); ?>

        <div class="col-sm-9">
            <?php echo Form::file('doc1', ['class' => 'form-control']); ?>

        </div>
</div>




<!-- Doc2 Field -->
<div class="mb-3 row">
        <?php echo Form::label('doc2', __('models/powerStations.fields.doc2').':', ['class' => 'col-sm-3 col-form-label']); ?>

        <div class="col-sm-9">
            <?php echo Form::file('doc2', ['class' => 'form-control']); ?>

        </div>
</div>




<!-- Doc3 Field -->
<div class="mb-3 row">
        <?php echo Form::label('doc3', __('models/powerStations.fields.doc3').':', ['class' => 'col-sm-3 col-form-label']); ?>

        <div class="col-sm-9">
            <?php echo Form::file('doc3', ['class' => 'form-control']); ?>

        </div>
</div>




<!-- Doc4 Field -->
<div class="mb-3 row">
        <?php echo Form::label('doc4', __('models/powerStations.fields.doc4').':', ['class' => 'col-sm-3 col-form-label']); ?>

        <div class="col-sm-9">
            <?php echo Form::file('doc4', ['class' => 'form-control']); ?>

        </div>
</div>



<!-- Submit Field -->
<div class="card-footer">
    <?php echo Form::submit(__('crud.save'), ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('powerStations.index')); ?>" class="btn btn-light"><?php echo app('translator')->get('crud.cancel'); ?></a>
</div>
<?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/power_stations/fields.blade.php ENDPATH**/ ?>