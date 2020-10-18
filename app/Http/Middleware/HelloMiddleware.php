<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware {
	/**
	 * Handle an incoming request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
		$data = [
			['name'=>'alpha', 'mail'=>'alpha@mail'],
			['name'=>'bata', 'mail'=>'alpha@mail'],
			['name'=>'gannma', 'mail'=>'alpha@mail'],
		];
		$request->merge(['data'=>$data]);
		return $next($request);
	}
}
