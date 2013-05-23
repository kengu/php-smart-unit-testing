<?php

    /**
     * File containing: Mercedes class
     * 
     * @copyright Copyright 2013 {@link http://www.onevoice.no One Voice AS} 
     *
     * @since 22. May 2013, v. 7.60
     * 
     * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
     */

    namespace cim\resource;
    
    /**
     * Mercedes class
     * 
     * @package 
     */
    class Mercedes extends AbstractCar
    {
        const NAME = "Mercedes";
        
        /**
         * Tuned by Aufrecht Melcher Grossaspach flag
         * @var boolean
         */
        private $amg;


        /**
         * Constructor
         * @param integer $capacity Passanger capacity
         * @param string $number Registration number
         * @param string $color Color name
         * @param boolean $amg Tuned by Aufrecht Melcher Grossaspach flag
         *
         * @since 22. May 2013, v. 7.60
         */
        public function __construct($capacity, $number, $color, $amg)
        {
            parent::__construct(self::NAME, $capacity, $number, $color);
            $this->amg = $amg;
        }// _construct
        
        
        /**
         * Check if tuned Aufrecht Melcher Grossaspach Mayer.
         * @since 22. May 2013, v. 7.60
         * @return boolean
         */
        public function isAMG()
        {
            return $this->amg;
        }// isAMG




    
    }// Mercedes
