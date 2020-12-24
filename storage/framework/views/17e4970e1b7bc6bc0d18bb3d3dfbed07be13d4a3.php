<div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="background-color: #a2d3d7">
        <div class="labels">
            <?php if($sku->product->isNew()): ?>
                <span class="badge badge-success"><?php echo app('translator')->get('main.properties.new'); ?></span>
            <?php endif; ?>








        </div>
        <img src="<?php echo e(Storage::url($sku->product->image)); ?>" alt="<?php echo e($sku->product->__('name')); ?>">
        <div class="caption">
            <h3><?php echo e($sku->product->__('name')); ?></h3>
            <?php if(isset($sku->product->properties)): ?>
                <?php $__currentLoopData = $sku->propertyOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $propertyOption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h4><?php echo e($propertyOption->property->__('name')); ?>: <?php echo e($propertyOption->__('name')); ?></h4>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <p><?php echo e($sku->price); ?> <?php echo e($currencySymbol); ?></p>
            <p>
            <form action="<?php echo e(route('basket-add', $sku)); ?>" method="POST">
                <?php if($sku->isAvailable()): ?>
                    <button type="submit" class="btn btn-primary" role="button"><?php echo app('translator')->get('main.add_to_basket'); ?></button>
                <?php else: ?>
                    <?php echo app('translator')->get('main.not_available'); ?>
                <?php endif; ?>
                <a href="<?php echo e(route('sku',
                    [isset($category) ? $category->code :
                    $sku->product->category->code, $sku->product->code, $sku->id])); ?>"
                   class="btn btn-default"
                   role="button"><?php echo app('translator')->get('main.more'); ?></a>
                <?php echo csrf_field(); ?>
            </form>
            </p>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/layouts/card.blade.php ENDPATH**/ ?>