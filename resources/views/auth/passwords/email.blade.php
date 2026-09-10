<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña - Proyectos y Empleados</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 bg-gradient-to-br from-slate-900 via-indigo-950 to-slate-900 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white/95 backdrop-blur-xl rounded-3xl shadow-2xl p-8 sm:p-10 w-full max-w-md border border-white/20 relative overflow-hidden">
        
        <!-- Elemento decorativo -->
        <div class="absolute -top-12 -right-12 w-32 h-32 bg-indigo-500/10 rounded-full blur-2xl pointer-events-none"></div>

        <!-- Encabezado -->
        <div class="text-center mb-6">
            <div class="inline-flex items-center justify-center w-14 h-14 bg-indigo-50 text-indigo-600 rounded-2xl mb-3 shadow-inner">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path></svg>
            </div>
            <h1 class="text-2xl font-extrabold text-slate-900 tracking-tight">Recuperar Contraseña</h1>
            <p class="text-slate-500 text-sm">Te enviaremos un enlace de restablecimiento</p>
        </div>

        <!-- Estado de éxito -->
        @if (session('status'))
            <div class="mb-4 p-3 bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs rounded-xl text-center" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <!-- Formulario -->
        <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
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

            <!-- Botón -->
            <button type="submit" 
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3.5 px-5 rounded-xl text-base transition-all duration-200 shadow-md hover:shadow-indigo-500/25 hover:shadow-lg active:scale-[0.98] mt-2">
                Enviar Enlace de Recuperación
            </button>
        </form>
        
        <!-- Volver al login -->
        <div class="mt-6 text-center">
            <a href="{{ route('login') }}" class="text-sm font-medium text-indigo-600 hover:underline">← Volver al inicio de sesión</a>
        </div>
    </div>
</body>
</html>