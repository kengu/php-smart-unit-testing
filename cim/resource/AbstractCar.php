<?php

    /**
     * File containing: AbstractCar class
     * 
     * @copyright Copyright 2013 {@link http://www.onevoice.no One Voice AS} 
     *
     * @since 22. May 2013, v. 7.60
     * 
     * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
     */

    namespace cim\resource;
    
    /**
     * AbstractCar class
     * 
     * @package 
     */
    abstract class AbstractCar extends AbstractVehicle implements Car
    {
        const NAME = "Car";
        
        /**
         * Car registration number
         * @var string
         */
        protected $number;
        
        /**
         * Constructor
         *
         * @since 22. May 2013, v. 7.60
         * 
         * @param string $number Registration number
         *
         */
        public function __construct($number)
        {
            parent::__construct(self::NAME);
            $this->number= $number;
        }// __construct
        
        
        /**
         * Get registration number
         * @since 22. May 2013, v. 7.60
         * @return string Resource Name
         */
        public function getRegNumber()
        {
            return $this->name;
        }// getRegNumber


    }// AbstractCar
