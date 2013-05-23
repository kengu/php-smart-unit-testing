<?php

    /**
     * File containing: Vehicle interface test class
     * 
     * @copyright Copyright 2012 {@link http://www.onevoice.no One Voice AS} 
     *
     * @since 22. May 2013, v. 7.60
     * 
     * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
     */

    namespace cim\resource;
    
    /**
     * AbstractVehicleTest class
     * 
	 * @copyright Copyright 2013 {@link http://www.onevoice.no One Voice AS} 
	 *
     * @since 22. May 2013, v. 7.60
	 * 
	 * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
     */
    abstract class AbstractVehicleTest extends AbstractResourceTest
    {
        
        /**
         * Vehicle passanger capacity
         * @var integer 
         */
        protected $capacity;
        
        
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
        public function __construct($type, $name, $capacity, $args=null)
        {            
            // Forward
            parent::__construct($type, $name, self::stripArgs(3, func_get_args()));
            
            // Expected vehicle values
            $this->capacity = $capacity;
            
        }// __construct
        
                
        /**
         * Test if resource is instance of '\cim\resource\Vehicle'
         * 
         * @since 22. May 2013, v. 7.60
         * 
         * @return void
         */
        public function testInstanceOf()
        {
            // Assert implementation
            $this->assertInstanceOf('\cim\resource\Vehicle', $this->resource);
            
        }// testInstanceOf
        
        
        /**
         * Test Vehicle::getPassangerCapacity()
         * 
         * @since 22. May 2013, v. 7.60
         * 
         * @covers \cim\resource\Vehicle->getPassangerCapacity
         * 
         * @return void
         */
        public function testGetPassangerCapacity()
        {
            // Assert implementation
            $this->assertEquals($this->capacity, $this->resource->getPassengerCapacity());
            
        }// testGetPassangerCapacity
        
        
    }// AbstractVehicleTest
