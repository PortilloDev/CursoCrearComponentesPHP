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
        $greeter = GreeterDummy::getInstance('Ivan');
        $this->assertSame(
            'Bienvenido Ivan' ,
            $greeter->welcome() );
    }

}

class GreeterDummy 
{
    protected $name = 'Invitado';
    private static  $instance = NULL;
    private function __construct($name = null)
    {
        if ( $name != null ) {
            $this->name = $name;
        }
    }

    public static function getInstance($name)
    {
        if ( static::$instance == null) {
        
            static::$instance = new GreeterDummy($name);
        
        }

        return   static::$instance;
    }


    public function welcome()
    {
        return 'Bienvenido ' . $this->name;
    }
}