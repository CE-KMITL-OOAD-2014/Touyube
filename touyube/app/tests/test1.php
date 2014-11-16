<?php
class AssertingResponsesAreOK extends TestCase {
public function testMethod()
{
    $this->call('GET', '/index');

    $this->assertResponseOk();
}
}