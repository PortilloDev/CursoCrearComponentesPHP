<?php 



class SingletonTest extends \PHPUnit\Framework\TestCase
{

    public function test_singleton_instance()
    {
        $this->assertInstanceOf(
            GreeterDummy::class ,
            GreeterDummy::getInstance() );
    }

    public function test_singleton_create_only_one_instance()
    {
        $this->assertSame(
            GreeterDummy::getInstance() ,
            GreeterDummy::getInstance() );
    }

    public function test_welcome_know_users()
    {
        $greeter = new GreeterDummy('Ivan');
        $this->assertSame(
            'Bienvenido Ivan' ,
            $greeter->welcome() );
    }

    public function test_welcome_guest_users()
    {
        $greeter = new GreeterDummy();
        $this->assertSame(
            'Bienvenido Invitado' ,
            $greeter->welcome() );
    }

}

class GreeterDummy 
{

    protected $name = 'Invitado';
    
    private static  $instance = NULL;

    public function __construct($name = null)
    {
        if ( $name != null ) {
            $this->name = $name;
        }
    }

    public static function getInstance()
    {
        if ( static::$instance == null) {
        
            static::$instance = new GreeterDummy();
        
        }

        return   static::$instance;
    }


    public function welcome()
    {
        return 'Bienvenido ' . $this->name;
    }
}