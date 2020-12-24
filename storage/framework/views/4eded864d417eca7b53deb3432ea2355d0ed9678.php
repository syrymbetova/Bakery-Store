<?php $__env->startSection('title', 'Товарные предложения'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <h1>Товарные предложения</h1>
        <h2><?php echo e($product->name); ?></h2>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Товарное предложение (свойства)
                </th>
                <th>
                    Действия
                </th>
            </tr>
            <?php $__currentLoopData = $skus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($sku->id); ?></td>
                    <td><?php echo e($sku->propertyOptions->map->name->implode(', ')); ?></td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="<?php echo e(route('skus.destroy', [$product, $sku])); ?>" method="POST">
                                <a class="btn btn-success" type="button" href="<?php echo e(route('skus.show', [$product, $sku])); ?>">Открыть</a>
                                <a class="btn btn-warning" type="button" href="<?php echo e(route('skus.edit', [$product, $sku])); ?>">Редактировать</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <input class="btn btn-danger" type="submit" value="Удалить"></form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($skus->links()); ?>

        <a class="btn btn-success" type="button"
           href="<?php echo e(route('skus.create', $product)); ?>">Добавить Sku</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/auth/skus/index.blade.php ENDPATH**/ ?>