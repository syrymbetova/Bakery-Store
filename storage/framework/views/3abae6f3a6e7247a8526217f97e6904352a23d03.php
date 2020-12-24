<?php $__env->startSection('title', __('main.category') . $category->__('name')); ?>

<?php $__env->startSection('content'); ?>
    <h1>
        <?php echo e($category->__('name')); ?>

    </h1>
    <p>
        <?php echo e($category->__('description')); ?>

    </p>
    <div class="row">
        <?php $__currentLoopData = $category->products->map->skus->flatten(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('layouts.card', compact('sku'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/category.blade.php ENDPATH**/ ?>
