<?php $__env->startSection('title', 'Товары'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <h1>Товары</h1>
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
                    Название
                </th>
                <th>
                    Категория
                </th>
                <th>
                    Кол-во товарных предложений
                </th>
                <th>
                    Действия
                </th>
            </tr>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->id); ?></td>
                    <td><?php echo e($product->code); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->category->name); ?></td>
                    <td></td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="<?php echo e(route('products.destroy', $product)); ?>" method="POST">
                                <a class="btn btn-success" type="button"
                                   href="<?php echo e(route('products.show', $product)); ?>">Открыть</a>


                                <a class="btn btn-warning" type="button"
                                   href="<?php echo e(route('products.edit', $product)); ?>">Редактировать</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <input class="btn btn-danger" type="submit" value="Удалить"></form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($products->links()); ?>

        <a class="btn btn-success" type="button" href="<?php echo e(route('products.create')); ?>">Добавить товар</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/auth/products/index.blade.php ENDPATH**/ ?>