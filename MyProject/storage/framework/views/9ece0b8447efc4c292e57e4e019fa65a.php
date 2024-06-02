<div class="container my-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom overflow-hidden text-center bg-body-tertiary border rounded-3">
            <li class="breadcrumb-item">
                <a class="link-body-emphasis fw-semibold text-decoration-none" href="<?php echo e(route('pages.services')); ?>">
                    Service
                </a>
                <?php if($service): ?>
                    <span class="text-body-emphasis"> - <?php echo e($service->name); ?></span>
                <?php endif; ?>
            </li>
            <li class="breadcrumb-item">
                <a class="link-body-emphasis fw-semibold text-decoration-none" href="<?php echo e(route('pages.staff')); ?>">Worker</a>
                <?php if($worker): ?>
                    <span class="text-body-emphasis"> - <?php echo e($worker->name); ?></span>
                <?php endif; ?>
            </li>
            <li class="breadcrumb-item active">
                <a class="link-body-emphasis fw-semibold text-decoration-none" href="<?php echo e(route('pages.schedules')); ?>">Shedule</a>
            </li>
        </ol>
    </nav>
</div>
<?php /**PATH D:\main-project\MyProject\resources\views/components/breadcrumbs.blade.php ENDPATH**/ ?>