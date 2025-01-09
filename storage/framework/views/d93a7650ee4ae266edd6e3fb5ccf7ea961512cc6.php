<div>
    <?php $__empty_1 = true; $__currentLoopData = $artistas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <p><?php echo e($artistas->nombre); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>No hay artistas paps</p>
    <?php endif; ?>
</div><?php /**PATH /srv/http/MusicBox/resources/views/components/artistas.blade.php ENDPATH**/ ?>