<!-- resources/views/principales/matricula.blade.php -->


<?php $__env->startSection('title', 'Unidades académicas'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-2">
    <div class="card p-3">
        <h1 class="mb-4 text-center text-3xl font-bold text-blue-600">Gestión de Unidades Académicas</h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="<?php echo e(route('unidad-academica.create')); ?>" class="btn btn-primary">Nueva unidad académica</a>
        </div>
        <div class="table-responsive">
            <table id="unidadesTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Unidad Académica</th>
                        <th>Institución</th>
                        <th>Nivel Académico</th>
                        <th>Municipio</th>
                        <th>Clave</th>
                        <th>Siglas</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $unidades_academicas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unidad_academica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($unidad_academica->unidad_academica); ?></td>
                        <td><?php echo e($unidad_academica->institucion->institucion ?? 'N/A'); ?></td>
                        <td><?php echo e($unidad_academica->nivel->nivel ?? 'N/A'); ?></td>
                        <td><?php echo e($unidad_academica->municipio->municipio ?? 'N/A'); ?></td>
                        <td><?php echo e($unidad_academica->clave ?? 'N/A'); ?></td>
                        <td><?php echo e($unidad_academica->siglas ?? 'N/A'); ?></td>
                        <td>
                            <a href="<?php echo e(route('unidad-academica.edit', $unidad_academica)); ?>" class="btn btn-warning me-2">Editar</a>
                            
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#unidadesTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            responsive: true,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aleja\Documents\Estadia alx\sieem\resources\views/unidad-academica/index.blade.php ENDPATH**/ ?>