<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.header','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.header'); ?>
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
<body>


    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.template','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.template'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <section class="xl:max-w-7xl mx-auto">
            <div class="h-full bg-cover" style="background-image:url(images/background1.png)">
                <div>
                    <p class="text-6xl font-bold text-blue-500 pt-44 pl-12">Daily Flights Across Canada!</p>
                    <p class="text-4xl font-bold text-blue-500 pt-12 pl-12 pb-8">Join us for your next adventure.</p>
                    <p class="text-xl font-bold text-blue-500 pt-12 pl-12 pb-8">Flights now starting at $199</p>
                </div>
                <div class="text-right">
                    <button class="bg-blue-700 p-2 w-40 text-lg font-semibold rounded-xl text-white mb-12 mr-36 hover:bg-blue-500"><a href="/bookflight">Check Availibility</a></button>
                </div>
            </div>

            <div class="bg-neutral-700">
                <p class="text-white text-6xl font-bold text-center p-4">Discover Canada</p>
                <img src="images/torontoicon.png" class="mx-auto" height="150" width="150">
                <p class="text-white text-2xl font-bold text-center p-4">Daily flights from <span class="text-blue-500">Toronto</span> to Edmonton, Calgary, Vancover, Halifax, Whitehorse</p>
            </div>
        </section>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    
</body>
</html><?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Airlinesite\resources\views/home.blade.php ENDPATH**/ ?>