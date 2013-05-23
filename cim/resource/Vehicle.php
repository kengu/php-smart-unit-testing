<?php

    /**
     * File containing: Vehicle interface
     * 
     * @copyright Copyright 2013 {@link http://www.onevoice.no One Voice AS} 
     *
     * @since 22. May 2013, v. 7.60
     * 
     * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
     */

    namespace cim\resource;

    /**
     * Vehicle class
     * 
     * @package cim\resource
     */
    interface Vehicle extends Resource
    {
        /**
         * Get passanger capacity
         * @since 22. May 2013, v. 7.60
         * @return integer Number of passanger
         */
        public function getPassengerCapacity();
        
    }// Vehicle
