<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="note-container single-note">
         <h1>Edit your note</h1>
         <form action="<?php echo e(route('note.update', $note)); ?>" method="POST" class="note">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
             <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here">
                <?php echo e($note->note); ?>

             </textarea>
             <div class="note-buttons">
                 <a href="<?php echo e(route('note.index')); ?>" class="note-cancel-button">Cancel</a>
                 <button class="note-submit-button">Submit</button>
             </div>
         </form>
    </div>    
  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
 <?php /**PATH C:\Users\janmi\laravell-projekt\resources\views/note/edit.blade.php ENDPATH**/ ?>