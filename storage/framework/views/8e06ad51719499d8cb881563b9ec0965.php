<?php $__env->startSection('content'); ?>
  <div class="bg-light">
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h1 class="card-title text-center">Formulario para crear un Usuario</h1>
              <form id="userForm" action="<?php echo e(route('usuarios.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="mb-3">
                  <label for="nombre_completo" class="form-label">Nombre completo:</label>
                  <input value="<?php echo e(old('nombre_completo')); ?>" name="nombre_completo" class="form-control">
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
                  <input value="<?php echo e(old('username')); ?>" name="username" class="form-control">
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
                  <input type="password" value="<?php echo e(old('password')); ?>" name="password" class="form-control">
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
                  <input type="email" value="<?php echo e(old('email')); ?>" name="email" class="form-control">
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
                    <option value="0" <?php echo e(old('id_rol') == 0 ? 'selected' : ''); ?> disabled>Seleccione una opción</option>
                    <option value="11" <?php echo e(old('id_rol') == 11 ? 'selected' : ''); ?>>Administrador</option>
                    <option value="12" <?php echo e(old('id_rol') == 12 ? 'selected' : ''); ?>>Empleado</option>
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
                  <button id="submitButton" type="submit" class="btn btn-primary">Guardar</button>
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
    /* Alerta */
    document.getElementById('userForm').addEventListener('submit', function(event) {
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aleja\Documents\Estadia alx\sieem\resources\views/usuarios/create.blade.php ENDPATH**/ ?>