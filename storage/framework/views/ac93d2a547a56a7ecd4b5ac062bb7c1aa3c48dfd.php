<?php $__env->startSection('title', 'Авторизация'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Авторизация</div>

            <div class="card-body">
                <form method="POST" action="<?php echo e(route('login')); ?>" aria-label="Login">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control"
                                   name="email" value="" required autofocus>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control"
                                   name="password" required>

                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Войти
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/auth/login.blade.php ENDPATH**/ ?>
