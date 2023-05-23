<?php $__env->startSection('content'); ?>
    <main class="container my-5" style="max-width: 700px">
        <div>
            <ul class="list-group">
                <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-6">
                                <div class="fw-bold">
                                    <?php $__currentLoopData = $order->item_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div><?php echo e($item_details->name); ?></div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <br>
                                    Address: <?php echo e($order->destination_address); ?>

                                </div>
                            </div>
                            <div class="col-6">
                                <form action="<?php echo e(route("order.assign")); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-floating">
                                        <input name="order_id" value="<?php echo e($order->id); ?>" hidden>
                                        <select class="form-select" id="delivery_boy_email" name="delivery_boy_email"
                                                aria-label="Floating label select example">
                                            <?php $__currentLoopData = $delivery_boys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $delivery_boy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                    value="<?php echo e($delivery_boy->email); ?>"><?php echo e($delivery_boy->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <label for="delivery_boy_email">Select delivery boy</label>
                                    </div>
                                    <input type="submit" class="btn btn-success rounded-pill" value="Assign">
                                </form>
                            </div>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <li class="list-group-item">
                        <div class="alert alert-warning">No new orders</div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\food-delivery-application\fooddeliveryapp\resources\views/dashboard.blade.php ENDPATH**/ ?>