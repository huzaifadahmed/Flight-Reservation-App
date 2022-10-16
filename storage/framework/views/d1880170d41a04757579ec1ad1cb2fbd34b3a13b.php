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
        <div class="bg-neutral-200 w-max h-max mx-auto my-8 rounded-lg px-6 pb-8">
            <p class="text-center p-4 font-bold text-2xl">Create a new flight</p>

            <form method="POST" action="/createflight">
                <?php echo csrf_field(); ?>
                <div class="flex">
                    <div class="w-1/2">
                        <label for="departure" class="font-semibold block">Departure</label>
                        <select name="departure" class="border-2 border-black rounded-md p-1 w-full">
                            <option value="Toronto">Toronto</option>
                            <option value="Calgary">Calgary</option>
                            <option value="Edmonton">Edmonton</option>
                            <option value="Vancouver">Vancouver</option>
                            <option value="Halifax">Halifax</option>
                            <option value="Whitehorse">Whitehorse</option>
                        </select>
                        <?php $__errorArgs = ['departure'];
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
                    <div class="ml-6 w-1/2">
                        <label for="arrival" class="font-semibold block">Arrival</label>
                        <select name="arrival" class="border-2 border-black rounded-md p-1 w-full">
                            <option value="Toronto">Toronto</option>
                            <option value="Calgary">Calgary</option>
                            <option value="Edmonton">Edmonton</option>
                            <option value="Vancouver">Vancouver</option>
                            <option value="Halifax">Halifax</option>
                            <option value="Whitehorse">Whitehorse</option>
                        </select>
                        <?php $__errorArgs = ['arrival'];
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
                <div class="flex mt-4">
                    <div class="">
                        <label for="basePrice" class="font-semibold block">Base Price</label>
                        <input name="basePrice" type="number" class="rounded-md p-1 hover:shadow-md" placeholder="$500" value="<?php echo e(old('basePrice')); ?>" min="1">
                        <?php $__errorArgs = ['basePrice'];
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
                    <div class="ml-6">
                        <label for="date" class="font-semibold block">Date</label>
                        <input name="date" type="date" class="rounded-md p-1 hover:shadow-md" value="<?php echo e(old('date')); ?>">
                        <?php $__errorArgs = ['date'];
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
                <div class="mt-4">
                    <label for="aircraft" class="font-semibold">Select Aircraft:</label>
                    <select name="aircraft" class="p-1 w-full">
                        <option value="aircraft_1">Aircraft 1</option>
                        <option value="aircraft_2">Aircraft 2</option>
                        <option value="aircraft_3">Aircraft 3</option>
                    </select>
                    <?php $__errorArgs = ['aircraft'];
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
                <div class="mx-auto w-max mt-8">
                    <button type="submit" class="bg-green-600 w-24 h-10 text-lg font-semibold rounded-xl text-white hover:bg-green-500">Create</button>
                </div>
            </form>

        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Airlinesite\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>