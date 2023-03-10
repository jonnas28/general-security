<?php
use Tests\TestCase;
use Illuminate\Http\Response;
class sampleTest extends TestCase
{
    public function testSomethingIsTrue()
    {
        // $this->assertTrue(true);

        // $response = $this->call('GET', '/');

        // $this->assertEquals(200, $response->status());
        $this->seeInDatabase('users', ['email' => 'sally@foo.com']);
    }
}