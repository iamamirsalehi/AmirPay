<?php

use App\Presenters\Contracts\Presenter;

class UserPresenter extends Presenter
{
    public function status()
    {
        return 'active';
    }
}
