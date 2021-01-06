<?php

namespace BlkSheepIo\LaravelAuth;

use Closure;
use Illuminate\Http\Request;

class BeforeMiddleware
{
	public function handle(Request $request, Closure $next)
	{
		return $next($request);
	}
}