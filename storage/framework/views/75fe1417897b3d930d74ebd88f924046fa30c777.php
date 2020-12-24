<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Админка: <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('index')); ?>">
                Вернуться на сайт
            </a>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                    <li><a href="<?php echo e(route('categories.index')); ?>">Категории</a></li>
                    <li><a href="<?php echo e(route('products.index')); ?>">Товары</a>
                    <li><a href="<?php echo e(route('properties.index')); ?>">Свойства</a>
                    <li><a href="<?php echo e(route('coupons.index')); ?>">Купоны</a>
                    <li><a href="<?php echo e(route('merchants.index')); ?>">Поставщики</a>
                    </li>
                    <li><a href="<?php echo e(route('home')); ?>">Заказы</a></li>
                    <?php endif; ?>
                </ul>

                <?php if(auth()->guard()->guest()): ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>">Войти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>">Зарегистрироваться</a>
                        </li>
                    </ul>
                <?php endif; ?>

                <?php if(auth()->guard()->check()): ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?> Администратор <?php else: ?> <?php echo e(Auth::user()->name); ?> <?php endif; ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Выйти
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                      style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\Users\Asus\PhpstormProjects\first\bakery-store\resources\views/auth/layouts/master.blade.php ENDPATH**/ ?>
