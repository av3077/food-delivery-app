<?php $__env->startSection('content'); ?>
    <main class="container my-5" style="max-width: 900px">
        <div class="row">
            <div class="col-12">
                <div class="fs-5 fw-bold mb-2 text-decoration-underline">List of all item:</div>
                <table class="table table-bordered border-secondary">
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Order address</th>
                        <th>Order items</th>
                        <th>Order status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($order->id); ?></td>
                            <td><?php echo e($order->destination_address); ?></td>
                            <td>
                                <?php $__currentLoopData = $order->item_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div><?php echo e($item_details->name); ?></div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td><?php echo e($order->status); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\food-delivery-application\fooddeliveryapp\resources\views/order.blade.php ENDPATH**/ ?>