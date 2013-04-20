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

/**
 * Japanese language package tests
 *
 * @group Package
 * @group LangPack
 * @group JaLangPack
 */
class Tests_Validation extends \TestCase
{
	static private $inst;

	public function setup()
	{
		self::$inst = \Validation::forge('validate.'.uniqid('',true));

		$_POST = array();
	}

	/**
	 * Tests Valid string rule 'required'
	 *
	 * @test
	 */
	public function test_required()
	{
		$name   = 'test';
		$label  = 'Test field';
		$params = array('label' => $label);

		self::$inst
			-> add($name, $label)
			-> add_rule('required');

		$this->assertFalse( self::$inst->run(array($name => '')) );

		$expected = array( $name => \Lang::get('validation.required', $params, null, 'ja') );
		$actual   = array_map(function($v){ return (string)$v; }, self::$inst->error());
		$this->assertEquals($expected, $actual);
	}

	/**
	 * Tests Valid string rule 'required_with'
	 *
	 * @test
	 */
	public function test_required_with()
	{
		$name   = 'test';
		$label  = 'Test field';
		$field  = 'test2';
		$label2 = 'Test field 2';
		$params = array('label' => $label, 'param:1' => $label2);

		self::$inst
			-> add($name, $label)
			-> add_rule('required_with', $field);
		self::$inst
			-> add($field, $label2);

		$this->assertFalse( self::$inst->run(array($field => 'abc')) );

		$expected = array( $name => \Lang::get('validation.required_with', $params, null, 'ja') );
		$actual   = array_map(function($v){ return (string)$v; }, self::$inst->error());
		$this->assertEquals($expected, $actual);
	}

	/**
	 * Tests Valid string rule 'match_value'
	 *
	 * @test
	 */
	public function test_match_value()
	{
		$name   = 'test';
		$label  = 'Test field';
		$num    = 5;
		$params = array('label' => $label, 'param:1' => $num);

		self::$inst
			-> add($name, $label)
			-> add_rule('match_value', $num);

		$this->assertFalse( self::$inst->run(array($name => 'aaaaaaaaa')) );

		$expected = array( $name => \Lang::get('validation.match_value', $params, null, 'ja') );
		$actual   = array_map(function($v){ return (string)$v; }, self::$inst->error());
		$this->assertEquals($expected, $actual);
	}

	/**
	 * Tests Valid string rule 'match_pattern'
	 *
	 * @test
	 */
	public function test_match_pattern()
	{
		$name   = 'test';
		$label  = 'Test field';
		$pattern= '/^b+$/';
		$params = array('label' => $label, 'param:1' => $pattern);

		self::$inst
			-> add($name, $label)
			-> add_rule('match_pattern', $pattern);

		$this->assertFalse( self::$inst->run(array($name => 'aaaaaaaaa')) );

		$expected = array( $name => \Lang::get('validation.match_pattern', $params, null, 'ja') );
		$actual   = array_map(function($v){ return (string)$v; }, self::$inst->error());
		$this->assertEquals($expected, $actual);
	}

	/**
	 * Tests Valid string rule 'match_field'
	 *
	 * @test
	 */
	public function test_match_field()
	{
		$name   = 'test';
		$label  = 'Test field';
		$field  = 'test2';
		$label2 = 'Test field 2';
		$params = array('label' => $label, 'param:1' => $label2);

		self::$inst
			-> add($name, $label)
			-> add_rule('match_field', $field);
		self::$inst
			-> add($field, $label2);

		$this->assertFalse( self::$inst->run(array($name => 'aaaaaaaaa', $field => 'bbbbbbbbb')) );

		$expected = array( $name => \Lang::get('validation.match_field', $params, null, 'ja') );
		$actual   = array_map(function($v){ return (string)$v; }, self::$inst->error());
		$this->assertEquals($expected, $actual);
	}

	/**
	 * Tests Valid string rule 'min_length'
	 *
	 * @test
	 */
	public function test_min_length()
	{
		$name   = 'test';
		$label  = 'Test field';
		$num    = 5;
		$params = array('label' => $label, 'param:1' => $num);

		self::$inst
			-> add($name, $label)
			-> add_rule('min_length', $num);

		$this->assertFalse( self::$inst->run(array($name => 'a')) );

		$expected = array( $name => \Lang::get('validation.min_length', $params, null, 'ja') );
		$actual   = array_map(function($v){ return (string)$v; }, self::$inst->error());
		$this->assertEquals($expected, $actual);
	}

	/**
	 * Tests Valid string rule 'max_length'
	 *
	 * @test
	 */
	public function test_max_length()
	{
		$name   = 'test';
		$label  = 'Test field';
		$num    = 5;
		$params = array('label' => $label, 'param:1' => $num);

		self::$inst
			-> add($name, $label)
			-> add_rule('max_length', $num);

		$this->assertFalse( self::$inst->run(array($name => 'aaaaaaaaa')) );

		$expected = array( $name => \Lang::get('validation.max_length', $params, null, 'ja') );
		$actual   = array_map(function($v){ return (string)$v; }, self::$inst->error());
		$this->assertEquals($expected, $actual);
	}

