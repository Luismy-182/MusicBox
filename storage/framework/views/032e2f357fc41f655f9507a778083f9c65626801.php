<?php $__env->startSection('titulo'); ?>
    Validación de cuenta
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>

<div class="md:flex gap-10">
    <div class="md:w-6/12 flex items-center">
        <picture>
            <source src="<?php echo e(asset('img/login.avif')); ?>" type="image/avif">
            <source src="<?php echo e(asset('img/login.webp')); ?>" type="image/webp">
            <img with=300 height="200" loading="lazy" src="<?php echo e(asset('img/login.jpg')); ?>" alt="Logo de silverstein">
        </picture>
    </div>


    <div class="md:w-4/12 rounded-lg p-6 bg-white">
    <?php if(session('mensaje')): ?>
        <p><?php echo e(session($mensaje)); ?></p>
    <?php else: ?>
        <p class="bg-green-500 text-center text-white p-2 text-sm">Cuenta confirmada! Ahora puedes iniciar sesion y disfrutar de tus compras</p>
    <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/http/MusicBox/resources/views/auth/verify-email.blade.php ENDPATH**/ ?>