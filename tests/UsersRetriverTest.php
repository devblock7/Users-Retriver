<?php
use Theo\UsersRetriver\UsersRetriver;
use PHPUnit\Framework\TestCase;
class UsersRetriverTest extends  TestCase {


    public function test(int $request){

       $test = new UsersRetriver;
       return($test-> getSingleUser($request));
    }

    public function test2(int $request){

        $test = new UsersRetriver;
        return($test-> getUsersList($request));
     }
}