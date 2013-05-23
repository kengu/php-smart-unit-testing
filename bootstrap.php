<?php

    /**
	 * bootstrap
	 * 
	 * @copyright Copyright 2013 {@link http://www.onevoice.no One Voice AS} 
	 *
     * @since 22. May 2013, v. 7.60
	 * 
	 * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
	 */
    
    // Define constants
	define('_CFG_PATH',__DIR__);
	define('_CIM_CLASS_LOADER','ClassLoader');
	define('_SPL_CLASS_LOADER','SplClassLoader');
    
    // Load dependencies
	require(implode(DIRECTORY_SEPARATOR,array(__DIR__,_SPL_CLASS_LOADER.'.php')));
	require(implode(DIRECTORY_SEPARATOR,array(__DIR__,'cim',_CIM_CLASS_LOADER.'.php')));
    
    // Load test dependencies
	require(implode(DIRECTORY_SEPARATOR,array(__DIR__,'tests','cim','resource','AbstractResourceTest.php')));
	require(implode(DIRECTORY_SEPARATOR,array(__DIR__,'tests','cim','resource','AbstractVehicleTest.php')));
	require(implode(DIRECTORY_SEPARATOR,array(__DIR__,'tests','cim','resource','AbstractCarTest.php')));
    
	// Create CIM API class loader instance
	$_SESSION[_CIM_CLASS_LOADER] = new cim\ClassLoader();

	// Register class loader instance with SPL
	$_SESSION[_CIM_CLASS_LOADER]->register();    