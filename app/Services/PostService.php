<?php

namespace App\Services;

// use App\Repositories\Interfaces\PostInterface;
use App\Services\Interfaces\PostServiceInterface;

class PostService implements PostServiceInterface
{
    /* Triển khai các phương thức trong PostServiceInterface */
    public function all($request){
        echo __METHOD__;
    }
    public function find($id){
        echo __METHOD__;
    }
    public function store($request){
        echo __METHOD__;
    }
    public function update($request, $id){
        echo __METHOD__;
    }
    public function destroy($id){
        echo __METHOD__;
    }
}
