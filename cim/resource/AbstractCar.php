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
        /**
         * Car registration number
         * @var string
         */
        protected $number;
        
        
        /**
         * Car color name
         * @var string
         */
        protected $color;
        
        
        /**
         * Constructor
         *
         * @param string $name Resource name
         * @param integer $capacity Passanger capacity
         * @param string $number Registration number
         * @param string $color Color name
         *
         * @since 22. May 2013, v. 7.60
         */
        public function __construct($name, $capacity, $number, $color)
        {
            parent::__construct($name, $capacity);
            $this->number= $number;
            $this->color= $color;
            
        }// __construct
        
        
        /**
         * Get registration number
         * @since 22. May 2013, v. 7.60
         * @return string Resource Name
         */
        public function getRegNumber()
        {
            return $this->number;
        }// getRegNumber
        
        
        /**
         * Get car color
         * @since 22. May 2013, v. 7.60
         * @return string Color name
         */
        public function getColor()
        {
            return $this->color;
        }// getColor


    }// AbstractCar
