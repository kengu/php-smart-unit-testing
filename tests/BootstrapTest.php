<?php

    /**
     * Test class for bootstrap.php
     * 
	 * @copyright Copyright 2013 {@link http://www.onevoice.no One Voice AS} 
	 *
     * @since 22. May 2013, v. 7.60
	 * 
	 * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
     */
    class BootstrapTest extends PHPUnit_Framework_TestCase
    {

        /**
         * @covers SplClassLoaderTest::{origMethodName}
         * @todo Implement testSetNsSeparator().
         */
        public function testBootstrap()
        {
            // Assert constants
            $this->assertTrue(defined('_SPL_CLASS_LOADER'), "Constant _SPL_CLASS_LOADER not defined");
            $this->assertTrue(defined('_CIM_CLASS_LOADER'), "Constant _CIM_CLASS_LOADER not defined");

            // Assert classes
            $this->assertTrue(class_exists('SplClassLoader'), "Class 'SplClassLoader' does not exist");
            $this->assertTrue(class_exists('\cim\ClassLoader'), "Class '\cim\ClassLoader' does not exist");
        }// testBootstrap
        
        
    }
