<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Setting;

class CheckMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $setting = Setting::find(1)->firstOrFail();
        $maintenance_mode = $setting->maintenance_mode;


        // dd($request->maintenance_mode);
        if ($maintenance_mode) {
            return redirect('soon ');
        } else {
            return $next($request);
        }
    }
}
