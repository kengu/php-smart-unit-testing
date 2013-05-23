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
     * AudiTest class
     * 
	 * @copyright Copyright 2013 {@link http://www.onevoice.no One Voice AS} 
	 *
     * @since 22. May 2013, v. 7.60
	 * 
	 * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
     */
    class AudiTest extends AbstractCarTest
    {
        const CAPACITY = 5;
        const NUMBER = "AB12345";
        const MTM = true;
        
        /**
         * Constructor
         * 
         * @since 22. May 2013, v. 7.60
         * 
         */
        public function __construct()
        {            
            // Implement test of Audi class
            parent::__construct
            (
                // Car implementation class
                '\cim\resource\Audi', 
                // Expected car values
                Audi::NAME, self::CAPACITY, self::NUMBER, 
                // Implementated car values
                self::CAPACITY, self::NUMBER, self::MTM
            );
            
        }// __construct
        
                
        /**
         * Test Audi::isMTM()
         * 
         * @since 22. May 2013, v. 7.60
         * 
         * @covers \cim\resource\Audi->isMTM
         * 
         * @return void
         */
        public function testIsMTM()
        {
            // Assert implementation
            $this->assertEquals(self::MTM, $this->resource->isMTM());
            
        }// testIsMTM
        
        
    }// AudiTest