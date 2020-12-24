<?php $__env->startSection('title', 'Регистрация'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Регистрация</div>
            <form method="POST" action="<?php echo e(route('register')); ?>" aria-label="Register">
                <?php echo csrf_field(); ?>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Имя</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name"
                               value="" required autofocus>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control"
                               name="email" value="" required>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control"
                               name="password" required>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Подтвердите
                        пароль</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Зарегистрироваться
                        </button>
                    </div>
                </div>
            </form>
            <div class="card-body">
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/auth/register.blade.php ENDPATH**/ ?>
