<!-- resources/views/principales/matricula.blade.php -->


<?php $__env->startSection('title', 'Programas educativos'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="container">
        <div class="bg-light">
            <div class="container mt-5">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <h1 class="card-title text-center">Formulario para crear un Programa Educativo</h1>
                      <form id="createForm" action="<?php echo e(route('programas-educativos.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
                          <label for="programa_educativo" class="form-label">Nombre del Programa Educativo:</label>
                          <input value="<?php echo e(old('programa_educativo')); ?>" name="programa_educativo" class="form-control">
                          <?php $__errorArgs = ['programa_educativo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <br>
                            <div class="alert alert-danger" role="alert">
                              <?php echo e($message); ?>

                            </div>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-3">
                            <label for="id_unidad_academica" class="form-label">Unidad Academica:</label>
                            <select class="form-select select2" aria-label="Default select example" name="id_unidad_academica">
                              <option value="0" <?php echo e(old('id_unidad_academica') == 0 ? 'selected' : ''); ?> disabled=true >Seleccione una opcion</option>
                              <?php $__currentLoopData = $unidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($unidad->id); ?>" <?php echo e(old('id_unidad_academica') == $unidad->id ? 'selected' : ''); ?>><?php echo e($unidad->unidad_academica); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['id_unidad_academica'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <br>
                              <div class="alert alert-danger" role="alert">
                                <?php echo e($message); ?>

                              </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-3">
                            <label for="id_nivel" class="form-label">Nivel  del Programa: </label>
                            <select class="form-select" aria-label="Default select example" name="id_nivel">
                              <option value="0" <?php echo e(old('id_nivel') == 0 ? 'selected' : ''); ?> disabled=true>Seleccione una opcion</option>
                              <?php $__currentLoopData = $niveles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($nivel->id); ?>" <?php echo e(old('id_nivel') == $nivel->id ? 'selected' : ''); ?>><?php echo e($nivel->nivel); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['id_nivel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <br>
                              <div class="alert alert-danger" role="alert">
                                <?php echo e($message); ?>

                              </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>

                        <div class="mb-3">
                          <label for="id_area_conocimiento" class="form-label">Area del Conocimiento: </label>
                          <select class="form-select" aria-label="Default select example" name="id_area_conocimiento">
                            <option value="0" <?php echo e(old('id_area_conocimiento') == 0 ? 'selected' : ''); ?> disabled=true>Seleccione una opcion</option>
                            <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($area->id); ?>" <?php echo e(old('id_area_conocimiento') == $area->id ? 'selected' : ''); ?>><?php echo e($area->area_conocimiento); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                          <?php $__errorArgs = ['id_area_conocimiento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <br>
                            <div class="alert alert-danger" role="alert">
                              <?php echo e($message); ?>

                            </div>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-3">
                          <label for="id_modalidad" class="form-label">Modalidad: </label>
                          <select class="form-select" aria-label="Default select example" name="id_modalidad">
                            <option value="0" <?php echo e(old('id_modalidad') == 0 ? 'selected' : ''); ?> disabled=true >Seleccione una opcion</option>
                            <?php $__currentLoopData = $modalidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modalidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($modalidad->id); ?>" <?php echo e(old('id_modalidad') == $modalidad->id ? 'selected' : ''); ?>><?php echo e($modalidad->modalidad); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                          <?php $__errorArgs = ['id_modalidad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <br>
                            <div class="alert alert-danger" role="alert">
                              <?php echo e($message); ?>

                            </div>
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
                            </div>
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

                        <div class="d-grid gap-2">
                          <button id="submitButton" type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                        <div class="d-grid mt-3 gap-2">
                          <a href="<?php echo e(route('unidad-academica.index')); ?>" class="btn btn-secondary">Volver</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  document.getElementById('createForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const form = this;

            Swal.fire({
                title: 'Confirmar envío',
                text: "¿Estás seguro de que deseas enviar el formulario?",
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
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aleja\Documents\Estadia alx\sieem\resources\views/programas-educativos/create.blade.php ENDPATH**/ ?>