<?php

namespace Illuminate\Contracts\Auth;

use App\Models\User;

interface Guard
{
    public function user(): User;
}
