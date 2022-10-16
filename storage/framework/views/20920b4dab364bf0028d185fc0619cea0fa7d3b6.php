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
        <p class="text-2xl text-center mt-8 font-semibold">Flight from <?php echo e($flight->departure); ?> to <?php echo e($flight->arrival); ?> </p>
        <div class="bg-blue-300 h-48 max-w-4xl mx-auto mb-8 mt-6 pr-4 flex items-center-align rounded-xl shadow-sm hover:shadow-md">
            <div class="mx-14 mt-10">
                <p class="text-lg font-semibold mb-8">Date: <?php echo e($flight->date); ?> </p>
            </div>

            <div class="mx-20 mt-10">
                <p class="mb-8 text-lg font-semibold">Price: $<?php echo e($flight->price); ?> </p>
                <p class="mb-8 text-lg font-semibold">Seats Available: <?php echo e(132 - $flight->passengersCount); ?></p>
            </div>
            <div class="mt-10">
                <p class="text-lg font-semibold">Flight Number: <?php echo e($flight->flightNumber); ?></p>
            </div>
        </div>

        <div class="bg-neutral-200 h-max max-w-4xl mx-auto rounded-lg mb-8 p-4">
        <?php if($flight->passengersCount <= 144): ?>
            <p class="text-center font-semibold text-2xl">Reserve Your Seat</p>
            <form method="POST" action="/checkout" class="mt-4">
                <?php echo csrf_field(); ?>
                <div class="flex">
                    <div class="ml-20">
                        <label for="firstName" class="font-semibold">First Name</label>
                        <input name="firstName" type="text" class="rounded-md p-1 hover:shadow-md" placeholder="John" value="<?php echo e(old('firstName')); ?>">
                        <?php $__errorArgs = ['firstName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="ml-16">
                        <label for="lastName" class="font-semibold">Last Name</label>
                        <input name="lastName" type="text" class="rounded-md p-1 hover:shadow-md" placeholder="Doe" value="<?php echo e(old('lastName')); ?>">
                        <?php $__errorArgs = ['lastName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="ml-16">
                        <label for="email" class="font-semibold">Email</label>
                        <input name="email" type="email" class="rounded-md p-1 hover:shadow-md" placeholder="johndoe@mail.com" value="<?php echo e(old('email')); ?>">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="mt-10 w-max mx-auto">
                    <label for="flightNumber" class="font-semibold">Flight Number</label>
                    <input name="flightNumber" class="bg-neutral-400 rounded-md text-black p-1" value="<?php echo e($flight->flightNumber); ?>">
                    <?php $__errorArgs = ['flightNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <div class="w-max mx-auto mt-10">
                    <button type="submit" class="bg-green-600 w-44 h-10 text-lg font-semibold rounded-xl text-white hover:bg-green-500">Purchase Ticket</button>
                </div>


            </form>
        </div>
    <?php else: ?>
        <p class="text-center font-semibold text-2xl">This flight is fully booked.</p>
    <?php endif; ?>
    </section>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Airlinesite\resources\views/flight.blade.php ENDPATH**/ ?>