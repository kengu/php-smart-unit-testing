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
        const NAME = "Vehicle";
        
        /**
         * Vehicle passanger capacity
         * @var integer
         */
        protected $capacity;
        
        /**
         * Constructor
         *
         * @param integer $capacity Passanger capacity
         *
         * @since 22. May 2013, v. 7.60
         * 
         */
        public function __construct($capacity)
        {
            parent::__construct(self::NAME);
            $this->capacity = $capacity;
        }// __construct
        
        
        /**
         * Get passanger capacity
         * @since 22. May 2013, v. 7.60
         * @return string Resource Name
         */
        public function getPassangerCapacity()
        {
            return $this->capacity;
        }// getPassangerCapacity


    }// AbstractVehicle
