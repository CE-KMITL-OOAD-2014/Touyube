<?php
class AssertingAViewHasSomeData extends TestCase {
public function testMethod()
{
    $this->call('GET', '/login');

    $this->assertViewHas('username');
    $this->assertViewHas('password', $value);
}
}