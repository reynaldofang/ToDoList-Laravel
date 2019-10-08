<?php

namespace App\Repositories;
use app\ToDo;

interface TodoInterface{
    public function create (string $description);
    public function all();
    public function delete(int $id);
    public function get(int $id);   
    public function update(int $id, todo $data);
}   