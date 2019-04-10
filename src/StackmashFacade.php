<?php

namespace Stackmash\StackmashLaravel;

use Illuminate\Support\Facades\Facade;

class StackmashFacade extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'Stackmash';
	}
}