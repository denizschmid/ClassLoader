<?php
	require_once "../ClassLoader.php";
	use Dansnet\ClassLoader;
	
	class ClassLoaderTest extends PHPUnit_Framework_TestCase {
		
		public function testInitClassLoader() {
			$classloader = new ClassLoader("../test/");
			$this->assertNotNull($classloader);
		}
		
		/**
		 * @depends testInitClassLoader
		 */
		public function testLoadClass() {
			$this->assertNotNull(new TestClass());
			$this->assertNotNull(new TestClass2());
		}
		
	}
	
	
