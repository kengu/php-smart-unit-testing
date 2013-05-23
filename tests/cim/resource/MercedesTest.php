<?php

    /**
     * File containing: Car test class
     * 
     * @copyright Copyright 2012 {@link http://www.onevoice.no One Voice AS} 
     *
     * @since 22. May 2013, v. 7.60
     * 
     * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
     */

    namespace cim\resource;
    
    /**
     * MercedesTest class
     * 
	 * @copyright Copyright 2013 {@link http://www.onevoice.no One Voice AS} 
	 *
     * @since 22. May 2013, v. 7.60
	 * 
	 * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
     */
    class MercedesTest extends AbstractCarTest
    {
        const CAPACITY = 5;
        const NUMBER = "AB12345";
        const COLOR = "red";
        const AMG = true;
        
        /**
         * Constructor
         * 
         * @since 22. May 2013, v. 7.60
         * 
         */
        public function __construct()
        {            
            // Implement test of Mercedes class
            parent::__construct
            (
                // Car implementation class
                '\cim\resource\Mercedes', 
                // Expected car values
                Mercedes::NAME, self::CAPACITY, self::NUMBER, self::COLOR,
                // Implementated car values
                self::CAPACITY, self::NUMBER, self::COLOR, self::AMG
            );
            
        }// __construct
        
                
        /**
         * Test Mercedes::isAMG()
         * 
         * @since 22. May 2013, v. 7.60
         * 
         * @covers \cim\resource\Mercedes->isAMG
         * 
         * @return void
         */
        public function testIsAMG()
        {
            // Assert implementation
            $this->assertEquals(self::AMG, $this->resource->isAMG());
            
        }// testIsAMG
        
        
    }// MercedesTest