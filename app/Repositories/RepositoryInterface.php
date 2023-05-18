<?php

namespace App\Repositories;

interface RepositoryInterface 
{

    public function find($id);
    
    public function all();
    
    public function create(array $data);
    
    public function update($id, $data);
    
    public function delete($id);

}