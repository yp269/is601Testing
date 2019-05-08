<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::inRandomOrder()->first();
        $this->assertIsString('int',$user->id);
        $this->assertIsString('string' ,$user->email);
        $this->assertInstanceOf('App\User' ,$user);
        $this->assertIsString('string' ,$user->name);
        $this->assertnotNull('string' ,$user->name);

    }

}