<?php $__env->startSection('title', __('basket.cart')); ?>

<?php $__env->startSection('content'); ?>
    <h1><?php echo app('translator')->get('basket.cart'); ?></h1>
    <p><?php echo app('translator')->get('basket.ordering'); ?></p>
    <div class="panel"  style="background-color: #a2d3d7">
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?php echo app('translator')->get('basket.name'); ?></th>
                <th><?php echo app('translator')->get('basket.count'); ?></th>
                <th><?php echo app('translator')->get('basket.price'); ?></th>
                <th><?php echo app('translator')->get('basket.cost'); ?></th>
            </tr>
            </thead>
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
                            <form action="<?php echo e(route('basket-remove', $sku)); ?>" method="POST">
                                <button type="submit" class="btn btn-danger" href=""><span
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                <?php echo csrf_field(); ?>
                            </form>
                            <form action="<?php echo e(route('basket-add', $sku)); ?>" method="POST">
                                <button type="submit" class="btn btn-success"
                                        href=""><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </td>
                    <td><?php echo e($sku->price); ?> <?php echo e($currencySymbol); ?></td>
                    <td><?php echo e($sku->price * $sku->countInOrder); ?> <?php echo e($currencySymbol); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td colspan="3"><?php echo app('translator')->get('basket.full_cost'); ?>:</td>
                <?php if($order->hasCoupon()): ?>
                    <td><strike><?php echo e($order->getFullSum(false)); ?></strike>
                        <b><?php echo e($order->getFullSum()); ?></b> <?php echo e($currencySymbol); ?></td>
                <?php else: ?>
                    <td><?php echo e($order->getFullSum()); ?> <?php echo e($currencySymbol); ?></td>
                <?php endif; ?>
            </tr>
            </tbody>
        </table>

















        <br>
        <div class="row">
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success"
                   href="<?php echo e(route('basket-place')); ?>"><?php echo app('translator')->get('basket.place_order'); ?></a>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/basket.blade.php ENDPATH**/ ?>
