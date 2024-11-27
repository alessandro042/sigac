<?php $__env->startSection('title', 'Inicio'); ?>

<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="jumbotron text-center p-5 bg-light shadow rounded">
                <h1 class="display-4"><?php echo e(__('¡Bienvenido al Sistema Abarrotero!')); ?></h1>
                <p class="lead mt-4"><?php echo e(__('Tu herramienta integral para la gestión eficiente de tu negocio.')); ?></p>
                <hr class="my-4">
                <p class="text-muted"><?php echo e(__('Explora nuestras funcionalidades y lleva tu negocio al siguiente nivel.')); ?></p>
                <?php if(auth()->guard()->check()): ?>
                    <p class="font-weight-bold mt-3">
                        <?php echo e(__('Hola, :nombre!', ['nombre' => Auth::user()->nombre_completo])); ?><br>
                        <?php echo e(__(':rol', ['rol' => Auth::user()->rol->rol])); ?>

                    </p>
                   
                <?php else: ?>
                    <p class="mt-3"><?php echo e(__('Por favor, inicia sesión para acceder a las herramientas de administración.')); ?></p>
                    <a href="<?php echo e(route('login')); ?>" class="btn btn-primary btn-lg mt-3">
                        <?php echo e(__('Iniciar sesión')); ?>

                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-4 text-center">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fas fa-boxes fa-3x text-primary mb-3"></i>
                    <h5 class="card-title"><?php echo e(__('Gestión de Inventario')); ?></h5>
                    <p class="card-text"><?php echo e(__('Controla tus productos con precisión y mantén siempre un stock adecuado.')); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fas fa-users fa-3x text-success mb-3"></i>
                    <h5 class="card-title"><?php echo e(__('Clientes y Proveedores')); ?></h5>
                    <p class="card-text"><?php echo e(__('Administra relaciones clave para un negocio exitoso.')); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fas fa-chart-line fa-3x text-danger mb-3"></i>
                    <h5 class="card-title"><?php echo e(__('Reportes y Ventas')); ?></h5>
                    <p class="card-text"><?php echo e(__('Obtén reportes detallados y mejora la toma de decisiones.')); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aleja\Documents\Estadia alx\sieem\resources\views/welcome.blade.php ENDPATH**/ ?>