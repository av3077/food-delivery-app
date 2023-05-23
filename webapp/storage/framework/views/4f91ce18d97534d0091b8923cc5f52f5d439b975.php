<?php $__env->startSection('content'); ?>
    <main class="container my-5" style="max-width: 900px">
        <div class="row">
            <?php if($errors->any()): ?>
                <div class="col-12">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="alert alert-danger"><?php echo e($error); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success alert-dismissible">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            <?php if(session()->has('error')): ?>
                <div class="alert alert-danger alert-dismissible">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>
            <div class="col-6 col-md-6">
                <div class="fs-5 fw-bold mb-2">Add new item:</div>
                <form method="POST" action="<?php echo e(route("product.add")); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label class="form-label">Enter name of item</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter item description</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter item price</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter item image url</label>
                        <input type="text" name="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-12 col-md-6">
                <div class="fs-5 fw-bold mb-2 text-decoration-underline">List of all item:</div>
                <ul class="list-group">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-8">
                                    <div class="fw-bold"><?php echo e($product->name); ?> | Price: ₹<?php echo e($product->price); ?></div>
                                    <small><?php echo e($product->description); ?></small>
                                </div>
                                <div class="col-4">
                                    <img src="<?php echo e($product->image); ?>" width="100%" height="auto">
                                    <a href="<?php echo e(route("product.delete")); ?>?id=<?php echo e($product->id); ?>">Delete</a>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\food-delivery-application\fooddeliveryapp\resources\views/products.blade.php ENDPATH**/ ?>