<?php
/**
 * Copyright (c) 2015 Robin Appelman <icewind@owncloud.com>
 * This file is licensed under the Licensed under the MIT license:
 * http://opensource.org/licenses/MIT
 */

namespace Icewind\Executer\Tests;

use Icewind\Executer\Executer;

class ExecuterTest extends \PHPUnit_Framework_TestCase {
	/**
	 * @var Executer
	 */
	private $executer;

	public function setUp() {
		$this->executer = new Executer();
	}

	public function testEvalCode() {
		$code = 'return 1 + 2;';
		$result = $this->executer->evalCode($code);
		$this->assertEquals(3, $result);
	}

	public function testIncludeCode() {
		$code = '<?php return 1 + 2;';
		$result = $this->executer->includeCode($code);
		$this->assertEquals(3, $result);
	}
}
