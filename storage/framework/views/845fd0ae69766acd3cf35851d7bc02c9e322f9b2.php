<!-- Name Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('name', __('models/dealers.fields.name').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>


<!-- Email Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('email', __('models/dealers.fields.email').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('email', null, ['class' => 'form-control']); ?>

</div>


<!-- Password Field -->
<div class="mb-3 m-form__group  col-md-6">
    <?php echo Form::label('password', __('models/dealers.fields.password').':', ['class' => 'form-label']); ?>

    <?php echo Form::password('password', ['class' => 'form-control']); ?>

</div>


<!-- Phone Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('phone', __('models/dealers.fields.phone').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('phone', null, ['class' => 'form-control']); ?>

</div>


<!-- Address Field -->
<div class="mb-3 m-form__group">
    <?php echo Form::label('address', __('models/dealers.fields.address').':', ['class' => 'form-label']); ?>

    <?php echo Form::textarea('address', null, ['class' => 'form-control']); ?>

</div>


<!-- Tax Number Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('tax_number', __('models/dealers.fields.tax_number').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('tax_number', null, ['class' => 'form-control']); ?>

</div>


<!-- Authorized Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('authorized', __('models/dealers.fields.authorized').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('authorized', null, ['class' => 'form-control']); ?>

</div>


<!-- Web Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('web', __('models/dealers.fields.web').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('web', null, ['class' => 'form-control']); ?>

</div>


<!-- Logo Field -->
<div class="mb-3 m-form__group col-md-6">
        <?php echo Form::label('logo', __('models/dealers.fields.logo').':', ['class' => 'col-sm-3 col-form-label']); ?>

            <?php echo Form::file('logo', ['class' => 'form-control']); ?>


</div>




<!-- Width Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('width', __('models/dealers.fields.width').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('width', null, ['class' => 'form-control']); ?>

</div>


<!-- Favicon Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('favicon', __('models/dealers.fields.favicon').':', ['class' => 'form-label']); ?>

    <?php echo Form::text('favicon', null, ['class' => 'form-control']); ?>

</div>


<!-- Language Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('language', __('models/dealers.fields.language').':', ['class' => 'form-label']); ?>

    <?php echo Form::select('language', ['tr' => 'Türkçe', 'en' => 'İngilizce'], null, ['class' => 'form-select']); ?>

</div>


<!-- Is Active Field -->
<div class="mb-3 m-form__group col-md-6">
    <?php echo Form::label('is_active', __('models/dealers.fields.is_active').':', ['class' => 'form-label']); ?>

    <?php echo Form::select('is_active', ['1' => 'Aktif', '0' => 'Pasif'], null, ['class' => 'form-select']); ?>

</div>

<!-- Submit Field -->
<div class="card-footer">
    <?php echo Form::submit(__('crud.save'), ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('dealers.index')); ?>" class="btn btn-light"><?php echo app('translator')->get('crud.cancel'); ?></a>
</div>
<?php /**PATH C:\laragon\www\CryptoCarbon\resources\views/dealers/fields.blade.php ENDPATH**/ ?>