<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="card p-5">
            <h1 class="text-3xl font-bold mb-6 text-center text-blue-600">Bitácora de Actividades</h1>

            <form method="POST" action="<?php echo e(route('bitacora.buscar')); ?>">
                <?php echo csrf_field(); ?>
                <div class="row mb-4">
                    <div class="col-md-3">
                        <label for="fecha_inicio">Fecha Inicio:</label>
                        <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control"
                            value="<?php echo e(request('fecha_inicio', $fecha)); ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="fecha_fin">Fecha Fin:</label>
                        <input type="date" name="fecha_fin" id="fecha_fin" class="form-control"
                            value="<?php echo e(request('fecha_fin', $fecha)); ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="accion">Acción:</label>
                        <select name="accion" id="accion" class="form-select" aria-label="Acción">
                            <option selected value="">Todas</option>
                            <?php $__currentLoopData = $acciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($accion->id); ?>"
                                    <?php echo e(request('accion') == $accion->id ? 'selected' : ''); ?>><?php echo e($accion->accion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="seccion">Sección:</label>
                        <select name="seccion" id="seccion" class="form-select" aria-label="Sección">
                            <option selected value="">Todas</option>
                            <?php $__currentLoopData = $secciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($seccion->id); ?>"
                                    <?php echo e(request('seccion') == $seccion->id ? 'selected' : ''); ?>><?php echo e($seccion->seccion); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </div>
            </form>


            <div class="table-responsive">
                <table id="tabla_bitacora" class="table">
                    <thead>
                        <tr>
                            <th scope="col">Hora</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Sección</th>
                            <th scope="col">Acción</th>
                            <th scope="col">ID del Registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $bitacoras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bitacora): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($bitacora->hora); ?></td>
                                <td><?php echo e($bitacora->usuario->nombre_completo); ?></td>
                                <td><?php echo e($bitacora->seccion->seccion); ?></td>
                                <td><?php echo e($bitacora->accion->accion); ?></td>
                                <td><?php echo e($bitacora->id_registro); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#tabla_bitacora').DataTable({
                responsive: true,
                paging: true,
                ordering: true,

                info: true,

                language: {
                url: "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
            }

            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aleja\Documents\Estadia alx\sieem\resources\views/bitacora/index.blade.php ENDPATH**/ ?>