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
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.template','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.template'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <section>
        <p class="text-4xl text-center mt-8 font-semibold">Available Flights</p>
        <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-neutral-200 h-32 max-w-4xl mx-auto my-8 flex items-center-align rounded-xl shadow-sm hover:shadow-md">
            <div class="mx-20 mt-8">
                <p>Departure from: <?php echo e($flight->departure); ?> </p>
                <p>Destination: <?php echo e($flight->arrival); ?></p>
                <p>Date: <?php echo e($flight->date); ?> </p>
            </div>

            <div class="mx-20 mt-10">
                <p>Price: <span class="font-semibold">$<?php echo e($flight->price); ?></span> </p>
                <p>Seats Available: <?php echo e(144 - $flight->passengersCount); ?></p>
            </div>

            <!-- <div class="ml-4 mt-10">
                <p>Aircraft: </p>
            </div> -->

            <!-- Only displays button to reserve seat if there are seats available. -->
            <?php if($flight->passengersCount <= 144): ?>
                <button class="bg-yellow-500 w-24 h-10 mt-10 ml-auto mr-8 text-lg font-semibold rounded-xl text-white hover:bg-yellow-400"><a href="/flight/<?php echo e($flight->flightNumber); ?>">Select</a></button>

            <?php else: ?>
                <button class="bg-neutral-500 w-36 h-10 mt-10 ml-auto mr-8 text-lg font-semibold rounded-xl text-white"><a href="#">Flight is Full</a></button>
            <?php endif; ?>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Airlinesite\resources\views/search.blade.php ENDPATH**/ ?>