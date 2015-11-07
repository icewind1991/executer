# Executer

Eval php code in temporary files to enable debugging

```
composer require icewind/executer
```

## Why not just use `eval`?

Since code loaded trough `eval` doesn't come from a file it's not possible for debuggers to show you the code being executed,
by placing the code in a temporary file and including it you gain the ability view the code in your favorite debugger while stepping trough it.

## Usage

```php

use Icewind\Executer\Executer;

$executer = new Executer();
$executer->evalCode('echo "foo"');

```

## API

 - `evalCode(string $code)` Execute eval-compatible code (*doesn't* start with '<?php...')
 - `includeCode(string $code)` Execute include-compatible code (start with '<?php...')
