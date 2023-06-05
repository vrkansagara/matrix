<?php

namespace Vrkansagara\Matrix\Interfaces;

interface MatrixElement
{
    public function getRow(): int;

    public function setRow(int $row);

    public function getColumn(): int;

    public function setColumn(int $row);

    public function getValue(): string;

    public function setValue(string $row);

    public function getPosition(): array;

    public function setPosition(int $row, int $column): void;
}
