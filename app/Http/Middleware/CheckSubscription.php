<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckSubscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if (!$user || !$user->business) {
            abort(403, 'Akses ditolak.');
        }

        $business = $user->business;

        // Cek apakah langganan masih aktif
        if (
            !$business->subscription_end ||
            now()->gt($business->subscription_end)
        ) {
            return redirect()->route('subscription.expired')->with('error', 'Langganan Anda sudah berakhir.');
        }

        return $next($request);
    }
}
