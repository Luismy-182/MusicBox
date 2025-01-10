<?php $__env->startSection('titulo'); ?>
    editando artista 
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenido'); ?>
<h2 class="pt-5">A continuación llena los campos que requieras para crear un nuevo artista</h2>
<p class="text-sm">* campos obligatorios</p>
    <div class=" md:flex md:justify-center p-5">
        
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('edit-artista', ['artista' => $artista])->html();
} elseif ($_instance->childHasBeenRendered('axyq9SB')) {
    $componentId = $_instance->getRenderedChildComponentId('axyq9SB');
    $componentTag = $_instance->getRenderedChildComponentTagName('axyq9SB');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('axyq9SB');
} else {
    $response = \Livewire\Livewire::mount('edit-artista', ['artista' => $artista]);
    $html = $response->html();
    $_instance->logRenderedChild('axyq9SB', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/http/MusicBox/resources/views/admin/artistas/edit.blade.php ENDPATH**/ ?>