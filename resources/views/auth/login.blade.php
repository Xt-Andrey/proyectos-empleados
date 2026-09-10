<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Proyectos y Empleados</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 bg-gradient-to-br from-slate-900 via-indigo-950 to-slate-900 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl p-8 sm:p-10 w-full max-w-md border border-white/20 relative overflow-hidden">
        
        <!-- Elemento decorativo -->
        <div class="absolute -top-12 -right-12 w-32 h-32 bg-indigo-500/10 rounded-full blur-2xl pointer-events-none"></div>

        <!-- Encabezado -->
        <div class="text-center mb-6">
            <div class="inline-flex items-center justify-center w-14 h-14 bg-indigo-50 text-indigo-600 rounded-2xl mb-3 shadow-inner">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path></svg>
            </div>
            <h1 class="text-2xl font-extrabold text-slate-900 tracking-tight">Iniciar Sesión</h1>
            <p class="text-slate-500 text-sm">Bienvenido de nuevo a Proyectos y Empleados</p>
        </div>

        <!-- Formulario de Login -->
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <!-- Correo Electrónico -->
            <div>
                <label for="email" class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">Correo Electrónico</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                       class="w-full px-4 py-3 bg-slate-50 border @error('email') border-red-500 @else border-slate-200 @enderror rounded-xl text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:bg-white transition-all"
                       placeholder="nombre@empresa.com">

                @error('email')
                    <span class="text-red-500 text-xs mt-1 block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Contraseña -->
            <div>
                <label for="password" class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">Contraseña</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                       class="w-full px-4 py-3 bg-slate-50 border @error('password') border-red-500 @else border-slate-200 @enderror rounded-xl text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:bg-white transition-all"
                       placeholder="••••••••">

                @error('password')
                    <span class="text-red-500 text-xs mt-1 block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Recordarme y Recuperar contraseña -->
            <div class="flex items-center justify-between text-sm py-1">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                           class="w-4 h-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                    <span class="text-slate-600 text-xs">Recordarme</span>
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-xs text-indigo-600 font-semibold hover:underline">
                        ¿Olvidaste tu contraseña?
                    </a>
                @endif
            </div>

            <!-- Botón de Login -->
            <button type="submit" 
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3.5 px-5 rounded-xl text-base transition-all duration-200 shadow-md hover:shadow-indigo-500/25 hover:shadow-lg active:scale-[0.98] mt-2">
                Entrar
            </button>
        </form>
        
        <!-- Enlace a Registro -->
        <div class="mt-6 text-center">
            <p class="text-sm text-slate-500">¿No tienes una cuenta? <a href="{{ route('register') }}" class="text-indigo-600 font-semibold hover:underline">Regístrate aquí</a></p>
        </div>
    </div>
</body>
</html>