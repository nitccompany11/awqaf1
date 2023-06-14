<div class="col-md-12 text-center">
              <?php if(session()->has('success')): ?>
              <div class="alert alert-success">
                <?php echo e(session()->get('success')); ?>

              </div>
              <?php endif; ?>

              <?php if(session()->has('error')): ?>
              <div class="alert alert-danger">
                <?php echo e(session()->get('error')); ?>

              </div>
              <?php endif; ?>

              <?php if(count($errors) > 0): ?>
                  <ul>
                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li class="alert alert-danger"><?php echo e($error); ?></li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
              <?php endif; ?>
            </div><?php /**PATH E:\xampp\htdocs\awqaf\resources\views/admin/layouts/error.blade.php ENDPATH**/ ?>