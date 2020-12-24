<?php $__env->startSection('title', 'Категории'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <h1>Категории</h1>
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
                    Действия
                </th>
            </tr>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($category->id); ?></td>
                    <td><?php echo e($category->code); ?></td>
                    <td><?php echo e($category->name); ?></td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="<?php echo e(route('categories.destroy', $category)); ?>" method="POST">
                                <a class="btn btn-success" type="button" href="<?php echo e(route('categories.show', $category)); ?>">Открыть</a>
                                <a class="btn btn-warning" type="button" href="<?php echo e(route('categories.edit', $category)); ?>">Редактировать</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <input class="btn btn-danger" type="submit" value="Удалить"></form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($categories->links()); ?>

        <a class="btn btn-success" type="button"
           href="<?php echo e(route('categories.create')); ?>">Добавить категорию</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/auth/categories/index.blade.php ENDPATH**/ ?>