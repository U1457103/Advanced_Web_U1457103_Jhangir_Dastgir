<?php $__env->startSection('content'); ?>

  <h1>Are They Good? Are They Bad?</h1>

<p>
   What do you think!!! Click On The Singers And Write Your Comments!!
</p>

  <?php $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <div>
          <a href="/songs/<?php echo e($song->id); ?>"><?php echo e($song->title); ?></a>

    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>









<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>