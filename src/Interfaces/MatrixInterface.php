<?php

namespace Vrkansagara\Matrix\Interfaces;

interface MatrixInterface
{
    public function getRow(): int;

    public function setRow(int $row);

    public function getColumn(): int;

    public function setColumn(int $row);

    public function getRules(): array;

    public function setRules(array $row): void;

    public function print(array $matrix): void;
}
