<?php 

/**
 * This is optional, but if the constants are set,
 * the class can use them instead of passing in constructor 
 * params at instantiation.
 */
include('./db.config.php');

/**
 * Main include
 */
include('./db.class.php');

/**
 * Helper function
 */
include('./helpers.php');

/**
 * Instantiate
 */
$db = new Db();

/**
 - OR - 
 */
// $db = new Db('localhost', 'user', 'pass');


/************************************************************
 * CRUD Examples
 ************************************************************/

/**
 * Create
 */
$sql = "insert into test
		set data=?,
			created=?;";
$db->write($sql, array('my data', time()));

/**
 * Update
 */
$sql = "update test
		set data=?,
			created=?
		where id=?
		limit 1;";
$res = $db->write($sql, array('my data updated', time(), 1));
dump($res);

/**
 * Delete
 */
$sql = "delete from test
		where id=?
		limit 1;";
$res = $db->write($sql, array(1));
dump($rs);


/**
 * Read single row
 */
$sql = "select *
		from test
		where id=?;";
$res = $db->row($sql, array(2));
dump($res);

/**
 * Read multiple rows
 */
$sql = "select *
		from test;";
$res = $db->rows($sql);
dump($res);

/**
 * Dump query for debugging and kill script
 */
$sql = "select *
		from test
		where id=?;";
$res = $db->row($sql, array(2), true);
dump($res);

