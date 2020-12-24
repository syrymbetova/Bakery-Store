<?php $__env->startSection('title', __('main.all_categories')); ?>

<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="panel"  style="background-color: #a2d3d7">
            <a href="<?php echo e(route('category', $category->code)); ?>">
                <img src="<?php echo e(Storage::url($category->image)); ?>">
                <h2><?php echo e($category->__('name')); ?></h2>
            </a>
            <p>
                <?php echo e($category->__('description')); ?>

            </p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/categories.blade.php ENDPATH**/ ?>
