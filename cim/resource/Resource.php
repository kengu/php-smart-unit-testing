<?php

    /**
     * File containing: Resource interface
     * 
     * @copyright Copyright 2013 {@link http://www.onevoice.no One Voice AS} 
     *
     * @since 22. May 2013, v. 7.60
     * 
     * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
     */
    
    namespace cim\resource;

    /**
     * Resource class
     * 
     * @package 
     */
    interface Resource
    {
        /**
         * Get resource instance name
         * @since 22. May 2013, v. 7.60
         * @return string Resource name
         */
        public function getName();
        
        
    }// Resource
