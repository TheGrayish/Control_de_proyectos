<?php

// app/Http/Middleware/CheckRole.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Verificar si el usuario tiene al menos uno de los roles proporcionados
        if (Auth::check() && Auth::user()->hasAnyRole($roles)) {
            return $next($request);
        }

        // Redirigir o devolver una respuesta en caso de que no tenga el rol requerido
        return redirect('/')->with('error', 'No tienes permiso para acceder a esta página.');
    }
}   