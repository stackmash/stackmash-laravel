<?php

namespace Stackmash\StackmashLaravel\Tests;

use Stackmash\StackmashProject;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;

class ServiceProviderTest extends AbstractTestCase
{
	use ServiceProviderTrait;

	public function testStackmashIsInjectable()
	{
		$this->assertIsInjectable(StackmashProject::class);
	}
}