	/**
	 * Tests Valid string rule 'exact_length'
	 *
	 * @test
	 */
	public function test_exact_length()
	{
		$name   = 'test';
		$label  = 'Test field';
		$num    = 5;
		$params = array('label' => $label, 'param:1' => $num);

		self::$inst
			-> add($name, $label)
			-> add_rule('exact_length', $num);

		$this->assertFalse( self::$inst->run(array($name => 'aaaaaaaaa')) );

		$expected = array( $name => \Lang::get('validation.exact_length', $params, null, 'ja') );
		$actual   = array_map(function($v){ return (string)$v; }, self::$inst->error());
		$this->assertEquals($expected, $actual);
	}

	/**
	 * Tests Valid string rule 'valid_email'
	 *
	 * @test
	 */
	public function test_valid_email()
	{
		$name   = 'email';
		$label  = 'e-mail';
		$params = array('label' => $label);

		self::$inst
			-> add($name, $label)
			-> add_rule('valid_email');

		$this->assertFalse( self::$inst->run(array($name => 'foo..bar@example.com')) );

		$expected = array( $name => \Lang::get('validation.valid_email', $params, null, 'ja') );
		$actual   = array_map(function($v){ return (string)$v; }, self::$inst->error());
		$this->assertEquals($expected, $actual);
	}

	/**
	 * Tests Valid string rule 'valid_emails'
	 *
	 * @test
	 */
	public function test_valid_emails()
	{
		$name   = 'email';
		$label  = 'e-mail';
		$params = array('label' => $label);

		self::$inst
			-> add($name, $label)
			-> add_rule('valid_emails');

		$this->assertFalse( self::$inst->run(array($name => 'foo..bar@example.com,foo@example.com')) );

		$expected = array( $name => \Lang::get('validation.valid_emails', $params, null, 'ja') );
		$actual   = array_map(function($v){ return (string)$v; }, self::$inst->error());
		$this->assertEquals($expected, $actual);
	}

	/**
	 * Tests Valid string rule 'valid_url'
	 *
	 * @test
	 */
	public function test_valid_url()
	{
		$name   = 'test';
		$label  = 'Test field';
		$params = array('label' => $label);

		self::$inst
			-> add($name, $label)
			-> add_rule('valid_url');

		$this->assertFalse( self::$inst->run(array($name => 'xxxxx')) );

		$expected = array( $name => \Lang::get('validation.valid_url', $params, null, 'ja') );
		$actual   = array_map(function($v){ return (string)$v; }, self::$inst->error());
		$this->assertEquals($expected, $actual);
	}

	/**
	 * Tests Valid string rule 'valid_ip'
	 *
	 * @test
	 */
	public function test_valid_ip()
	{
		$name   = 'test';
		$label  = 'Test field';
		$params = array('label' => $label);

		self::$inst
			-> add($name, $label)
			-> add_rule('valid_ip');

		$this->assertFalse( self::$inst->run(array($name => 'localhost')) );

		$expected = array( $name => \Lang::get('validation.valid_ip', $params, null, 'ja') );
		$actual   = array_map(function($v){ return (string)$v; }, self::$inst->error());
		$this->assertEquals($expected, $actual);
	}

	/**
	 * Tests Valid string rule 'numeric_min'
	 *
	 * @test
	 */
	public function test_numeric_min()
	{
		$name   = 'test';
		$label  = 'Test field';
		$num    = 5;
		$params = array('label' => $label, 'param:1' => $num);

		self::$inst
			-> add($name, $label)
			-> add_rule('numeric_min', $num);

		$this->assertFalse( self::$inst->run(array($name => '0')) );

		$expected = array( $name => \Lang::get('validation.numeric_min', $params, null, 'ja') );
		$actual   = array_map(function($v){ return (string)$v; }, self::$inst->error());
		$this->assertEquals($expected, $actual);
	}

	/**
	 * Tests Valid string rule 'numeric_max'
	 *
	 * @test
	 */
	public function test_numeric_max()
	{
		$name   = 'test';
		$label  = 'Test field';
		$num    = 5;
		$params = array('label' => $label, 'param:1' => $num);

		self::$inst
			-> add($name, $label)
			-> add_rule('numeric_max', $num);

		$this->assertFalse( self::$inst->run(array($name => '10')) );

		$expected = array( $name => \Lang::get('validation.numeric_max', $params, null, 'ja') );
		$actual   = array_map(function($v){ return (string)$v; }, self::$inst->error());
		$this->assertEquals($expected, $actual);
	}

	/**
	 * Tests Valid string rule 'numeric_between'
	 *
	 * @test
	 */
	public function test_numeric_between()
	{
		$name   = 'test';
		$label  = 'Test field';
		$num1   = 5;
		$num2   = 10;
		$params = array('label' => $label, 'param:1' => $num1, 'param:2' => $num2);

		self::$inst
			-> add($name, $label)
			-> add_rule('numeric_between', $num1, $num2);

		$this->assertFalse( self::$inst->run(array($name => '20')) );

		$expected = array( $name => \Lang::get('validation.numeric_between', $params, null, 'ja') );
		$actual   = array_map(function($v){ return (string)$v; }, self::$inst->error());
		$this->assertEquals($expected, $actual);
	}
}
