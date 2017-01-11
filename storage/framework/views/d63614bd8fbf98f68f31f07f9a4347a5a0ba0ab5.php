<?php $__env->startSection('content'); ?>

  <h1><?php echo e($user->name); ?></h1>

<ul class="list-group">
<?php $__currentLoopData = $user->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

<li class="list-group-item">
  <?php echo e($detail->body); ?>

</li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

</ul>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>