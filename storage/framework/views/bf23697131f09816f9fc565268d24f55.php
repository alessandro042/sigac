<?php $__env->startSection('title', 'Matrícula Igualdad - Crear'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if($alert): ?>
            <div class="alert alert-warning">
                <?php echo e($alert); ?>

            </div>
        <?php endif; ?>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center">Formulario para crear una Matrícula</h1>
                        <form id="createForm" action="<?php echo e(route('matricula.igualdad-genero.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                            <div class="mb-3">
                                <label for="id_programa_educativo" class="form-label">Programa Educativo</label>
                                <select class="form-select select2" name="id_programa_educativo">
                                    <option value="0" <?php echo e(old('id_programa_educativo') == 0 ? 'selected' : ''); ?>>
                                        Seleccione una opción
                                    </option>
                                    <?php $__currentLoopData = $programasEducativos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $programa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $siglas = $programa->unidadAcademica->siglas;
                                        ?>
                                        <option value="<?php echo e($programa->id); ?>"
                                            <?php echo e(old('id_programa_educativo') == $programa->id ? 'selected' : ''); ?>>
                                            <?php echo e($programa->programa_educativo); ?> (<?php echo e($siglas); ?>)
                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['id_programa_educativo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-3">
                                <label for="id_fechas_corte" class="form-label">Fecha de Corte</label>
                                <select class="form-select select2" name="id_fechas_corte">
                                    <option value="0" <?php echo e(old('id_fechas_corte') == 0 ? 'selected' : ''); ?>>
                                        Seleccione una opción</option>
                                    <?php $__currentLoopData = $fechasCorte; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fecha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($fecha->id); ?>"
                                            <?php echo e(old('id_fechas_corte') == $fecha->id ? 'selected' : ''); ?>>
                                            <?php echo e($fecha->fecha); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['id_fechas_corte'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-3">
                                <label for="hombres" class="form-label">Hombres:</label>
                                <input id="hombres" value="<?php echo e(old('hombres')); ?>" name="hombres" class="form-control"
                                    oninput="calculateTotal()">
                                <?php $__errorArgs = ['hombres'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-3">
                                <label for="mujeres" class="form-label">Mujeres:</label>
                                <input id="mujeres" value="<?php echo e(old('mujeres')); ?>" name="mujeres" class="form-control"
                                    oninput="calculateTotal()">
                                <?php $__errorArgs = ['mujeres'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-3">
                                <label for="otros" class="form-label">Otros:</label>
                                <input id="otros" value="<?php echo e(old('otros')); ?>" name="otros" class="form-control"
                                    oninput="calculateTotal()">
                                <?php $__errorArgs = ['otros'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-3">
                                <label for="total" class="form-label">Total:</label>
                                <input id="total" value="<?php echo e(old('total')); ?>" name="total" class="form-control"
                                    readonly>
                                <?php $__errorArgs = ['total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Estado</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="habilitar"
                                        value="1" <?php echo e(old('status', '1') == '1' ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="habilitar">
                                        Habilitar
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="deshabilitar"
                                        value="0" <?php echo e(old('status') == '0' ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="deshabilitar">
                                        Deshabilitar
                                    </label>
                                    <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            <div class="d-grid gap-2 mt-3">
                                <a href="<?php echo e(route('matricula.igualdad-genero.index')); ?>" class="btn btn-secondary">Volver
                                    a Matricula</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });

        function calculateTotal() {
            const hombres = parseInt(document.getElementById('hombres').value) || 0;
            const mujeres = parseInt(document.getElementById('mujeres').value) || 0;
            const otros = parseInt(document.getElementById('otros').value) || 0;
            const total = hombres + mujeres + otros;
            document.getElementById('total').value = total;
        }

        document.getElementById('createForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const form = this;

            Swal.fire({
                title: 'Confirmar matrícula',
                text: "¿Estás seguro de que deseas enviar la matrícula?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, enviar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            calculateTotal();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aleja\Documents\Estadia alx\sieem\resources\views/matricula/igualdad-genero/create.blade.php ENDPATH**/ ?>