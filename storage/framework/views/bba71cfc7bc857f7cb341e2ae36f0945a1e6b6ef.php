<?php $__env->startSection('PageHeader'); ?>
    <?php echo e(__("general.addNewCountry")); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('PageLocation'); ?>
    ##parent-placeholder-beeb47ac6f60afc7d02ef05a32eb9384e933fbd3##

    <li>
        <a href="<?php echo e(url('/admin/countries')); ?>">
            <?php echo e(__("general.Countries")); ?>

        </a>
    </li>
    <li>
        <a href="#">
            <?php echo e(__("general.addNewCountry")); ?>

        </a>
    </li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <form action="<?php echo e(url('/admin/countries/')); ?>" enctype="multipart/form-data" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h6 class="txt-dark capitalize-font"><i
                                                class="zmdi zmdi-flag mr-10"></i><?php echo e(__("general.CountryInformation")); ?>

                                    </h6>
                                    <hr class="light-grey-hr"/>
                                    <?php echo e(csrf_field()); ?>


                                    <div class="form-body overflow-hide">
                                        <div class="form-group">
                                            <div class="checkbox checkbox-primary pr-10 pull-left">
                                                <input id="languageAvailability" value="1" name="is_active"
                                                       type="checkbox" <?php if(old('is_active')): ?> checked <?php endif; ?>>
                                                <label for="languageAvailability"> <?php echo e(__("general.available")); ?> </label>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group <?php echo e($errors->has('code') ? ' has-error' : ''); ?>">
                                            <label class="control-label mb-10"
                                                   for="exampleInputuname_01"><?php echo e(__("general.code")); ?></label>

                                            <input type="text" maxlength="5" class="form-control "
                                                   id="exampleInputuname_01" name="code" value="<?php echo e(old('code')); ?>"
                                                   required/>

                                            <?php if($errors->has('code')): ?>
                                                <span class="help-block">
                                            <strong><?php echo e($errors->first('code')); ?></strong>
                                        </span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group <?php echo e($errors->has('flag') ? ' has-error' : ''); ?>">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="mt-40">
                                                        <input type="file"
                                                               name="flag"
                                                               id="Flag"
                                                               class="dropify"
                                                               data-default-file=""
                                                               accept=".jpg,.jpeg,.png" />
                                                    </div>
                                                    <?php if($errors->has('flag')): ?>
                                                        <span class="help-block"
                                                              style="color : red">
                                                <strong><?php echo e($errors->first('flag')); ?></strong>
                                            </span>
                                                    <?php endif; ?>

                                                    <label class="control-label mb-10" for="exampleInputuname_01"><?php echo e(__("general.Flag")); ?></label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-mx-auto">
                                    <h6 class="txt-dark capitalize-font"><i
                                                class="zmdi zmdi-translate mr-10"></i><?php echo e(__("general.Localization")); ?>

                                    </h6>
                                    <hr class="light-grey-hr"/>
                                    <div class="panel panel-default card-view">
                                        <div class="panel-wrapper collapse in">
                                            <div class="panel-heading">
                                                <?php echo e(__("general.Localization")); ?>

                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-body overflow-hide">
                                                            <div id="english-link"
                                                                 class="form-group <?php echo e($errors->has('en_name') ? ' has-error' : ''); ?>">
                                                                <label class="control-label mb-10"
                                                                       for="exampleInputuname_01"><?php echo e(__("general.name_en")); ?></label>
                                                                <div class="input-group">

                                                                    <input type="text" maxlength="20"
                                                                           class="form-control "
                                                                           id="exampleInputuname_01" name="en_name"
                                                                           value="<?php echo e(old('en_name')); ?>"/>
                                                                </div>
                                                                <?php if($errors->has('en_name')): ?>
                                                                    <span class="help-block">
                                                                <strong><?php echo e($errors->first('en_name')); ?></strong>
                                                            </span>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div id="arabic-link"
                                                                 class="form-group <?php echo e($errors->has('ar_name') ? ' has-error' : ''); ?>">
                                                                <label class="control-label mb-10"
                                                                       for="exampleInputuname_01"><?php echo e(__("general.name_ar")); ?></label>
                                                                <div class="input-group">

                                                                    <input type="text" maxlength="20"
                                                                           class="form-control "
                                                                           id="exampleInputuname_01" name="ar_name"
                                                                           value="<?php echo e(old('ar_name')); ?>"/>
                                                                </div>
                                                                <?php if($errors->has('name.')): ?>
                                                                    <span class="help-block">
                                                                <strong><?php echo e($errors->first('ar_name')); ?></strong>
                                                            </span>
                                                                <?php endif; ?>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions mt-10">
                                    <button type="submit"
                                            class="btn btn-success mr-10 mb-30"><?php echo e(__('general.Save')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

    </div>

<?php $__env->stopSection(); ?>

<!-- /Row -->
<?php $__env->startSection('footer'); ?>
    ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
    <script>

        $(document).ready(function () {
            "use strict";
            /* Select2 Init*/
            $(".select2").select2();
            /* Basic Init*/
            $('.dropify').dropify();

        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>