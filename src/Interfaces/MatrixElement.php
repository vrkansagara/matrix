<?php

namespace Vrkansagara\Matrix\Interfaces;

interface MatrixElement
{

    public function getRow(): int;

    public function setRow(int $row);

    public function getColumn(): int;

    public function setColumn(int $row);

    public function getValue(): int;

    public function setValue(int $row);

    public function getPosition(): string;

    public function setPosition(int $row, int $column);
}