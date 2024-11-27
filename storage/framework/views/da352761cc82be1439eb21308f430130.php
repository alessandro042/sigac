<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-3" style="background: rgba(255, 255, 255, 0.85);">
                <div class="card-header text-center rounded-top">
                    <h2 class="active"><?php echo e(__('Login')); ?></h2>
                </div>
                <div class="card-body p-4">
                    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
                    <form id="login-form" method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="email" class="form-label"><?php echo e(__('Email Address')); ?></label>
                            <div class="input-group">
                                <span class="input-group-text" id="email-addon"><i class="bi bi-envelope"></i></span>
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus aria-describedby="email-addon">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label"><?php echo e(__('Password')); ?></label>
                            <div class="input-group">
                                <span class="input-group-text" id="password-addon"><i class="bi bi-lock"></i></span>
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" aria-describedby="password-addon">
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="remember">
                                <?php echo e(__('Remember Me')); ?>

                            </label>
                        </div>

                        <div class="d-grid mb-3">
                            <input type="submit" class="fadeIn fourth btn btn-primary" value="<?php echo e(__('Login')); ?>" style="cursor: pointer;">
                        </div>

                        <?php if(Route::has('password.request')): ?>
                        <div class="text-center">
                            <a class="underlineHover" href="<?php echo e(route('password.request')); ?>">
                                <?php echo e(__('Forgot Your Password?')); ?>

                            </a>
                        </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startSection('scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('login-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Evita el envío normal del formulario

            let form = event.target;
            let formData = new FormData(form);

            fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.redirect) {
                        Swal.fire({
                            title: 'Éxito!',
                            text: data.success || '¡Inicio de sesión exitoso!',
                            icon: 'success',
                            confirmButtonText: 'Ok',
                            confirmButtonColor: '#3085d6',
                            background: '#f4f4f9',
                            titleColor: '#333',
                            textColor: '#555'
                        }).then(function() {
                            window.location.href = data.redirect;
                        });
                    } else if (data.error) {
                        Swal.fire({
                            title: 'Error!',
                            text: data.error || 'Ocurrió un error al iniciar sesión.',
                            icon: 'error',
                            confirmButtonText: 'Ok',
                            confirmButtonColor: '#d33',
                            background: '#f4f4f9',
                            titleColor: '#333',
                            textColor: '#555'
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aleja\Documents\Estadia alx\sieem\resources\views/auth/login.blade.php ENDPATH**/ ?>