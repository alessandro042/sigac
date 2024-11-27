<nav class="navbar navbar-expand-md navbar-light nav shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <?php echo e(config('app.name', 'Laravel')); ?>

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <!-- Simple Links -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/')); ?>">Inicio</a>
                </li>

                <?php if(Auth::check()): ?>
                    <!-- Matrícula -->
                    <?php if(Auth::user()->hasRol('Administrador') || Auth::user()->hasRol('Editor') || Auth::user()->hasRol('Consultor')): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Matrícula
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                                <li><a class="dropdown-item" href="">General</a></li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Igualdad</a>
                                    <ul class="dropdown-menu">
                                        <?php if(Auth::user()->hasRol('Administrador') || Auth::user()->hasRol('Editor')): ?>
                                            <li><a class="dropdown-item" href="<?php echo e(route('matricula.igualdad-genero.index')); ?>">Gestión</a></li>
                                        <?php endif; ?>
                                        <?php if(Auth::user()->hasRol('Consultor') || Auth::user()->hasRol('Administrador')): ?>
                                            <li><a class="dropdown-item" href="<?php echo e(route('matricula.igualdad-genero.report')); ?>">Reporte</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Inclusión</a>
                                    <ul class="dropdown-menu">
                                        <?php if(Auth::user()->hasRol('Administrador') || Auth::user()->hasRol('Editor')): ?>
                                            <li><a class="dropdown-item" href="<?php echo e(route('matricula.inclusion.index')); ?>">Gestión</a></li>
                                        <?php endif; ?>
                                        <?php if(Auth::user()->hasRol('Consultor') || Auth::user()->hasRol('Administrador')): ?>
                                            <li><a class="dropdown-item" href="<?php echo e(route('matricula.inclusion.report')); ?>">Reporte</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Interculturalidad</a>
                                    <ul class="dropdown-menu">
                                        <?php if(Auth::user()->hasRol('Administrador') || Auth::user()->hasRol('Editor')): ?>
                                            <li><a class="dropdown-item" href="<?php echo e(route('matricula.interculturalidad.index')); ?>">Gestión</a></li>
                                        <?php endif; ?>
                                        <?php if(Auth::user()->hasRol('Consultor') || Auth::user()->hasRol('Administrador')): ?>
                                            <li><a class="dropdown-item" href="<?php echo e(route('matricula.interculturalidad.report')); ?>">Reporte</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <!-- Seguimiento de Trayectoria -->
                    <?php if(Auth::user()->hasRol('Administrador') || Auth::user()->hasRol('Editor') || Auth::user()->hasRol('Consultor')): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Seguimiento de Trayectoria
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                                <?php if(Auth::user()->hasRol('Administrador') || Auth::user()->hasRol('Editor')): ?>
                                    <li><a class="dropdown-item" href="<?php echo e(route('seguimiento-trayectoria.index')); ?>">index</a></li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('seguimiento-trayectoria.create')); ?>">create</a></li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('seguimiento-trayectoria.edit')); ?>">edit</a></li>
                                <?php endif; ?>
                                <?php if(Auth::user()->hasRol('Consultor')): ?>
                                    <li><a class="dropdown-item" href="<?php echo e(route('seguimiento-trayectoria.report')); ?>">Reporte</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <!-- Capacidad Docente -->
                    <?php if(Auth::user()->hasRol('Administrador') || Auth::user()->hasRol('Editor') || Auth::user()->hasRol('Consultor')): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink4" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Capacidad Docente
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink4">
                                <?php if(Auth::user()->hasRol('Administrador') || Auth::user()->hasRol('Editor')): ?>
                                    <li><a class="dropdown-item" href="<?php echo e(route('capacidad.index')); ?>">index</a></li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('capacidad.create')); ?>">create</a></li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('capacidad.edit')); ?>">edit</a></li>
                                <?php endif; ?>
                                <?php if(Auth::user()->hasRol('Consultor')): ?>
                                    <li><a class="dropdown-item" href="<?php echo e(route('capacidad.report')); ?>">Reporte</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <!-- Competitividad -->
                    <?php if(Auth::user()->hasRol('Administrador') || Auth::user()->hasRol('Editor') || Auth::user()->hasRol('Consultor')): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink5" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Competitividad
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink5">
                                <?php if(Auth::user()->hasRol('Administrador') || Auth::user()->hasRol('Editor')): ?>
                                    <li><a class="dropdown-item" href="<?php echo e(route('competitividad.index')); ?>">index</a></li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('competitividad.create')); ?>">create</a></li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('competitividad.edit')); ?>">edit</a></li>
                                <?php endif; ?>
                                <?php if(Auth::user()->hasRol('Consultor')): ?>
                                    <li><a class="dropdown-item" href="<?php echo e(route('competitividad.report')); ?>">Reporte</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <!-- Administración -->
                    <?php if(Auth::user()->hasRol('Administrador')): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink6"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Administración
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink6">
                                <li><a class="dropdown-item" href="<?php echo e(route('usuarios.index')); ?>">Usuarios</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('bitacora.index')); ?>">Bitacora</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('unidad-academica.index')); ?>">Unidad Académica</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('programas-educativos.index')); ?>">Programa Educativo</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('fechas-corte.index')); ?>">Fechas de Corte</a></li>
                            </ul>
                        </li>
                    <?php elseif(Auth::user()->hasRol('Editor')): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Administración
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink7">
                                <li><a class="dropdown-item" href="<?php echo e(route('programas-educativos.index')); ?>">Programa Educativo</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                    <?php if(Route::has('login')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        </li>
                    <?php endif; ?>

                    <?php if(Route::has('register')): ?>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" aria-disabled="true"
                                style="pointer-events: none; opacity: 0.6;"><?php echo e(__('Register')); ?></a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->nombre_completo); ?>

                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var dropdowns = document.querySelectorAll('.dropdown-submenu');

        dropdowns.forEach(function(dropdown) {
            dropdown.addEventListener('mouseover', function() {
                var submenu = this.querySelector('.dropdown-menu');
                if (submenu) {
                    submenu.classList.add('show');
                }
            });

            dropdown.addEventListener('mouseout', function() {
                var submenu = this.querySelector('.dropdown-menu');
                if (submenu) {
                    submenu.classList.remove('show');
                }
            });
        });
    });
</script><?php /**PATH C:\Users\aleja\Documents\Estadia alx\sieem\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>