<?php $__env->startSection('titulo'); ?>
    Inicia sesión
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

        <div class="md:w-4/12 shadow-xl rounded-lg p-6 bg-white">
            <form  method="POST">
               <?php echo csrf_field(); ?>
            
                <div class="mb-5">
                    <label for="email"  class="text-gray-500 block mb-2">Email</label>
                    <input type="text" name="email" id="email" placeholder="Tu email" class="border p-3 w-full rounded-lg <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="bg-red-500 text-white p-1 text-center"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <div class="mb-5">
                    <label for="password"  class="text-gray-500 block mb-2">Password</label>
                    <input type="password" name="password" id="password" placeholder="Tu password" class="border p-3 w-full rounded-lg <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> ">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="bg-red-500 text-white p-1 text-center"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mb-5 flex items-center gap-1">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Mantener sesión</label>

                </div>


                <input type="submit" value="Iniciar sesión" class="bg-gray-500 w-full transition-colors rounded-lg text-white p-2 text-center hover:bg-gray-600 cursor-pointer">
            </form>

            <div class="text-center mt-5">
                <a href="<?php echo e(route('passwordReset.index')); ?>">¿Olvidaste tu contraseña?</a>

                <?php if(session('mensaje')): ?>
                <p class="text-center p-1 bg-red-500 text-white mt-2"><?php echo e(session('mensaje')); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/http/MusicBox/resources/views/auth/login.blade.php ENDPATH**/ ?>