<?php

namespace Stackmash\StackmashLaravel\Tests;

use Stackmash\StackmashProject;
use Stackmash\StackmashLaravel\StackmashFacade;
use GrahamCampbell\TestBenchCore\FacadeTrait;

class StackmashTest extends AbstractTestCase
{
	use FacadeTrait;

	protected function getFacadeAccessor()
	{
		return 'Stackmash';
	}

	protected function getFacadeClass()
	{
		return StackmashFacade::class;
	}

	protected function getFacadeRoot()
	{
		return StackmashProject::class;
	}
}