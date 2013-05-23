<?php

    /**
     * File containing: Audi class
     * 
     * @copyright Copyright 2013 {@link http://www.onevoice.no One Voice AS} 
     *
     * @since 22. May 2013, v. 7.60
     * 
     * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
     */

    namespace cim\resource;
    
    /**
     * Audi class
     * 
     * @package 
     */
    class Audi extends AbstractCar
    {
        const NAME = "Audi";
        
        /**
         * Tuned by Motoren Technik Mayer flag
         * @var boolean
         */
        private $mtm;


        /**
         * Constructor
         * @param integer $capacity Passanger capacity
         * @param string $number Registration number
         * @param boolean Tuned by Motoren Technik Mayer flag
         *
         * @since 22. May 2013, v. 7.60
         */
        public function __construct($capacity, $number, $mtm)
        {
            parent::__construct(self::NAME, $capacity, $number);
            $this->mtm = $mtm;
        }// _construct
        
        
        /**
         * Check if tuned by Motoren Technik Mayer.
         * @since 22. May 2013, v. 7.60
         * @return boolean
         */
        public function isMTM()
        {
            return $this->mtm;
        }// isMTM




    
    }// Audi
