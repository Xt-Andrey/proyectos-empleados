<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso al Sistema - Gestión de Proyectos y Empleados</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 bg-gradient-to-br from-slate-900 via-indigo-950 to-slate-900 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl p-8 sm:p-10 w-full max-w-md border border-white/20 relative overflow-hidden">
        
        <!-- Elemento decorativo superior -->
        <div class="absolute -top-12 -right-12 w-32 h-32 bg-indigo-500/10 rounded-full blur-2xl pointer-events-none"></div>

        <!-- Encabezado con Icono Corporativo -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-indigo-50 text-indigo-600 rounded-2xl mb-4 shadow-inner">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
            </div>
            <h1 class="text-2xl font-extrabold text-slate-900 tracking-tight mb-1">Control de Personal</h1>
            <p class="text-slate-500 text-sm">Inicia sesión para gestionar proyectos y recursos</p>
        </div>

        <!-- Formulario de Inicio de Sesión de Laravel -->
        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- Campo de Correo Electrónico -->
            <div>
                <label for="email" class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-2">Correo Electrónico</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                    </span>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                           class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:bg-white transition-all"
                           placeholder="nombre@empresa.com">
                </div>
            </div>

            <!-- Campo de Contraseña -->
            <div>
                <div class="flex items-center justify-between mb-2">
                    <label for="password" class="block text-xs font-semibold uppercase tracking-wider text-slate-600">Contraseña</label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-xs font-medium text-indigo-600 hover:underline">¿Olvidaste tu contraseña?</a>
                    @endif
                </div>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </span>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                           class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:bg-white transition-all"
                           placeholder="••••••••">
                </div>
            </div>

            <!-- Recuérdame -->
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="remember" id="remember" class="w-4 h-4 text-indigo-600 border-slate-300 rounded focus:ring-indigo-500">
                    <span class="text-slate-600 select-none">Recordar sesión</span>
                </label>
            </div>

            <!-- Botón de Envío -->
            <button type="submit" 
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3.5 px-5 rounded-xl text-base transition-all duration-200 shadow-md hover:shadow-indigo-500/25 hover:shadow-lg active:scale-[0.98]">
                Entrar al Sistema
            </button>
        </form>
        
        <!-- Enlace de Registro Alternativo -->
        <div class="mt-6 text-center">
            <p class="text-sm text-slate-500">¿No tienes una cuenta de empleado? <a href="{{ route('register') }}" class="text-indigo-600 font-semibold hover:underline">Regístrate aquí</a></p>
        </div>

        <!-- Pie de página -->
        <div class="mt-8 pt-6 border-t border-slate-100 text-center">
            <p class="text-xs text-slate-400">Módulo de Gestión de Proyectos & Recursos Humanos</p>
        </div>
    </div>
</body>
</html>