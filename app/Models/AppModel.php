<?php 

namespace App\Models;

use Configuration\Connection;

require_once('./configuration/Connection.php');

class AppModel extends Connection {
    private $table;

    function __construct()
    {
        parent::__construct();
        $this->table = '';
    }
}