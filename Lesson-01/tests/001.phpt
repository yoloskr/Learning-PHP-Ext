--TEST--
Check for my_starts_with presence
--SKIPIF--
<?php if (!extension_loaded("my_starts_with")) print "skip"; ?>
--FILE--
<?php 
echo "my_starts_with extension is available\n";
var_dump(starts_with("hello","he"));
var_dump(starts_with("hello","world"));
?>
--EXPECT--
my_starts_with extension is available
bool(true)
bool(false)
