<?php $__env->startSection('headerTitle', 'Booking service'); ?>
<?php $__env->startSection('headerDescription', 'Please choose a service to book.'); ?>

<?php ($orderSteps = \App\Models\OrderSteps::getInstance()); ?>
<?php $__env->startSection('breadcrumds'); ?>

    <?php echo $__env->make(
            'components.breadcrumbs',
            [
                'worker'  => $orderSteps ? $orderSteps->getTimeSlot() : null,
                'service' => $orderSteps ? $orderSteps->getService() : null,
            ]
    , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\main-project\MyProject\resources\views/app.blade.php ENDPATH**/ ?>