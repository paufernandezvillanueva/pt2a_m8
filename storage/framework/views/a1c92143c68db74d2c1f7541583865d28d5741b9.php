<?php $__env->startSection('title', 'Llistat de llibres'); ?>

<?php $__env->startSection('stylesheets'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('stylesheets'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Llistat de llibres</h1>
    <a href="<?php echo e(route('llibre_new')); ?>">+ Nou llibre</a>

    <?php if(session('status')): ?>
        <div>
            <strong>Success!</strong> <?php echo e(session('status')); ?>  
        </div>
    <?php endif; ?>

    <table style="margin-top: 20px;margin-bottom: 10px;">
        <thead>
            <tr>
                <th>Títol</th><th>Data de publicació</th><th>Vendes</th><th>Autor</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $llibres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $llibre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($llibre->titol); ?></td><td><?php echo e($llibre->dataP->format("d-m-Y")); ?></td><td><?php echo e($llibre->vendes); ?></td><td><?php echo e($llibre->autor->nomCognoms()); ?> </td>
                    <td>
                        <a href="<?php echo e(route('llibre_delete', ['id' => $llibre->id])); ?>">Eliminar</a>
                    </td>
                    <td>
                        <a href="<?php echo e(route('llibre_edit', ['id' => $llibre->id])); ?>">Editar</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/m7_1/UF2/pt2a/resources/views/llibre/list.blade.php ENDPATH**/ ?>