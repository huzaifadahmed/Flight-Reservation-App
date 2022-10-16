<nav class="h-24 bg-blue-200 p-2 pl-6">

<div class="flex items-center mx-auto xl:max-w-7xl">
    <a href="/" class="hover:opacity-50"><img src="/images/logo.png" height="80" width="80"></a>
    <div class="ml-auto mr-12">
        <a href="/" class="ml-12 text-blue-700 font-semibold hover:text-blue-500">Home</a>
        <a href="/confirm" class="ml-12 text-blue-700 font-semibold hover:text-blue-500">Confirm Reservation</a>
        <a href="/bookflight" class="ml-12 text-blue-700 font-semibold hover:text-blue-500">Book Flight</a>
    </div>
    
    <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Admin <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
    <!-- Dropdown menu -->
    <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
        <?php if(auth()->guard()->guest()): ?>
            
        <li>
            <a href="/adminlogin" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Log In</a>
        </li>
        <?php endif; ?>

        <?php if(auth()->guard()->check()): ?>
        <li>
            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="document.querySelector('#logout-form').submit()">Log Out</a>
        </li>
        <li>
            <a href="/dashboard" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
        </li>
        <form id="logout-form" method="POST" action="/logout" class="hidden">
            <?php echo csrf_field(); ?>
        </form>
        <?php endif; ?>
        </ul>
    </div>

</div>

</nav>
<?php echo e($slot); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.flash','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('flash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<footer class="h-48 bg-blue-200">

<img src="/images/logo.png" height="150" width="150" class="mx-auto">

</footer><?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Airlinesite\resources\views/components/layout/template.blade.php ENDPATH**/ ?>