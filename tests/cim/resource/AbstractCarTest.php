<?php

    /**
     * File containing: Car interface test class
     * 
     * @copyright Copyright 2012 {@link http://www.onevoice.no One Voice AS} 
     *
     * @since 22. May 2013, v. 7.60
     * 
     * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
     */

    namespace cim\resource;
    
    /**
     * AbstractCarTest class
     * 
	 * @copyright Copyright 2013 {@link http://www.onevoice.no One Voice AS} 
	 *
     * @since 22. May 2013, v. 7.60
	 * 
	 * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
     */
    abstract class AbstractCarTest extends AbstractVehicleTest
    {
        
        /**
         * Car registration number
         * @var integer 
         */
        protected $number;
        
        
        /**
         * Constructor
         * 
         * @param string $type Fully qualified class name
         * @param string $name Resource name
         * @param mixed $args Accepts a variable number of arguments 
         * which are passed to the resource implementatino class constructor, 
         * much like call_user_func.
         * 
         * @since 22. May 2013, v. 7.60
         * 
         */
        public function __construct($type, $name, $capacity, $number, $args=null)
        {            
            // Forward
            parent::__construct($type, $name, $capacity, self::stripArgs(4, func_get_args()));
            
            // Expected Car values
            $this->number = $number;
            
        }// __construct
        
                
        /**
         * Test if resource is instance of '\cim\resource\Car'
         * 
         * @since 22. May 2013, v. 7.60
         * 
         * @return void
         */
        public function testInstanceOf()
        {
            // Assert implementation
            $this->assertInstanceOf('\cim\resource\Car', $this->resource);
            
        }// testInstanceOf
        
        
        /**
         * Test Car::getRegNumber()
         * 
         * @since 22. May 2013, v. 7.60
         * 
         * @covers \cim\resource\Car->getRegNumber
         * 
         * @return void
         */
        public function testGetRegNumber()
        {
            // Assert implementation
            $this->assertEquals($this->number, $this->resource->getRegNumber());
            
        }// testGetRegNumber
        
        
    }// AbstractCarTest
