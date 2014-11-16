<?php
class test1 extends TestCase {
public function testSignin()
{
    $response = $this->call('GET', '/');

    $this->assertEquals($response->getContent(),$response->getContent());
}

public function testResponseSignin(){
	$$response = $this->call('GET', '/');

    $this->assertResponseok();
}
}