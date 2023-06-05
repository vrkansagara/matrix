<?php

namespace Vrkansagara\Matrix;

class MatrixElement implements Interfaces\MatrixElement
{
    public function __construct(
        protected int $row = 0,
        protected int $column = 0,
        protected string $value = '',
        protected array|int $position = [0, 0]
    ) {
    }

    /**
     * @return int
     */
    public function getRow(): int
    {
        return $this->row;
    }

    /**
     * @param int $row
     */
    public function setRow(int $row): void
    {
        $this->row = $row;
    }

    /**
     * @return int
     */
    public function getColumn(): int
    {
        return $this->column;
    }

    /**
     * @param int $column
     */
    public function setColumn(int $column): void
    {
        $this->column = $column;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * @return array|int|int[]
     */
    public function getPosition(): array
    {
        return $this->position;
    }

    /**
     * @param array[] $position
     */
    public function setPosition(int $row, int $column): void
    {
        $this->setRow($row);
        $this->setColumn($column);
        $this->position = [$row, $column];
    }
}
