<?php $__env->startSection('title', __('main.product')); ?>

<?php $__env->startSection('content'); ?>
    <h1><?php echo e($skus->product->__('name')); ?></h1>
    <h2><?php echo e($skus->product->category->name); ?></h2>
    <p><?php echo app('translator')->get('product.price'); ?>: <b><?php echo e($skus->price); ?> <?php echo e($currencySymbol); ?></b></p>

    <?php if(isset($skus->product->properties)): ?>
        <?php $__currentLoopData = $skus->propertyOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $propertyOption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h4><?php echo e($propertyOption->property->__('name')); ?>: <?php echo e($propertyOption->__('name')); ?></h4>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <img src="<?php echo e(Storage::url($skus->product->image)); ?>">
    <p><?php echo e($skus->product->__('description')); ?></p>

    <?php if($skus->isAvailable()): ?>
        <form action="<?php echo e(route('basket-add', $skus->product)); ?>" method="POST">
            <button type="submit" class="btn btn-success" role="button"><?php echo app('translator')->get('product.add_to_cart'); ?></button>

            <?php echo csrf_field(); ?>
        </form>
    <?php else: ?>

        <span><?php echo app('translator')->get('product.not_available'); ?></span>
        <br>
        <span><?php echo app('translator')->get('product.tell_me'); ?>:</span>
        <div class="warning">
            <?php if($errors->get('email')): ?>
                <?php echo $errors->get('email')[0]; ?>

            <?php endif; ?>
        </div>
        <form method="POST" action="<?php echo e(route('subscription', $skus)); ?>">
            <?php echo csrf_field(); ?>
            <input type="text" name="email"></input>
            <button type="submit"><?php echo app('translator')->get('product.subscribe'); ?></button>
        </form>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/product.blade.php ENDPATH**/ ?>
