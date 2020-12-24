<?php $__env->startSection('title', 'Заказ ' . $order->id); ?>

<?php $__env->startSection('content'); ?>
    <div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <h1>Заказ №<?php echo e($order->id); ?></h1>
                    <p>Заказчик: <b><?php echo e($order->name); ?></b></p>
                    <p>Номер телефона: <b><?php echo e($order->phomne); ?></b></p>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Кол-во</th>
                            <th>Цена</th>
                            <th>Стоимость</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $skus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <a href="<?php echo e(route('sku', [$sku->product->category->code, $sku->product->code, $sku])); ?>">
                                        <img height="56px"
                                             src="<?php echo e(Storage::url($sku->product->image)); ?>">
                                        <?php echo e($sku->product->name); ?>

                                    </a>
                                </td>
                                <td><span class="badge"> <?php echo e($sku->pivot->count); ?></span></td>
                                <td><?php echo e($sku->pivot->price); ?> <?php echo e($order->currency->symbol); ?></td>
                                <td><?php echo e($sku->pivot->price * $sku->pivot->count); ?> <?php echo e($order->currency->symbol); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td colspan="3">Общая стоимость:</td>
                            <td><?php echo e($order->sum); ?> <?php echo e($order->currency->symbol); ?></td>
                        </tr>
                        <?php if($order->hasCoupon()): ?>
                            <tr>
                                <td colspan="3">Был использован купон:</td>
                                <td><a href="<?php echo e(route('coupons.show', $order->coupon)); ?>"><?php echo e($order->coupon->code); ?></a></td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/auth/orders/show.blade.php ENDPATH**/ ?>