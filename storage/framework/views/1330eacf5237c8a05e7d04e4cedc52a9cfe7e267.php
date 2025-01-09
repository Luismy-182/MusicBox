<?php $__env->startSection('titulo'); ?>
    Crear artista
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenido'); ?>
<h2 class="pt-5">A continuación llena los campos que requieras para crear un nuevo artista</h2>
<p class="text-sm">* campos obligatorios</p>
    <div class=" md:flex md:justify-center p-5">
        
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('create-artista', [])->html();
} elseif ($_instance->childHasBeenRendered('r4taBSm')) {
    $componentId = $_instance->getRenderedChildComponentId('r4taBSm');
    $componentTag = $_instance->getRenderedChildComponentTagName('r4taBSm');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('r4taBSm');
} else {
    $response = \Livewire\Livewire::mount('create-artista', []);
    $html = $response->html();
    $_instance->logRenderedChild('r4taBSm', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/http/MusicBox/resources/views/admin/artistas/create.blade.php ENDPATH**/ ?>