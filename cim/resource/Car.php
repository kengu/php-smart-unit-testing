<?php

    /**
     * File containing: Car interface
     * 
     * @copyright Copyright 2013 {@link http://www.onevoice.no One Voice AS} 
     *
     * @since 22. May 2013, v. 7.60
     * 
     * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
     */

    namespace cim\resource;
    
    /**
     * Car class
     * 
     * @package 
     */
    interface Car extends Vehicle
    {
        /**
         * Get car registration number
         * @since 22. May 2013, v. 7.60
         * @return integer Number of passanger
         */
        public function getRegNumber();
        
    }// Car
