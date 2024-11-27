<?php $__env->startSection('title', 'Editar Programa Educativo'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="container">
      <div class="bg-light">
          <div class="container mt-5">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title text-center">Editar Programa Educativo</h1>
                    <form id="ProgramForm" action="<?php echo e(route('programas-educativos.update', $programa_educativo->id)); ?>" method="POST">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('PUT'); ?>

                      <div class="mb-3">
                        <label for="programa_educativo" class="form-label">Nombre del Programa Educativo:</label>
                        <input value="<?php echo e(old('programa_educativo', $programa_educativo->programa_educativo)); ?>" name="programa_educativo" class="form-control">
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
                          <label for="id_unidad_academica" class="form-label">Unidad Académica:</label>
                          <select class="form-select" aria-label="Default select example" name="id_unidad_academica">
                              <?php $__currentLoopData = $unidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($unidad->id); ?>" <?php echo e(old('id_unidad_academica', $programa_educativo->id_unidad_academica) == $unidad->id ? 'selected' : ''); ?>><?php echo e($unidad->unidad_academica); ?></option>
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
                          <label for="id_nivel" class="form-label">Nivel del Programa: </label>
                          <select class="form-select" aria-label="Default select example" name="id_nivel">
                              <?php $__currentLoopData = $niveles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($nivel->id); ?>" <?php echo e(old('id_nivel', $programa_educativo->id_nivel) == $nivel->id ? 'selected' : ''); ?>><?php echo e($nivel->nivel); ?></option>
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
                          <label for="id_area_conocimento" class="form-label">Área del Conocimiento: </label>
                          <select class="form-select" aria-label="Default select example" name="id_area_conocimento">
                              <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($area->id); ?>" <?php echo e(old('id_area_conocimento', $programa_educativo->id_area_conocimento) == $area->id ? 'selected' : ''); ?>><?php echo e($area->area_conocimiento); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                          <?php $__errorArgs = ['id_area_conocimento'];
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
                                     value="1" <?php echo e(old('status', $programa_educativo->status) == '1' ? 'checked' : ''); ?>>
                              <label class="form-check-label" for="habilitar">
                                  Habilitar
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="status" id="deshabilitar"
                                     value="0" <?php echo e(old('status', $programa_educativo->status) == '0' ? 'checked' : ''); ?>>
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
                        <a href="<?php echo e(route('programas-educativos.index')); ?>" class="btn btn-secondary">Volver</a>
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

<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
// Función para mostrar SweetAlert antes de enviar el formulario
document.getElementById('ProgramForm').addEventListener('submit', function(e) {
  e.preventDefault(); // Evitar el envío automático del formulario

  Swal.fire({
    title: '¿Estás seguro?',
    text: "Una vez actualizado, no podrás revertir los cambios.",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Sí, actualizar',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
      // Si el usuario confirma, se envía el formulario
      document.getElementById('ProgramForm').submit();
    }
  });
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aleja\Documents\Estadia alx\sieem\resources\views/programas-educativos/edit.blade.php ENDPATH**/ ?>