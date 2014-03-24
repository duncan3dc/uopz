--TEST--
Test auto restore internal methods
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
uopz_backup('Exception', '__toString');
uopz_function('Exception', '__toString', function(){
	return "ok";
});

$ex = new Exception();
echo (string) $ex;
?>
--EXPECT--
ok

