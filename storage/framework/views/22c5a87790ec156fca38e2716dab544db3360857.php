<?php $__env->startSection('title', 'Купоны'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <h1>Купоны</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Код
                </th>
                <th>
                    Описание
                </th>
                <th>
                    Действия
                </th>
            </tr>
            <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($coupon->id); ?></td>
                    <td><?php echo e($coupon->code); ?></td>
                    <td><?php echo e($coupon->description); ?></td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="<?php echo e(route('coupons.destroy', $coupon)); ?>" method="POST">
                                <a class="btn btn-success" type="button"
                                   href="<?php echo e(route('coupons.show', $coupon)); ?>">Открыть</a>
                                <a class="btn btn-warning" type="button"
                                   href="<?php echo e(route('coupons.edit', $coupon)); ?>">Редактировать</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <input class="btn btn-danger" type="submit" value="Удалить"></form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($coupons->links()); ?>

        <a class="btn btn-success" type="button" href="<?php echo e(route('coupons.create')); ?>">Добавить купон</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/auth/coupons/index.blade.php ENDPATH**/ ?>