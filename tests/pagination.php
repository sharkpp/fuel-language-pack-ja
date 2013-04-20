<?php
/**
 * Japanese language package for FuelPHP.
 *
 * @package    JaLangPack
 * @version    1.0
 * @author     sharkpp
 * @license    MIT License
 * @copyright  2013+ sharkpp
 * @link       https://www.sharkpp.net/
 */

// /**
//  * Japanese language package tests
//  *
//  * @group Package
//  * @group LangPack
//  * @group JaLangPack
//  */
// class Tests_Pagination extends \TestCase
// {
// 	static private $inst;
// 
// 	//------------------------------------------------------
// 	// from fuel/core/tests/pagination.php
// 
// 	protected function set_request($uri)
// 	{
// 		// set Request::$main
// 		$this->request = \Request::forge($uri);
// 		$rp = new \ReflectionProperty($this->request, 'main');
// 		$rp->setAccessible(true);
// 		$rp->setValue($this->request, $this->request);
// 
// 		// set Request::$active
// 		$rp = new \ReflectionProperty($this->request, 'active');
// 		$rp->setAccessible(true);
// 		$rp->setValue($this->request, $this->request);
// 	}
// 
// 	public function tearDown()
// 	{
// 		// reset Request::$main
// 		$request = \Request::forge();
// 		$rp = new \ReflectionProperty($request, 'main');
// 		$rp->setAccessible(true);
// 		$rp->setValue($request, false);
// 
// 		// reset Request::$active
// 		$rp = new \ReflectionProperty($request, 'active');
// 		$rp->setAccessible(true);
// 		$rp->setValue($request, false);
// 	}
// 
// 	protected function set_uri_segment_config()
// 	{
// 		$this->config = array(
// 			'uri_segment'    => 3,
// 			'pagination_url' => 'http://docs.fuelphp.com/welcome/index/',
// 			'total_items'    => 100,
// 			'per_page'       => 10,
// 		);
// 	}
// 
// 	//------------------------------------------------------
// 
// 	/**
// 	 * Tests Valid string rule 'required'
// 	 *
// 	 * @test
// 	 */
// 	public function test_previous()
// 	{
// 		// set Request::$main & $active
// 		$this->set_request('welcome/index/');
// 
// 		$this->set_uri_segment_config();
// 		self::$inst = Pagination::forge(__METHOD__, $this->config);
// 
// 		$expected = 'x';
// 		$actual   = self::$inst->previous();
// 		$this->assertEquals($expected, $actual);
// 	}
}
