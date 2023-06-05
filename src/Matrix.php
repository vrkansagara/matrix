<?php

declare(strict_types=1);

namespace Vrkansagara\Matrix;

use Vrkansagara\Matrix\Interfaces\MatrixInterface;

class Matrix implements MatrixInterface
{
    public static string $version = '0.0.1';

    public function __construct(
        protected int         $row = 3,
        protected int         $column = 3,
        protected MatrixRules $rules,
    )
    {
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
     * @return array
     */
    public function getRules(): array
    {
        return $this->rules;
    }

    /**
     * @param array $rules
     */
    public function setRules(array $rules): void
    {
        $this->rules = $rules;
    }

    public function print(array $matrixArray = []): void
    {
        for ($rowIndex = 0; $rowIndex < $this->getRow(); $rowIndex++) {
            for ($columnIndex = 0; $columnIndex < $this->getColumn(); $columnIndex++) {
                if (!isset($matrixArray[$rowIndex][$columnIndex])) {
                    $matrixArray[$rowIndex][$columnIndex] = "";
                }
                echo sprintf("\t %s \t", $matrixArray[$rowIndex][$columnIndex]);
            }
            echo PHP_EOL;
        }
    }

}
