<?php $__env->startComponent('mail::message'); ?>

Hello <?php echo e($attributes['firstName']); ?>,

This email is to confirm your reservation for flight <?php echo e($flight->flightNumber); ?> departing from <?php echo e($flight->departure); ?> and arriving at <?php echo e($flight->arrival); ?>.

Have a safe flight!

<?php echo $__env->renderComponent(); ?><?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Airlinesite\resources\views/mail/ReserveSeatView.blade.php ENDPATH**/ ?>