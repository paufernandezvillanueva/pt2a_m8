<?php $__env->startSection('title', 'Nou Autor'); ?>

<?php $__env->startSection('stylesheets'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('stylesheets'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Nou Autor</h1>
    <a href="<?php echo e(route('autor_list')); ?>">&laquo; Torna</a>
	<div style="margin-top: 20px">
        <form method="POST" action="<?php echo e(route('autor_new')); ?>">
            <?php echo csrf_field(); ?>
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" />
            </div>
            <div>
                <label for="cognoms">Cognom</label>
                <input type="text" name="cognoms" />
            </div>
            <button type="submit">Crear Autor</button>
        </form>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/m7_1/UF2/pt2a/resources/views/autor/new.blade.php ENDPATH**/ ?>