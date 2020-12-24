<p><?php echo app('translator')->get('mail.order_created.dear'); ?> <?php echo e($name); ?></p>

<p><?php echo app('translator')->get('mail.order_created.your_order'); ?> <?php echo e($fullSum); ?> <?php echo app('translator')->get('mail.order_created.created'); ?></p>

<table>
    <tbody>
    <?php $__currentLoopData = $order->skus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <a href="<?php echo e(route('sku', [$sku->product->category->code, $sku->product->code, $sku])); ?>">
                    <img height="56px" src="<?php echo e(Storage::url($sku->product->image)); ?>">
                    <?php echo e($sku->product->__('name')); ?>

                </a>
            </td>
            <td><span class="badge"><?php echo e($sku->countInOrder); ?></span>
                <div class="btn-group form-inline">
                    <?php echo $sku->product->__('description'); ?>

                </div>
            </td>
            <td><?php echo e($sku->price); ?> <?php echo e($currencySymbol); ?>.</td>
            <td><?php echo e($sku->getPriceForCount()); ?> <?php echo e($currencySymbol); ?>.</td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/mail/order_created.blade.php ENDPATH**/ ?>
