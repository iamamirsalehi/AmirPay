<?php

namespace App\Presenters\Contracts;

trait Presentable
{
    protected $presenterInstance;

    public function present()
    {
        if(!$this->presenter or !class_exists($this->presenter))
        {
            throw new \Exceptions('Presenter not found');
        }

        if(!$this->presenterInstance)
        {
            $this->presenterInstance = new $this->presenter($this);
        }

        return $this->presenterInstance;
    }
}
