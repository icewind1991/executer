<?php
/**
 * Copyright (c) 2015 Robin Appelman <icewind@owncloud.com>
 * This file is licensed under the Licensed under the MIT license:
 * http://opensource.org/licenses/MIT
 */

namespace Icewind\Executer;

use Makasim\File\TempFile;

class Executer {
	/**
	 * Execute eval-compatible code (doesn't start with '<?php...')
	 *
	 * @param string $code
	 * @return mixed
	 */
	public function evalCode($code) {
		return $this->includeCode("<?php\n\n" . $code);
	}

	/**
	 * Execute include-compatible code (start with '<?php...')
	 *
	 * @param string $code
	 * @return mixed
	 */
	public function includeCode($code) {
		$file = TempFile::generate('executer-tmp-file', '.php');
		file_put_contents($file->getPathname(), $code);
		return include $file->getPathname();
	}
}
