<?php

interface Prototype
{
    public function clone(): Prototype;
    public function operation(): string;
}