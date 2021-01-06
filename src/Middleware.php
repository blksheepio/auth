<?php

namespace BlkSheepIo\LaravelAuth;

use Closure;
use Illuminate\Http\Request;

class Middleware
{
	public function handle(Request $request, Closure $next)
	{
		return $next($request);
	}
}