
    <form class="space-y-5 md:w-5/12 shadow-xl p-5" method="POST" wire:submit.prevent='editArtista' enctype="multipart/form-data">

        <div>
            <label for="nombre"  class="text-gray-500 block mb-2">Nombre del artista *</label>
            <input type="text" wire:model="nombre" value="<?php echo e(old('nombre')); ?>" id="nombre" placeholder="Nombre de artista o banda" class="border p-3 w-full rounded-lg <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  ">

            <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mostrar-alertas', ['message' => $message])->html();
} elseif ($_instance->childHasBeenRendered('l3302383093-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3302383093-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3302383093-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3302383093-0');
} else {
    $response = \Livewire\Livewire::mount('mostrar-alertas', ['message' => $message]);
    $html = $response->html();
    $_instance->logRenderedChild('l3302383093-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div>
            <label for="voz"  class="text-gray-500 block mb-2">Nombre del vocalista *</label>
            <input type="text" wire:model="voz" value="<?php echo e(old('voz')); ?>" id="voz" placeholder="Nombre de vocalista" class="border p-3 w-full rounded-lg <?php $__errorArgs = ['voz'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  ">

            <?php $__errorArgs = ['voz'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mostrar-alertas', ['message' => $message])->html();
} elseif ($_instance->childHasBeenRendered('l3302383093-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3302383093-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3302383093-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3302383093-1');
} else {
    $response = \Livewire\Livewire::mount('mostrar-alertas', ['message' => $message]);
    $html = $response->html();
    $_instance->logRenderedChild('l3302383093-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div>
            <label for="guitarra1"  class="text-gray-500 block mb-2">Nombre del primer guitarrista *</label>
            <input type="text" wire:model="guitarra1" value="<?php echo e(old('guitarra1')); ?>" id="guitarra1" placeholder="Nombre del primer guitarrista" class="border p-3 w-full rounded-lg <?php $__errorArgs = ['guitarra1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  ">

            <?php $__errorArgs = ['guitarra1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mostrar-alertas', ['message' => $message])->html();
} elseif ($_instance->childHasBeenRendered('l3302383093-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l3302383093-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3302383093-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3302383093-2');
} else {
    $response = \Livewire\Livewire::mount('mostrar-alertas', ['message' => $message]);
    $html = $response->html();
    $_instance->logRenderedChild('l3302383093-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div>
            <label for="guitarra2"  class="text-gray-500 block mb-2">Nombre del segundo guitarrista</label>
            <input type="text" wire:model="guitarra2" value="<?php echo e(old('guitarra2')); ?>" id="guitarra2" placeholder="Nombre del segundo guitarrista" class="border p-3 w-full rounded-lg <?php $__errorArgs = ['guitarra2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  ">

            <?php $__errorArgs = ['guitarra2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mostrar-alertas', ['message' => $message])->html();
} elseif ($_instance->childHasBeenRendered('l3302383093-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l3302383093-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3302383093-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3302383093-3');
} else {
    $response = \Livewire\Livewire::mount('mostrar-alertas', ['message' => $message]);
    $html = $response->html();
    $_instance->logRenderedChild('l3302383093-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div>
            <label for="bateria"  class="text-gray-500 block mb-2">Nombre del baterista *</label>
            <input type="text" wire:model="bateria" value="<?php echo e(old('bateria')); ?>" id="bateria" placeholder="Nombre del baterista" class="border p-3 w-full rounded-lg <?php $__errorArgs = ['bateria'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  ">

            <?php $__errorArgs = ['bateria'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mostrar-alertas', ['message' => $message])->html();
} elseif ($_instance->childHasBeenRendered('l3302383093-4')) {
    $componentId = $_instance->getRenderedChildComponentId('l3302383093-4');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3302383093-4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3302383093-4');
} else {
    $response = \Livewire\Livewire::mount('mostrar-alertas', ['message' => $message]);
    $html = $response->html();
    $_instance->logRenderedChild('l3302383093-4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div>
            <label for="bajo"  class="text-gray-500 block mb-2">Nombre del bajista *</label>
            <input type="text" wire:model="bajo" value="<?php echo e(old('bajo')); ?>" id="bajo" placeholder="Nombre del bajista" class="border p-3 w-full rounded-lg <?php $__errorArgs = ['bajo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  ">

            <?php $__errorArgs = ['bajo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mostrar-alertas', ['message' => $message])->html();
} elseif ($_instance->childHasBeenRendered('l3302383093-5')) {
    $componentId = $_instance->getRenderedChildComponentId('l3302383093-5');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3302383093-5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3302383093-5');
} else {
    $response = \Livewire\Livewire::mount('mostrar-alertas', ['message' => $message]);
    $html = $response->html();
    $_instance->logRenderedChild('l3302383093-5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    

        <div>
            <label for="descripcion"  class="text-gray-500 block mb-2">Descripcion de la banda *</label>
            <textarea wire:model="descripcion" id="descripcion" class="w-full h-72 border rounded-md shadow-sm <?php $__errorArgs = ['descripcion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"></textarea>


            <?php $__errorArgs = ['descripcion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mostrar-alertas', ['message' => $message])->html();
} elseif ($_instance->childHasBeenRendered('l3302383093-6')) {
    $componentId = $_instance->getRenderedChildComponentId('l3302383093-6');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3302383093-6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3302383093-6');
} else {
    $response = \Livewire\Livewire::mount('mostrar-alertas', ['message' => $message]);
    $html = $response->html();
    $_instance->logRenderedChild('l3302383093-6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div>
            <label for="imagen" class="text-gray-500 block mb-2">Imagen banda *</label>
            <input type="file" accept="image/*" class="block mt-1 w-full" wire:model="imagen">

            <div class="my-5 w-90">
                <p>Imagen actual: </p>
                <img class="w-full aspect-square object-cover " src="<?php echo e(asset('storage/artistas/'.$nombre.'/'. $imagen)); ?>"  alt="imagen <?php echo e($nombre); ?>">
            </div>


        </div>
        <input type="submit" class="bg-indigo-500 hover:bg-indigo-700 cursor-pointer p-2 text-white rounded-md w-full" value="Actualizar artista"></input>
    </form>
<?php /**PATH /srv/http/MusicBox/resources/views/livewire/edit-artista.blade.php ENDPATH**/ ?>