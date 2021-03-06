<?php
namespace Test\Unit\UserController;

use Service\DbConnection;
use Service\NonValidConnectionException;

class DbConnectionFailMock extends DbConnection {

    public function __construct(){
        throw new NonValidConnectionException();
    }

    public function close(): void{
    }

}