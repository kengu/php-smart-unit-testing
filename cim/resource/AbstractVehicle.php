<?php

    /**
     * File containing: AbstractVehicle class
     * 
     * @copyright Copyright 2013 {@link http://www.onevoice.no One Voice AS} 
     *
     * @since 22. May 2013, v. 7.60
     * 
     * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
     */

    namespace cim\resource;
    
    /**
     * AbstractVehicle class
     * 
     * @package 
     */
    abstract class AbstractVehicle extends AbstractResource implements Vehicle
    {
        /**
         * Vehicle passanger capacity
         * @var integer
         */
        protected $capacity;
        
        /**
         * Constructor
         *
         * @param string $name Name
         * @param integer $capacity Passanger capacity
         *
         * @since 22. May 2013, v. 7.60
         * 
         */
        public function __construct($name, $capacity)
        {
            parent::__construct($name);
            $this->capacity = $capacity;
        }// __construct
        
        
        /**
         * Get passanger capacity
         * @since 22. May 2013, v. 7.60
         * @return string Resource Name
         */
        public function getPassengerCapacity()
        {
            return $this->capacity;
        }// getPassangerCapacity


    }// AbstractVehicle
