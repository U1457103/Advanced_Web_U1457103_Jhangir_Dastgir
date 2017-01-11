<?php $__env->startSection('content'); ?>

  <?php if(Auth::user()): ?>

  <h1>Edit your comment</h1>

  <form method="POST" action="/notes/<?php echo e($note->id); ?>">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PATCH')); ?>


  <div class="form-group">
  <textarea name="body" class="form-control"><?php echo e($note->body); ?></textarea>
  </div>

  <div class="form-group">
  <button type="submit" class="btn btn-primary">Update Your Comment</button>
  </div>
  </form>
  <?php if(Session::has('flash_message')): ?>
      <div class="alert alert-success">
          <?php echo e(Session::get('flash_message')); ?>

      </div>
  <?php endif; ?>

<?php else: ?>

  You need to be signed in order to edit the comments!

<?php endif; ?>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>