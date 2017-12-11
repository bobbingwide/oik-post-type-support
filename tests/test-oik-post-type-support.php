<?php // (C) Copyright Bobbing Wide 2017

/**
 * @package oik-post-type-support
 * 
 * Test the functions in oik-post-type-support.php
 */
class Tests_oik_post_type_support extends BW_UnitTestCase {

	function setUp() {
		parent::setUp();
	}

	/**
	 * Test pages support excerpts
	 *
	 * This assumes we haven't added excerpt support by another mechanism!
	 *
	 */
	function test_page_supports_excerpt() {
		oik_require( "oik-post-type-support.php", "oik-post-type-support" );
		$actual = post_type_supports( "page", "excerpt" );
		$this->assertTrue( $actual );
	}
	
}

