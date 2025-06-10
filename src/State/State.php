<?php

interface State
{
    public function handle1(Context $context): void;
    public function handle2(Context $context): void;
}