<?php $__env->startSection('content'); ?>











<?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

  <div>
<p>
    ID of the User: <?php echo e($note->user_id); ?>

</p>

<P>
  What the user has written: <?php echo e($note->body); ?>

</P>
  </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>