<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Proyectos y Empleados</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 bg-gradient-to-br from-slate-900 via-indigo-950 to-slate-900 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl p-8 sm:p-10 w-full max-w-md border border-white/20 relative overflow-hidden">
        
        <!-- Elemento decorativo -->
        <div class="absolute -top-12 -right-12 w-32 h-32 bg-indigo-500/10 rounded-full blur-2xl pointer-events-none"></div>

        <!-- Encabezado -->
        <div class="text-center mb-6">
            <div class="inline-flex items-center justify-center w-14 h-14 bg-indigo-50 text-indigo-600 rounded-2xl mb-3 shadow-inner">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
            </div>
            <h1 class="text-2xl font-extrabold text-slate-900 tracking-tight">Crear Cuenta</h1>
            <p class="text-slate-500 text-sm">Regístrate para unirte al equipo de trabajo</p>
        </div>

        <!-- Formulario de Registro -->
        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <!-- Nombre -->
            <div>
                <label for="name" class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">Nombre Completo</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                       class="w-full px-4 py-3 bg-slate-50 border @error('name') border-red-500 @else border-slate-200 @enderror rounded-xl text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:bg-white transition-all"
                       placeholder="Tu nombre y apellido">

                @error('name')
                    <span class="text-red-500 text-xs mt-1 block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Correo Electrónico -->
            <div>
                <label for="email" class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">Correo Electrónico</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
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
                <input id="password" type="password" name="password" required autocomplete="new-password"
                       class="w-full px-4 py-3 bg-slate-50 border @error('password') border-red-500 @else border-slate-200 @enderror rounded-xl text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:bg-white transition-all"
                       placeholder="••••••••">

                @error('password')
                    <span class="text-red-500 text-xs mt-1 block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Confirmar Contraseña -->
            <div>
                <label for="password-confirm" class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">Confirmar Contraseña</label>
                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password"
                       class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:bg-white transition-all"
                       placeholder="••••••••">
            </div>

            <!-- Botón de Registro -->
            <button type="submit" 
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3.5 px-5 rounded-xl text-base transition-all duration-200 shadow-md hover:shadow-indigo-500/25 hover:shadow-lg active:scale-[0.98] mt-2">
                Registrarse
            </button>
        </form>
        
        <!-- Enlace a Login -->
        <div class="mt-6 text-center">
            <p class="text-sm text-slate-500">¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-indigo-600 font-semibold hover:underline">Inicia sesión</a></p>
        </div>
    </div>
</body>
</html>