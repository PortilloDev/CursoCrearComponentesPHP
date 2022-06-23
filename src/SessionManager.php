<?php
namespace App;

use App\Interfaces\SessionDriverInterface;
  
class SessionManager
{

    /**
     * @var \App\Interface\SessionDriverInterface
     */
    protected $driver;

    protected  $data = array();


    /**
     * @param \App\Interface\SessionDriverInterface $driver
     */
    public function __construct(SessionDriverInterface $driver) 
    {
        $this->driver = $driver;

        $this->load();
    }

   

    public  function load()
    {
        $this->data = $this->driver->load();
    }


    public  function get($key)
    {
        return isset($this->data[$key]) 
                       ?  $this->data[$key]
                       :  null ;
    }
}