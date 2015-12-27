--TEST--
Check for using user magic file
--SKIPIF--
<?php
if ( ! extension_loaded ('filebin') ) {
    print 'skip';
}
?>
--POST--
--GET--
--INI--
--FILE--
<?php
if ( filebin ('modules/filebin.so', '/usr/share/misc/magic.mgc') == null )
	echo 'skip';
else
	echo "using user magic file success";

?>
--EXPECT--
using user magic file success
