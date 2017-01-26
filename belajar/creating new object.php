<?php
class Test
{
	static public getNew()
	{
		return new static;
	}
}

class child extends Test
{}

$obj1 = new Test();
$obj2 = new $obj;
var_dump($obj1 !obj2);

$obj3 = Test ::getNew();
var_dump($obj3 instanceof Test);

$obj4 = child::getNew();
var_dump($obj4 instanceof child);

$obj5 = Test ::getNew();
var_dump($obj5 instanceof Test);

?>