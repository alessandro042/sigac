<?php $__env->startSection('content'); ?>
  <div class="bg-light">
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h1 class="card-title text-center">Formulario para editar un Usuario</h1>
              <form id="userForm" action="<?php echo e(route('usuarios.update', $usuario)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="mb-3">
                  <label for="nombre_completo" class="form-label">Nombre completo:</label>
                  <input value="<?php echo e(old('nombre_completo', $usuario->nombre_completo)); ?>" name="nombre_completo" class="form-control">
                  <?php $__errorArgs = ['nombre_completo'];
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
                  <label for="username" class="form-label">Nombre de usuario:</label>
                  <input value="<?php echo e(old('username', $usuario->username)); ?>" name="username" class="form-control">
                  <?php $__errorArgs = ['username'];
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
                  <label for="password" class="form-label">Contraseña:</label>
                  <input type="password" name="password" class="form-control">
                  <small class="form-text text-muted">Dejar en blanco para mantener la misma contraseña.</small>
                  <?php $__errorArgs = ['password'];
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
                  <label for="email" class="form-label">Email:</label>
                  <input type="email" value="<?php echo e(old('email', $usuario->email)); ?>" name="email" class="form-control">
                  <?php $__errorArgs = ['email'];
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
                  <label for="id_rol" class="form-label">Rol:</label>
                  <select class="form-select" aria-label="Default select example" name="id_rol" id="id_rol">
                    <option  disabled value="0" <?php echo e(old('id_rol', $usuario->id_rol) == 0 ? 'selected' : ''); ?>>Seleccione una opción</option>
                    <option value="11" <?php echo e(old('id_rol', $usuario->id_rol) == 11 ? 'selected' : ''); ?>>Administrador</option>
                    <option value="12" <?php echo e(old('id_rol', $usuario->id_rol) == 12 ? 'selected' : ''); ?>>Empleado</option>
                  </select>
                  <?php $__errorArgs = ['id_rol'];
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


                <div class="d-grid gap-2">
                  <button id="submitButton" type="submit" class="btn btn-primary">Actualizar</button>
                </div>
                <div class="d-grid mt-3 gap-2">
                  <a href="<?php echo e(route('usuarios.index')); ?>" class="btn btn-secondary">Volver a usuarios</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    
    // Función para mostrar SweetAlert antes de enviar el formulario
  document.getElementById('userForm').addEventListener('submit', function(e) {
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
        document.getElementById('userForm').submit();
      }
    });
  });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aleja\Documents\Estadia alx\sieem\resources\views/usuarios/edit.blade.php ENDPATH**/ ?>