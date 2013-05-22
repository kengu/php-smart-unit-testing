<?php

    /**
     * File containing: AbstractResource class
     * 
     * @copyright Copyright 2013 {@link http://www.onevoice.no One Voice AS} 
     *
     * @since 22. May 2013, v. 7.60
     * 
     * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
     */

    namespace cim\resource;
    
    /**
     * AbstractResource class
     * 
     * @package 
     */
    abstract class AbstractResource implements Resource
    {
        /**
         * Resource name
         * @var string
         */
        protected $name;
        
        /**
         * Constructor
         *
         * @since 22. May 2013, v. 7.60
         * 
         * @param string $name Name
         *
         */
        public function __construct($name)
        {
            $this->name = $name;
        }// __construct
        
        
        /**
         * Get resource name
         * @since 22. May 2013, v. 7.60
         * @return string Resource Name
         */
        public function getName()
        {
            return $this->name;
        }// getName


    }// AbstractResource
