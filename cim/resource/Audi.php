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
         * Get resource name
         * @since 22. May 2013, v. 7.60
         * @return string Resource Name
         */
        public function getName()
        {
            return self::NAME;
        }// getName


    }// Audi
