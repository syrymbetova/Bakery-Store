<?php $__env->startSection('title', 'Поставщики'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <h1>Поставщики</h1>
        <?php if(session()->has('success')): ?>
            <p class="alert alert-success"><?php echo e(session()->get('success')); ?></p>
        <?php endif; ?>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Название
                </th>
                <th>
                    Email
                </th>
                <th>
                    Действия
                </th>
            </tr>
            <?php $__currentLoopData = $merchants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $merchant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($merchant->id); ?></td>
                    <td><?php echo e($merchant->name); ?></td>
                    <td><?php echo e($merchant->email); ?></td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="<?php echo e(route('merchants.destroy', $merchant)); ?>" method="POST">
                                <a class="btn btn-success" type="button" href="<?php echo e(route('merchants.show', $merchant)); ?>">Открыть</a>
                                <a class="btn btn-warning" type="button" href="<?php echo e(route('merchants.edit', $merchant)); ?>">Редактировать</a>
                                <a class="btn btn-primary" type="button" href="<?php echo e(route('merchants.update_token', $merchant)); ?>">Обновить токен</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <input class="btn btn-danger" type="submit" value="Удалить"></form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($merchants->links()); ?>

        <a class="btn btn-success" type="button"
           href="<?php echo e(route('merchants.create')); ?>">Добавить поставщика</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/auth/merchants/index.blade.php ENDPATH**/ ?>