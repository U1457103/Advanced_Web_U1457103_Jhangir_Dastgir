<?php $__env->startSection('content'); ?>
<div class="row">



  <div class="col-md-6 col-md-offset-3">



  <h1><?php echo e($song->title); ?></h1>

<?php if(Auth::user()): ?>

<ul class="list-group">
<?php $__currentLoopData = $song->notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
  <li class="list-group-item">
    <?php echo e($note->body); ?>

    <a href="/notes/<?php echo e($note->id); ?>><?php echo e($note->id); ?>/edit" class="pull-right"><?php echo e($note->user->name); ?></a>
    <a href="/notes/<?php echo e($note->id); ?>><?php echo e($note->id); ?>/delete" class="pull-center">Delete</a>
  </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</ul>

<h2>What do you think of this singer?</h2>

<form method="POST" action="/songs/<?php echo e($song->id); ?>/notes">
<?php echo e(csrf_field()); ?>

<div class="form-group">
<textarea name="body" class="form-control"></textarea>
</div>

<div class="form-group">
<button type="submit" class="btn btn-primary">Add Comment</button>
</div>
</form>

<?php else: ?>
  You need to be signed in to view the Comments.

<?php endif; ?>


<?php if(Session::has('flash_message')): ?>
    <div class="alert alert-success">
        <?php echo e(Session::get('flash_message')); ?>

    </div>
<?php endif; ?>


<?php if(count($errors)): ?>
  <ul>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
      <li>
         <?php echo e($error); ?>

      </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
  </ul>
<?php endif; ?>


  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>