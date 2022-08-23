<?php
 
namespace App\Http\Middleware;
 
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;
use Closure;
 
class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // if ($request->input('token') !== 'my-secret-token') {
        //     return redirect('home');
        // }

        // dd(Auth::user());

        // if(Auth::user()->role_id != 0){
        //     abort(404);
        // }

        // Другой вариант
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role_id' => 1])){
            return redirect()->route('dashboard');
        }
        else{
            return abort(404);
        }
 
        return $next($request);
    }
}