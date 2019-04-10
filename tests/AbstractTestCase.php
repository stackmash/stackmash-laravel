<?php

namespace Stackmash\StackmashLaravel\Tests;

use GrahamCampbell\TestBench\AbstractPackageTestCase;

class AbstractTestCase extends AbstractPackageTestCase
{
	protected function setKeys()
	{
		$this->app->config->set('stackmash.public_key', 'YOUR_PUBLIC_KEY');
		$this->app->config->set('stackmash.private_key', 'YOUR_PRIVATE_KEY');
	}

	protected function getServiceProviderClass($app)
	{
		return \Stackmash\StackmashLaravel\StackmashServiceProvider::class;
	}
}