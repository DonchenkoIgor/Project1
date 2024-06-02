<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12 text-center">
    <div class="error_number">
      <small><?php echo e(strtoupper(trans('backpack::base.error_page.title', ['error' => '']))); ?></small><br>
      <?php echo e($error_number); ?>

      <hr>
    </div>
    <div class="error_title text-muted">
      <?php echo $__env->yieldContent('title'); ?>
    </div>
    <?php if(backpack_user()): ?>
    <div class="error_description text-muted">
      <small>
        <?php echo $__env->yieldContent('description'); ?>
      </small>
    </div>
    <?php endif; ?>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(backpack_view(backpack_user() && backpack_theme_config('layout') ? 'layouts.'.backpack_theme_config('layout') : 'errors.blank'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\main-project\MyProject\vendor\backpack\crud\src\resources\views\ui/errors/layout.blade.php ENDPATH**/ ?>