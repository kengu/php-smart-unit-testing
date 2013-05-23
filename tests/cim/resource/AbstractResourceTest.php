<?php

    /**
     * File containing: Resource interface test class
     * 
     * @copyright Copyright 2012 {@link http://www.onevoice.no One Voice AS} 
     *
     * @since 22. May 2013, v. 7.60
     * 
     * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
     */

    namespace cim\resource;
    
    /**
     * AbstractResourceTest class
     * 
	 * @copyright Copyright 2013 {@link http://www.onevoice.no One Voice AS} 
	 *
     * @since 22. May 2013, v. 7.60
	 * 
	 * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
     */
    abstract class AbstractResourceTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * Resource instance.
         * 
         * @var Resource
         */
        protected $resource;        
        
        
        /**
         * Resource type (implementation class name)
         * @var string 
         */
        protected $type;
        
        
        /**
         * Resource name
         * @var string 
         */
        protected $name;
        
        
        /**
         * Resource implementation arguments
         * @var mixed 
         */
        protected $args;        
        
        
        /**
         * Constructor
         * 
         * @param string $type Fully qualified implementation class name
         * @param string $name Resource name
         * @param mixed $args Accepts a variable number of arguments 
         * which are passed to the resource implementatino class constructor, 
         * much like call_user_func.
         * 
         * @since 22. May 2013, v. 7.60
         * 
         */
        public function __construct($type, $name, $args=null)
        {            
            // Prepare
            $this->name = $name;
            $this->type = $type;
            
            // Get model class constructor arguments
            $this->args = self::stripArgs(2,func_get_args());
            
        }// __construct
        
        
        /**
         * String given number of arguments
         * @param integer $count
         * @param array $args
         * @since 22. May 2013, v. 7.60
         * @return array
         */
        protected static function stripArgs($count, $args)
        {
            if(isset($args) && count($args)>$count)
            {   
                $args = array_slice($args, $count);
                return is_array($args) ? self::flatten($args) : array($args);
            }// if
            
            return array();
            
        }// stripArgs
        
        
        /**
         * Flatten array into one level
         * @param array $args
         * @since 22. May 2013, v. 7.60
         * @return array
         */
        private static function flatten($args)
        {
            $flatten = array();
            foreach($args as $arg)
            {
                $flatten = array_merge($flatten, is_array($arg) ? $arg : array($arg)); 
            }// foreach
            return $flatten;
            
        }// flatten
        
                
        /**
         * Initialize Resource instance
         * 
         * This method is called before a each test is executed.
         * 
         * @since 02. May 2013, v. 7.60
         */
        protected function setUp()
        {
            // Set up local fixtures
            $this->resource = $this->newInstance();
            
        }// setUp
        
        
        /**
         * Create resource instance
         * 
         * @param string $name Cache name
         * 
         * @since 03. May 2013, v. 7.60
         * 
         * @return Cache
         */
        protected function newInstance()
        {
            // Has arguments?
            $reflect = new \ReflectionClass($this->type);
            
            print_r($this->args);
            
            // Invoke constructor with any number of optional arguments
            return call_user_func_array( 
                array
                ( 
                    $reflect, 
                    'newInstance' 
                ), 
                array_merge($this->args)
            ); 
            
        }// newInstance


        /**
         * Release references
         * 
         * This method is called after each test is executed.
         * 
         * @since 18. July 2012, v. 6.80
         * 
         * @return void
         */
        protected function tearDown()
        {
            unset($this->resource);
            
        }// tearDown        


        /**
         * Test if resource is instance of '\cim\resource\Resource'
         * 
         * @since 22. May 2013, v. 7.60
         * 
         * @return void
         */
        public function testInstanceOf()
        {
            // Assert implementation
            $this->assertInstanceOf('\cim\resource\Resource', $this->resource);
            
        }// testInstanceOf
        
        
        /**
         * Test getName()
         * 
         * @since 22. May 2013, v. 7.60
         * 
         * @covers \cim\resource\Resource->getName
         * 
         * @return void
         */
        public function testGetName()
        {
            // Assert implementation
            $this->assertEquals($this->name, $this->resource->getName());
            
        }// testGetName
        
        
    }// AbstractResourceTest
