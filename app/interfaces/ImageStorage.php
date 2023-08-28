<?php

namespace App\interfaces;
use illuminate\http\Request;

interface imageStorage{
    public function store(Request $request):void;
}
