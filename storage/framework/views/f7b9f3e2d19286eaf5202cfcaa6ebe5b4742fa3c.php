<?php $__env->startSection('titulo'); ?>
    Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div>
    <h2 class="font-bold text-xl mb-5">Artistas más recientes</h2> 
    
    <?php if(session()->has('mensaje')): ?>
        <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3"><?php echo e(session('mensaje')); ?></div>
    <?php endif; ?>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mostrar-artistas', [])->html();
} elseif ($_instance->childHasBeenRendered('Lp00FRI')) {
    $componentId = $_instance->getRenderedChildComponentId('Lp00FRI');
    $componentTag = $_instance->getRenderedChildComponentTagName('Lp00FRI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Lp00FRI');
} else {
    $response = \Livewire\Livewire::mount('mostrar-artistas', []);
    $html = $response->html();
    $_instance->logRenderedChild('Lp00FRI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    
    <div class="text-center p-5 shadow font-bold ">
        <a href="#">Ver todos los artistas</a>   
    </div>
    
  
</div>

<div >
    <h2 class="font-bold text-xl mb-5">Albums más recientes</h2>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/http/MusicBox/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>