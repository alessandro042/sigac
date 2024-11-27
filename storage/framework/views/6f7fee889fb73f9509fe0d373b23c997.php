<?php $__env->startSection('title', 'Matrícula Igualdad REPORTE'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
<div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Reporte de igualdad genero</h2>
        <div>
        <a href="<?php echo e(route('matricula.igualdad-genero.import-form')); ?>" class="btn btn-custom-upload btn-lg mx-2 my-2 shadow-sm">
                <i class="fas fa-file-upload"></i> Importar
            </a>
            <a href="<?php echo e(route('matricula.igualdad-genero.generate.excel')); ?>" class="btn btn-custom-download btn-lg mx-2 my-2 shadow-sm">
                <i class="fas fa-file-download"></i> Exportar
            </a> 
            <a href="<?php echo e(route('matricula.igualdad-genero.export-excel', ['id_fechas_corte' => $fechaCorteSeleccionada->id ?? null])); ?>" class="btn btn-excel btn-lg mx-2 my-2 shadow-sm">
                <i class="fas fa-file-excel"></i> Exportar a Excel
            </a>
            <a href="<?php echo e(route('matricula.igualdad-genero.export-pdf', ['id_fechas_corte' => $fechaCorteSeleccionada->id ?? null])); ?>" class="btn btn-pdf btn-lg mx-2 my-2 shadow-sm">
                <i class="fas fa-file-pdf"></i> Exportar a PDF
            </a>
        </div>
    </div>
    
    <!-- Formulario de búsqueda por fecha de corte -->
    <form action="<?php echo e(route('matricula.igualdad-genero.report')); ?>" method="GET" class="mb-4">
        <div class="form-group col-md-2">
            <label for="id_fechas_corte">Fecha de Corte:</label>
            <select name="id_fechas_corte" id="id_fechas_corte" class="form-control">
                <option value="" disabled>Selecciona una fecha de corte</option>
                <?php $__currentLoopData = $fechasCorte; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fecha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($fecha->id); ?>" <?php echo e($fechaCorteSeleccionada && $fechaCorteSeleccionada->id == $fecha->id ? 'selected' : ''); ?>>
                    <?php echo e($fecha->fecha); ?>

                </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

    <!-- Mostrar la fecha de corte seleccionada -->
    <p><strong>Datos de fecha de corte:
            <?php if($fechaCorteSeleccionada): ?>
            <?php echo e($fechaCorteSeleccionada->fecha); ?>

            <?php else: ?>
            (Ninguna fecha seleccionada)
            <?php endif; ?>
        </strong></p>

    <?php
    // Variables para almacenar las sumas totales
    $sumaTotalHombres = 0;
    $sumaTotalMujeres = 0;
    $sumaTotalOtros = 0;
    $sumaTotalTotal = 0;
    ?>

    <!-- Totales por Institución -->
    <div class="card mb-4">
        <div class="card-body">
            <h3 class="card-title">Totales por Institución</h3>
            <div class="table-responsive">
                <table id="table-totales" class="table table-bordered table-striped table-general">
                    <thead class="thead-dark">
                        <tr>
                            <th>Institución</th>
                            <th class="text-center">Hombres</th>
                            <th class="text-center">Mujeres</th>
                            <th class="text-center">Otros</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $reportData->groupBy('programaEducativo.unidadAcademica.institucion.institucion'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $institucion => $dataGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $totalHombres = $dataGroup->sum('hombres');
                        $totalMujeres = $dataGroup->sum('mujeres');
                        $totalOtros = $dataGroup->sum('otros');
                        $totalTotal = $totalHombres + $totalMujeres + $totalOtros;
                        // suma de todos los hombres
                        $sumaTotalHombres += $totalHombres;
                        // suma de todas las mujeres
                        $sumaTotalMujeres += $totalMujeres;
                        // suma de todos los otros
                        $sumaTotalOtros += $totalOtros;
                        // suma de todos los totales
                        $sumaTotalTotal += $totalTotal;
                        ?>
                        <tr>
                            <td><?php echo e($institucion); ?></td>
                            <td class="text-center"><?php echo e($totalHombres); ?></td>
                            <td class="text-center"><?php echo e($totalMujeres); ?></td>
                            <td class="text-center"><?php echo e($totalOtros); ?></td>
                            <td class="text-center"><?php echo e($totalTotal); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Total General</th>
                            <th class="text-center"><?php echo e($sumaTotalHombres); ?></th>
                            <th class="text-center"><?php echo e($sumaTotalMujeres); ?></th>
                            <th class="text-center"><?php echo e($sumaTotalOtros); ?></th>
                            <th class="text-center"><?php echo e($sumaTotalTotal); ?></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!-- Detalle por Institución y Programa Educativo -->
    <?php $__currentLoopData = $reportData->groupBy('programaEducativo.unidadAcademica.institucion.institucion'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $institucion => $dataGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="accordion mb-4" id="accordion<?php echo e($loop->iteration); ?>">
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?php echo e($loop->iteration); ?>">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($loop->iteration); ?>" aria-expanded="false" aria-controls="collapse<?php echo e($loop->iteration); ?>">
                    <?php echo e($institucion); ?> (<?php echo e($dataGroup->count()); ?> programas) - Ver detalles
                </button>
            </h2>
            <div id="collapse<?php echo e($loop->iteration); ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo e($loop->iteration); ?>" data-bs-parent="#accordion<?php echo e($loop->iteration); ?>">
                <div class="accordion-body">
                    <div class="table-responsive">
                        <table id="table-detalle-<?php echo e($loop->iteration); ?>" class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Unidad Académica</th>
                                    <th>Programa Educativo</th>
                                    <th class="text-center">Hombres</th>
                                    <th class="text-center">Mujeres</th>
                                    <th class="text-center">Otros</th>
                                    <th class="text-center">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $dataGroup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($data->programaEducativo->unidadAcademica->unidad_academica); ?></td>
                                    <td><?php echo e($data->programaEducativo->programa_educativo); ?></td>
                                    <td class="text-center"><?php echo e($data->hombres); ?></td>
                                    <td class="text-center"><?php echo e($data->mujeres); ?></td>
                                    <td class="text-center"><?php echo e($data->otros); ?></td>
                                    <td class="text-center">
                                        <?php echo e($data->hombres + $data->mujeres + $data->otros); ?>

                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<style>
    .btn-custom-upload {
        background-color: #2196F3;
        color: white;
        border: none;
    }

    .btn-custom-upload:hover {
        background-color: #0b7dda;
        color: white;
    }

    .btn-custom-download {

        background-color: #2f7e32;
        color: white;
        border: none;
    }

    .btn-custom-download:hover {
        background-color: #45A049;
        color: white;
    }

    .btn-excel {
        background-color: #1d7a91;
        color: white;
        border: none;
    }

    .btn-excel:hover {
        background-color: #1d7a91;
        color: white;
    }

    .btn-pdf {
        background-color: #d9534f;
        color: white;
        border: none;
    }

    .btn-pdf:hover {
        background-color: #d9534f;
        color: white;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function() {
        $('.select2').select2();

        <?php $__currentLoopData = $reportData->groupBy('programaEducativo.unidadAcademica.institucion.institucion'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $institucion => $dataGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        $('#table-detalle-<?php echo e($loop->iteration); ?>').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
            },
            searching: true,
            paging: true,
            info: true
        });
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aleja\Documents\Estadia alx\sieem\resources\views/matricula/igualdad-genero/report.blade.php ENDPATH**/ ?>