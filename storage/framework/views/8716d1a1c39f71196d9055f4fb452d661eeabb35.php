<?php $__env->startSection('content'); ?>


  <!-- ROW OPEN -->
  <div class="row">

    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
      <div class="card bg-primary img-card box-primary-shadow fixedHieght">
        <div class="card-body">
          <div class="d-flex">
            <div class="text-white">
              <h2 class="mb-0 number-font"><?php echo e($countPages); ?></h2>
              <p class="text-white mb-0"><?php echo e(trans('admin.countPages')); ?></p>
            </div>
            <div class="ms-auto">
              <i class="fe fe-bar-chart-2 text-white fs-30 me-2 mt-2"></i> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- COL END -->

    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
      <div class="card bg-primary img-card box-primary-shadow fixedHieght">
        <div class="card-body">
          <div class="d-flex">
            <div class="text-white">
              <h2 class="mb-0 number-font"><?php echo e($countCompanies); ?></h2>
              <p class="text-white mb-0"><?php echo e(trans('admin.countCompanies')); ?></p>
            </div>
            <div class="ms-auto">
              <i class="fe fe-bar-chart-2 text-white fs-30 me-2 mt-2"></i> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- COL END -->

    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
      <div class="card bg-primary img-card box-primary-shadow fixedHieght">
        <div class="card-body">
          <div class="d-flex">
            <div class="text-white">
              <h2 class="mb-0 number-font"><?php echo e($countProjects); ?></h2>
              <p class="text-white mb-0"><?php echo e(trans('admin.countProjects')); ?></p>
            </div>
            <div class="ms-auto">
              <i class="fe fe-bar-chart-2 text-white fs-30 me-2 mt-2"></i> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- COL END -->

    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
      <div class="card bg-primary img-card box-primary-shadow fixedHieght">
        <div class="card-body">
          <div class="d-flex">
            <div class="text-white">
              <h2 class="mb-0 number-font"><?php echo e($countBlogs); ?></h2>
              <p class="text-white mb-0"><?php echo e(trans('admin.countBlogs')); ?></p>
            </div>
            <div class="ms-auto">
              <i class="fe fe-bar-chart-2 text-white fs-30 me-2 mt-2"></i> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- COL END -->

  </div>
  <!-- ROW CLOSED -->

  <!-- ROW-1 -->
  
    <!-- ROW-1 CLOSED -->

  <!-- ROW OPEN -->
    <div class="row">

      <div class="col-md-6 col-xl-6 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><?php echo e(trans('admin.latestBlogs')); ?></h3>
            <a href="<?php echo e(url('admin/blogs')); ?>" class="moreHeadTxt">
              <?php echo e(trans('home.more')); ?>

            </a>
          </div>
          <div class="card-body contentTable table-responsive">
            <table class="table table-bordered text-nowrap border-bottom">
                    <thead class="table-primary">
                      <tr>
                        <th><?php echo e(trans('admin.ID')); ?></th>
                        <th><?php echo e(trans('admin.title')); ?></th>
                        <th><?php echo e(trans('admin.addedDate')); ?></th>
                        <th><?php echo e(trans('admin.options')); ?></th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php if(count($latestBlogs) > 0): ?>
                      <?php $__currentLoopData = $latestBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                          <td><?php echo e($s->id); ?></td>
                          <td><?php echo e($s['name_' . getLang()]); ?></td>
                          <td><?php echo e($s->created_at->format('Y-m-d')); ?></td>
                          <td>
                            <a href="<?php echo e(url('admin/blogs') . '/' . $s->id . '/show'); ?>" class="btn btn-warning">
                              <i class="fa fa-eye"></i> <?php echo e(trans('admin.show')); ?> 
                            </a>
                          </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php else: ?> 
                        <p class="alert alert-warning" style="margin-top: 10px; margin-bottom: 10px"> <?php echo e(trans('admin.noData')); ?> <?php echo e(trans('admin.willAdd')); ?> <a href="<?php echo e(url('admin/blogs/add')); ?>"> <?php echo e(trans('admin.addBlog')); ?> </a> </p>
                      <?php endif; ?>  
                    </tbody>
                 </table>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-6 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><?php echo e(trans('admin.latestCompanies')); ?></h3>
            <a href="<?php echo e(url('admin/companies')); ?>" class="moreHeadTxt">
              <?php echo e(trans('home.more')); ?>

            </a>
          </div>
          <div class="card-body contentTable table-responsive">
            <table class="table table-bordered text-nowrap border-bottom">
                    <thead class="table-primary">
                      <tr>
                        <th><?php echo e(trans('admin.ID')); ?></th>
                        <th><?php echo e(trans('admin.title')); ?></th>
                        <th><?php echo e(trans('admin.addedDate')); ?></th>
                        <th><?php echo e(trans('admin.options')); ?></th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php if(count($latestCompanies) > 0): ?>
                      <?php $__currentLoopData = $latestCompanies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                          <td><?php echo e($s->id); ?></td>
                          <td><?php echo e($s['name_' . getLang()]); ?></td>
                          <td><?php echo e($s->created_at->format('Y-m-d')); ?></td>
                          <td>
                            <a href="<?php echo e(url('admin/companies') . '/' . $s->id . '/show'); ?>" class="btn btn-warning">
                              <i class="fa fa-eye"></i> <?php echo e(trans('admin.show')); ?> 
                            </a>
                          </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php else: ?> 
                        <p class="alert alert-warning" style="margin-top: 10px; margin-bottom: 10px"> <?php echo e(trans('admin.noData')); ?> <?php echo e(trans('admin.willAdd')); ?> <a href="<?php echo e(url('admin/companies/add')); ?>"> <?php echo e(trans('admin.addCompany')); ?> </a> </p>
                      <?php endif; ?>  
                    </tbody>
                 </table>
          </div>
        </div>
      </div>

      <div class="col-md-12 col-xl-12 col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><?php echo e(trans('admin.latestProjects')); ?></h3>
            <a href="<?php echo e(url('admin/projects')); ?>" class="moreHeadTxt">
              <?php echo e(trans('home.more')); ?>

            </a>
          </div>
          <div class="card-body contentTable table-responsive">
            <table class="table table-bordered text-nowrap border-bottom">
                    <thead class="table-primary">
                      <tr>
                        <th><?php echo e(trans('admin.ID')); ?></th>
                        <th><?php echo e(trans('admin.title')); ?></th>
                        <th><?php echo e(trans('admin.addedDate')); ?></th>
                        <th><?php echo e(trans('admin.options')); ?></th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php if(count($latestProjects) > 0): ?>
                      <?php $__currentLoopData = $latestProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                          <td><?php echo e($s->id); ?></td>
                          <td><?php echo e($s['name_' . getLang()]); ?></td>
                          <td><?php echo e($s->created_at->format('Y-m-d')); ?></td>
                          <td>
                            <a href="<?php echo e(url('admin/projects') . '/' . $s->id . '/show'); ?>" class="btn btn-warning"><i class="fa fa-eye"></i> <?php echo e(trans('admin.show')); ?> </a>

                            <a href="<?php echo e(url('admin/projects') . '/' . $s->id . '/point'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> <?php echo e(trans('admin.addPoint')); ?> </a>

                            <a href="<?php echo e(url('admin/projects') . '/' . $s->id . '/edit'); ?>" class="btn btn-info"><i class="fa fa-edit"></i> <?php echo e(trans('admin.edit')); ?> </a>
                            
                            <a href="<?php echo e(url('admin/projects') . '/' . $s->id . '/delete'); ?>" class="btn btn-danger delete"><i class="fa fa-close"></i> <?php echo e(trans('admin.delete')); ?> </a>

                            <?php if($s->status == 1): ?>
                              <a href="<?php echo e(url('admin/projects') . '/' . $s->id . '/status'); ?>" class="btn btn-danger">
                                <i class="fa fa-close"></i>
                              </a>
                            <?php else: ?>
                              <a href="<?php echo e(url('admin/projects') . '/' . $s->id . '/status'); ?>" class="btn btn-success">
                                <i class="fa fa-check"></i>
                              </a>
                            <?php endif; ?>
                          </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php else: ?> 
                        <p class="alert alert-warning" style="margin-top: 10px; margin-bottom: 10px"> <?php echo e(trans('admin.noData')); ?> <?php echo e(trans('admin.willAdd')); ?> <a href="<?php echo e(url('admin/projects/add')); ?>"> <?php echo e(trans('admin.addProject')); ?> </a> </p>
                      <?php endif; ?>  
                    </tbody>
                 </table>
          </div>
        </div>
      </div>

    </div>
    <!-- ROW CLOSED -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

  <script type="text/javascript">
    
    $(document).ready(function() {

      

    });

  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\awqaf2\resources\views/admin/index.blade.php ENDPATH**/ ?>