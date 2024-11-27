<?php $__env->startSection('title', 'Editar Matrícula Interculturalidad'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="display-4 mb-4">Editar Matrícula Interculturalidad</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('matricula.interculturalidad.update', $matricula->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="mb-3">
                            <label for="id_programa_educativo" class="form-label">Programa Educativo</label>
                            <select class="form-select" name="id_programa_educativo">
                                <option value="0" <?php echo e(old('id_programa_educativo', $matricula->id_programa_educativo) == 0 ? 'selected' : ''); ?>>Seleccione una opción</option>
                                <?php $__currentLoopData = $programasEducativos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $programa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($programa->id); ?>" <?php echo e(old('id_programa_educativo', $matricula->id_programa_educativo) == $programa->id ? 'selected' : ''); ?>>
                                        <?php echo e($programa->programa_educativo); ?>

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
                            <select class="form-select" name="id_fechas_corte">
                                <option value="0" <?php echo e(old('id_fechas_corte', $matricula->id_fechas_corte) == 0 ? 'selected' : ''); ?>>Seleccione una opción</option>
                                <?php $__currentLoopData = $fechasCorte; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fecha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($fecha->id); ?>" <?php echo e(old('id_fechas_corte', $matricula->id_fechas_corte) == $fecha->id ? 'selected' : ''); ?>>
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
                            <label for="indigenas" class="form-label">Indigenas:</label>
                            <input value="<?php echo e(old('indigenas', $matricula->indigenas)); ?>" name="indigenas" class="form-control">
                            <?php $__errorArgs = ['indigenas'];
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
                            <label for="afroamericanos" class="form-label">Afroamericanos:</label>
                            <input value="<?php echo e(old('afroamericanos', $matricula->afroamericanos)); ?>" name="afroamericanos" class="form-control">
                            <?php $__errorArgs = ['afroamericanos'];
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
                            <label for="imigrantes" class="form-label">Inmigrantes:</label>
                            <input value="<?php echo e(old('imigrantes', $matricula->imigrantes)); ?>" name="imigrantes" class="form-control">
                            <?php $__errorArgs = ['imigrantes'];
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
                            <input value="<?php echo e(old('otros', $matricula->otros)); ?>" name="otros" class="form-control">
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
                            <input value="<?php echo e(old('total', $matricula->total)); ?>" name="total" class="form-control">
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
                                value="1" <?php echo e($matricula->status == 1 ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="habilitar">
                                    Habilitar
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="deshabilitar" 
                                value="0" <?php echo e($matricula->status == 0 ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="deshabilitar">
                                    Deshabilitar
                                </label>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <a href="<?php echo e(route('matricula.interculturalidad.index')); ?>" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aleja\Documents\Estadia alx\sieem\resources\views/matricula/interculturalidad/edit.blade.php ENDPATH**/ ?>