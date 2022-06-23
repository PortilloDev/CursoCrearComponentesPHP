<?php 

use App\User;
use App\AccessHandler;
use App\Interfaces\AuthenticatorInterface;

class AccessHandlerTest extends \PHPUnit\Framework\TestCase
{
    public function tearDown() :void
    {
        Mockery::close();
    }


    public function test_grant_access()
    {   

 
        $access = new AccessHandler($this->getAuthMock());
        $this->assertTrue(
            $access->check('admin')
         );
    }

    public function test_deny_access()
    {

        $access = new AccessHandler($this->getAuthMock());
        
        $this->assertFalse(
            $access->check('user')
         );
    }

    public function getAuthMock()
    {
        $user = Mockery::mock(User::class);
        $user->role = 'admin';

        $auth = Mockery::mock(AuthenticatorInterface::class);
        $auth->shouldReceive('check')
            ->once()
            ->andReturn(true);

        $auth->shouldReceive('user')
            ->once()
            ->andReturn($user);

        return $auth;
    }
}