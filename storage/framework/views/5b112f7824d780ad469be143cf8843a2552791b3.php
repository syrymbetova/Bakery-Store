<?php $__env->startSection('title', 'Заказы'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <h1>Заказы</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Имя
                </th>
                <th>
                    Телефон
                </th>
                <th>
                    Когда отправлен
                </th>
                <th>
                    Сумма
                </th>
                <th>
                    Действия
                </th>
            </tr>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($order->id); ?></td>
                    <td><?php echo e($order->name); ?></td>
                    <td><?php echo e($order->phone); ?></td>
                    <td><?php echo e($order->created_at->format('H:i d/m/Y')); ?></td>
                    <td><?php echo e($order->sum); ?> <?php echo e($order->currency->symbol); ?></td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-success" type="button"
                               <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                               href="<?php echo e(route('orders.show', $order)); ?>"
                               <?php else: ?>
                               href="<?php echo e(route('person.orders.show', $order)); ?>"
                                <?php endif; ?>
                            >Открыть</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($orders->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/auth/orders/index.blade.php ENDPATH**/ ?>