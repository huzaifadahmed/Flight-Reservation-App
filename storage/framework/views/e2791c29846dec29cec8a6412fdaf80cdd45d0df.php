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
        <section class="xl:max-w-7xl mx-auto max-w-7xl">
            <div>
                <img src="images/jet2.jpg">
            </div>
            
            <p class="text-center font-semibold text-4xl mt-4 mb-4">Select your flight date</p>


            <div class="bg-gray-200 w-max h-36 mx-auto mt-4 mb-4">

                <form name="form" id="form" method="GET" action="/search" class=" px-4 pt-6 flex items-center-align rounded-md">

                    <div class="mx-12">
                        <label for="from" class="font-semibold block">From</label>
                        <select name="from" id="from" class="border-2 border-black rounded-md p-1">
                            <option value="Toronto">Toronto</option>
                            <option value="Calgary">Calgary</option>
                            <option value="Edmonton">Edmonton</option>
                            <option value="Vancouver">Vancouver</option>
                            <option value="Halifax">Halifax</option>
                            <option value="Whitehorse">Whitehorse</option>
                        </select>

                    </div>

                    <div class="mx-12">
                        <label for="to" class="font-semibold block">To</label>
                        <select name="to" class="border-2 border-black rounded-md p-1">
                            <option value="Toronto">Toronto</option>
                            <option value="Calgary">Calgary</option>
                            <option value="Edmonton">Edmonton</option>
                            <option value="Vancouver">Vancouver</option>
                            <option value="Halifax">Halifax</option>
                            <option value="Whitehorse">Whitehorse</option>
                        </select>

                    </div>

                    <div class="mx-12"> 
                        <label for="date" class="font-semibold block">Search for Departing Flights Between:</label>
                        <div>
                            <input type="date" name="fromDate" class="border-2 border-black rounded-md p-1" value="<?php echo e(old('fromDate')); ?>">
                            - <input type="date" name="toDate" class="border-2 border-black rounded-md p-1" value="<?php echo e(old('toDate')); ?>">
                        </div>
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
                    
                    <button type="submit" class="bg-blue-700 w-28 h-10 mt-4 text-lg font-semibold rounded-xl text-white hover:bg-blue-500">Search</button>

                </form>
                <?php $__errorArgs = ['to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-sm text-center block mt-4"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Airlinesite\resources\views/bookflight.blade.php ENDPATH**/ ?>