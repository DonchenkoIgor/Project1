<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $user = $request->user();

        if (!$user){
            return redirect()->route('login');
        }

        if ($role === 'admin' && !$user->isAdmin()){
            abort(403, 'Forbidden');
        }

        if ($role === 'manager' && !$user->isManager()) {
            abort(403, 'Forbidden');
        }

        if ($role === 'assistant' && !$user->isAssistant()) {
            abort(403, 'Forbidden');
        }

        return $next($request);
    }
}
