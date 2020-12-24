<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo app('translator')->get('main.online_shop'); ?>: <?php echo $__env->yieldContent('title'); ?></title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #a2d3d7">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo e(route('index')); ?>" style="color: black"><?php echo app('translator')->get('main.online_shop'); ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php echo Route::currentRouteNamed('index') ? 'class="active"' : '' ?>><a href="<?php echo e(route('index')); ?>" style="color: black; background-color: #a2d3d7"><?php echo app('translator')->get('main.all_products'); ?></a></li>
                <li <?php echo Route::currentRouteNamed('categor*') ? 'class="active"' : '' ?>><a href="<?php echo e(route('categories')); ?>" style="color: black; background-color: #a2d3d7"><?php echo app('translator')->get('main.categories'); ?></a>
                </li>
                <li <?php echo Route::currentRouteNamed('basket*') ? 'class="active"' : '' ?>><a href="<?php echo e(route('basket')); ?>"style="color: black; background-color: #a2d3d7"><?php echo app('translator')->get('main.cart'); ?></a></li>

                <li><a href="<?php echo e(route('locale', __('main.set_lang'))); ?>" style="color: black; background-color: #a2d3d7"><?php echo app('translator')->get('main.set_lang'); ?></a></li>









            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php if(auth()->guard()->guest()): ?>
                    <li><a href="<?php echo e(route('login')); ?>"style="color: black"><?php echo app('translator')->get('main.login'); ?></a></li>
                <?php endif; ?>

                <?php if(auth()->guard()->check()): ?>
                    <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                    <li><a href="<?php echo e(route('home')); ?>"style="color: black"><?php echo app('translator')->get('main.admin_panel'); ?></a></li>
                    <?php else: ?>
                    <li><a href="<?php echo e(route('person.orders.index')); ?>"style="color: black"><?php echo app('translator')->get('main.my_orders'); ?></a></li>
                    <?php endif; ?>
                    <li><a href="<?php echo e(route('get-logout')); ?>"style="color: black"><?php echo app('translator')->get('main.logout'); ?></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        <?php if(session()->has('success')): ?>
            <p class="alert alert-success"><?php echo e(session()->get('success')); ?></p>
        <?php endif; ?>
        <?php if(session()->has('warning')): ?>
            <p class="alert alert-warning"><?php echo e(session()->get('warning')); ?></p>
        <?php endif; ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6"><p>Информация</p>
                <ul>
                        <li>Almaty</li>
                    <li>bakerystore@gmail.com</li>
                    <li>87076815137</li>
                </ul>
            </div>

        </div>
    </div>
</footer>

</body>
</html>
<?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/layouts/master.blade.php ENDPATH**/ ?>
