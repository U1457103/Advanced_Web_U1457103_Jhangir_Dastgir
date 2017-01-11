<?php $__env->startSection('content'); ?>

  <h1>All Users</h1>


<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

  <div>
<p>
    Username: <?php echo e($user->name); ?>

</p>

<P>
  Email Address: <?php echo e($user->email); ?>

</P>
  </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>