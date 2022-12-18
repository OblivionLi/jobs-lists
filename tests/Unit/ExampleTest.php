<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    // /**
    //  * A basic test example.
    //  *
    //  * @return void
    //  */
    // public function test_that_true_is_true()
    // {
    //     $this->assertTrue(true);
    // }


    public function test_mysql_connection()
    {
        if(DB::connection()->getDatabaseName()) {
            $this->assertTrue(true);
        }
    }
}
