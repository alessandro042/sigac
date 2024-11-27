<?php $__env->startSection('title', 'Programas educativos'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-2">
    <div class="card p-3">
        <h1 class="mb-4 text-center text-3xl font-bold text-blue-600">Gestión de Programas Educativos</h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="<?php echo e(route('programas-educativos.create')); ?>" class="btn btn-primary">Nuevo programa educativo</a>
        </div>
        <div class="table-responsive">
            <table id="programasTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Programa educativo</th>
                        <th>Unidad Académica</th>
                        <th>Nivel del Programa</th>
                        <th>Área del Conocimiento</th>
                        <th>Modalidad</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $programas_educativos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $programa_educativo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="programa-<?php echo e($programa_educativo->id); ?>">
                        <td><?php echo e($programa_educativo->id); ?></td>
                        <td><?php echo e($programa_educativo->programa_educativo); ?></td>
                        <td><?php echo e($programa_educativo->unidadAcademica->unidad_academica ?? 'N/A'); ?></td>
                        <td><?php echo e($programa_educativo->nivel->nivel ?? 'N/A'); ?></td>
                        <td><?php echo e($programa_educativo->areaConocimiento->area_conocimiento ?? 'N/A'); ?></td>
                        <td><?php echo e($programa_educativo->modalidad->modalidad ?? 'N/A'); ?></td>
                        <td class="estado">
                            <?php echo e($programa_educativo->status == 1 ? 'Activo' : 'Inactivo'); ?>

                        </td>
                        <td class="d-flex">
                            <a href="<?php echo e(route('programas-educativos.edit', $programa_educativo->id)); ?>" class="btn btn-warning me-2">Editar</a>
                            <button class="btn toggle-status <?php echo e($programa_educativo->status == 1 ? 'btn-danger' : 'btn-success'); ?>" data-id="<?php echo e($programa_educativo->id); ?>">
                                <?php echo e($programa_educativo->status == 1 ? 'Deshabilitar' : 'Habilitar'); ?>

                            </button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function() {
        $('#programasTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            responsive: true,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
            }
        });

        const buttons = document.querySelectorAll('.toggle-status');
        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const programaId = this.getAttribute('data-id');
                const row = document.getElementById('programa-' + programaId);
                const statusCell = row.querySelector('.estado');
                const button = this;

                Swal.fire({
                    title: 'Confirmar acción',
                    text: `¿Estás seguro de que deseas cambiar el estado del programa educativo?`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sí',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch(`/programas-educativos/${programaId}/toggle-status`, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                                }
                            })
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Hubo un problema al cambiar el estado del programa educativo');
                                }
                                return response.json();
                            })
                            .then(data => {
                                statusCell.textContent = data.status == 1 ? 'Activo' : 'Inactivo';
                                button.textContent = data.status == 1 ? 'Deshabilitar' : 'Habilitar';
                                button.classList.toggle('btn-danger');
                                button.classList.toggle('btn-success');
                                Swal.fire({
                                    title: 'Estado cambiado',
                                    text: `El programa educativo ahora está ${data.status == 1 ? 'activo' : 'inactivo'}`,
                                    icon: 'success'
                                });
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                Swal.fire({
                                    title: 'Error',
                                    text: 'Hubo un problema al cambiar el estado del programa educativo',
                                    icon: 'error'
                                });
                            });
                    }
                });
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aleja\Documents\Estadia alx\sieem\resources\views/programas-educativos/index.blade.php ENDPATH**/ ?>