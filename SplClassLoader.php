<?php

	/**
	 * File containing: SplClassLoader class
	 * 
	 * @copyright Copyright 2012 {@link http://www.onevoice.no One Voice AS} 
	 *
	 * @since 31. May 2012, v. 6.50
	 * 
	 * @author Kenneth Gulbrandsøy <kenneth@onevoice.no>
	 * 
	 * @link http://phpmaster.com/autoloading-and-the-psr-0-standard/
	 */
	
	/**
	 * SplClassLoader class.
	 * 
	 * SplClassLoader implementation that implements the technical 
	 * interoperability standards for PHP 5.3 namespaces and class names.
	 *
	 * http://groups.google.com/group/php-standards/web/final-proposal
	 *
	 *     // Example which loads classes for the CIM Measurment API Common package 
	 *     // in the \cim\sensor namespace.
	 *     $classLoader = new \cim\SplClassLoader('\cim\sensor', '_package/system/api/cim/sensor');
	 *     $classLoader->register();
	 * 
	 * Based on <a href="https://gist.github.com/221634">SplClassLoader</a> by 
	 * Jonathan H. Wage <jonwage@gmail.com>, Roman S. Borschel <roman@code-factory.org>, 
	 * Matthew Weier O'Phinney <matthew@zend.com>, Kris Wallsmith <kris.wallsmith@gmail.com> 
	 * and Fabien Potencier <fabien.potencier@symfony-project.org>
	 * 
	 * @package \cim
	 */
	class SplClassLoader
	{
		
		private $strNs;
		private $strIncludePath;
		private $strFileExt = 'php';
		private $strNsSeparator = '\\';

		/**
		 * Constructor.
		 * 
		 * Creates a new <tt>SplClassLoader</tt> 
		 * that loads classes of the specified namespace.
		 * 
		 * @param string $strNs The namespace to use.
		 * @param string $strIncludePath The namespace $strIncludePath (relative to namespace root).
		 * 
		 * @since 31. May 2012, v. 6.50
		 * 
		 */
		public function __construct($strNs = null, $strIncludePath = null)
		{
			$this->strNs = $strNs;
			$this->strIncludePath = $strIncludePath;
		}// __construct

		
		/**
		 * Sets the namespace separator used by classes in the namespace of this class loader.
		 * 
		 * @param string $strSeparator The separator to use.
		 * 
		 * @since 31. May 2012, v. 6.50
		 * 
		 * @return void
		 */
		public function setNsSeparator($strSeparator)
		{
			$this->strNsSeparator = $strSeparator;
		}// setNsSeparator
		

		/**
		 * Gets the namespace seperator used by classes in the namespace of this class loader.
		 *
		 * @since 31. May 2012, v. 6.50
		 * 
		 * @return string
		 */
		public function getNsSeparator()
		{
			return $this->strNsSeparator;
		}// getNsSeparator


		/**
		 * Sets the base include path for all class files in the namespace of this class loader.
		 * 
		 * @param string $strIncludePath Class file include path.
		 * 
		 * @since 31. May 2012, v. 6.50
		 * 
		 * @return void
		 */
		public function setIncludePath($strIncludePath)
		{
			$this->strIncludePath = $strIncludePath;
		}// setIncludePath


		/**
		 * Gets the base include path for all class files in the namespace of this class loader.
		 *
		 * @since 31. May 2012, v. 6.50
		 * 
		 * @return string
		 */
		public function getIncludePath()
		{
			return $this->strIncludePath;
		}// getIncludePath


		/**
		 * Sets the file extension of class files in the namespace of this class loader.
		 * 
		 * @param string $strFileExt Class file extension
		 * 
		 * @since 31. May 2012, v. 6.50
		 * 
		 * @return void
		 */
		public function setFileExt($strFileExt)
		{
			$this->strFileExt = $strFileExt;
		}// setFileExt


		/**
		 * Gets the file extension of class files in the namespace of this class loader.
		 *
		 * @since 31. May 2012, v. 6.50
		 * 
		 * @return string
		 */
		public function getFileExt()
		{
			return $this->strFileExt;
		}// getFileExt


		/**
		 * Installs this class loader on the SPL autoload stack.
		 * 
		 * @since 31. May 2012, v. 6.50
		 * 
		 * @return void
		 */
		public function register()
		{
			spl_autoload_register(array($this, 'autoload'));
		}// register


		/**
		 * Uninstalls this class loader from the SPL autoloader stack.
		 * 
		 * @since 31. May 2012, v. 6.50
		 * 
		 * @return void
		 */
		public function unregister()
		{
			spl_autoload_unregister(array($this, 'autoload'));
		}// unregister


		/**
		 * Registered autoload function.
		 *
		 * @param string $className The name of the class to load.
		 * 
		 * 
		 * @since 31. May 2012, v. 6.50
		 * 
		 * @return void
		 */
		public function autoload($className)
		{
			// Forward
			self::loadClass($className, $this->strNs, $this->strNsSeparator, $this->strIncludePath, $this->strFileExt);
			
		}// autoload
		
		
		/**
		 * Load given class.
		 * 
		 * @param string $className The name of the class to load.
		 * @param string $strNs Class namespace
		 * @param string $strNsSeparator Namespace separator
		 * @param string $strIncludePath Class files include path
		 * @param string $strFileExt Class files extension
		 * 
		 * @since 31. May 2012, v. 6.50
		 * 
		 * @return void
		 */
		public static function loadClass($className, $strNs=null, $strNsSeparator='\\',$strIncludePath=__DIR__, $strFileExt='php')
		{
			if(null === $strNs || $strNs . $strNsSeparator === substr($className, 0, strlen($strNs . '.' . $strNsSeparator)-1))
			{
				$fileName = '';
				$namespace = '';
				if(false !== ($lastNsPos = strripos($className, $strNsSeparator)))
				{
					$namespace = substr($className, 0, $lastNsPos);
					$className = substr($className, $lastNsPos + 1);
					$fileName = str_replace($strNsSeparator, DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
				}
				$fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.' . $strFileExt;

				require ($strIncludePath !== null ? $strIncludePath . DIRECTORY_SEPARATOR : '') . $fileName;
			}
		}// loadClass		


	}// SplClassLoader
	