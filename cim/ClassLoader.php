<?php

	/**
	 * File containing: CIM API SplClassLoader class
	 * 
	 * @copyright Copyright 2012 {@link http://www.onevoice.no One Voice AS}
	 *
	 * @since 22. June 2012, v. 6.50
	 * 
	 * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
	 */
	
	namespace cim;

	/**
	 * CIM API SplClassLoader class implementation.
	 * 
	 * @package \cim
	 */
	class ClassLoader extends \SplClassLoader
	{
		/**
		 * Constructor.
		 * 
		 * Creates a new CIM API <tt>SplClassLoader</tt> 
		 * that automatically load classes from namespace 
		 * <tt>\cim</tt>.
         * 
         * @param string $root Root path (optional, default: _CFG_PATH_API)
		 * 
		 * @since 31. May 2012, v. 6.50
		 */
		public function __construct($root=_CFG_PATH_API)
		{
			// Forward
			parent::__construct('cim', $root);
			
		}// __construct


	}// ClassLoader	
	
	
	