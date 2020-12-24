<?php $__env->startSection('title', 'Свойства'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <h1>Свойства</h1>
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
                    Действия
                </th>
            </tr>
            <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($property->id); ?></td>
                    <td><?php echo e($property->name); ?></td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="<?php echo e(route('properties.destroy', $property)); ?>" method="POST">
                                <a class="btn btn-success" type="button" href="<?php echo e(route('properties.show', $property)); ?>">Открыть</a>
                                <a class="btn btn-warning" type="button" href="<?php echo e(route('properties.edit', $property)); ?>">Редактировать</a>
                                <a class="btn btn-primary" type="button" href="<?php echo e(route('property-options.index', $property)); ?>">Значение свойства</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <input class="btn btn-danger" type="submit" value="Удалить"></form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($properties->links()); ?>

        <a class="btn btn-success" type="button"
           href="<?php echo e(route('properties.create')); ?>">Добавить свойство</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/auth/properties/index.blade.php ENDPATH**/ ?>