<?php $__env->startSection('title', __('basket.place_order')); ?>

<?php $__env->startSection('content'); ?>
    <h1><?php echo app('translator')->get('basket.approve_order'); ?>:</h1>
    <div class="container">
        <div class="row justify-content-center">
            <p><?php echo app('translator')->get('basket.full_cost'); ?>: <b><?php echo e($order->getFullSum()); ?> <?php echo e($currencySymbol); ?>.</b></p>
            <form action="<?php echo e(route('basket-confirm')); ?>" method="POST">
                <div>
                    <p><?php echo app('translator')->get('basket.personal_data'); ?>:</p>

                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2"><?php echo app('translator')->get('basket.data.name'); ?>: </label>
                            <div class="col-lg-4">
                                <input type="text" name="name" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2"><?php echo app('translator')->get('basket.data.phone'); ?>: </label>
                            <div class="col-lg-4">
                                <input type="text" name="phone" id="phone" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <?php if(auth()->guard()->guest()): ?>
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2"><?php echo app('translator')->get('basket.data.email'); ?>: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="email" id="email" value="" class="form-control">
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <br>
                    <?php echo csrf_field(); ?>
                    <input type="submit" class="btn btn-success" value="<?php echo app('translator')->get('basket.approve_order'); ?>">
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/order.blade.php ENDPATH**/ ?>