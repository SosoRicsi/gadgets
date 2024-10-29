<?php declare(strict_types=1);

namespace ApiPHP\Gadgets;

use InvalidArgumentException;

class Integer
{

	public static function add(array $numbers): int|float
	{
		$num = array_shift($numbers) ?? 0;

		foreach ($numbers as $number) {
			if (!is_numeric($number)) {
				throw new InvalidArgumentException("All elements in the array must be a number!");
			}

			$num += $number;
		}

		return $num;
	}

	public static function subtract(array $numbers): int|float
	{
		$num = array_shift($numbers) ?? 0;

		foreach ($numbers as $number) {
			if (!is_numeric($number)) {
				throw new InvalidArgumentException("All elements in the array must be a number!");
			}

			$num -= $number;
		}

		return $num;
	}

	public static function multiply(array $numbers): int|float
	{
		$num = array_shift($numbers) ?? 0;

		foreach ($numbers as $number) {
			if (!is_numeric($number)) {
				throw new InvalidArgumentException("All elements in the array must be a number!");
			}

			$num *= $number;
		}

		return $num;
	}

	public static function divide(array $numbers): int|float
	{
		$num = array_shift($numbers) ?? 0;

		foreach ($numbers as $number) {
			if (!is_numeric($number)) {
				throw new InvalidArgumentException("All elements in the array must be a number!");
			}

			if ($number === 0) {
				throw new InvalidArgumentException("Cannot divide by zero!");
			}

			$num /= $number;
		}

		return $num;
	}

	public static function modulus(int|float $number, int|float $divisor): int|float
	{
		if ($divisor === 0) {
			throw new InvalidArgumentException("Cannot divide by zero!");
		}

		return $number % $divisor;
	}

	public static function avarage(array $numbers): int|float
	{
		return count($numbers) > 0 ? self::add($numbers) / count($numbers) : 0;
	}

	public static function power(int|float $base, int|float $exponent): int|float
	{
		return pow($base, $exponent);
	}

	public static function round(int|float $number, int $precission = 0): float
	{
		return round($number, $precission);
	}

	public static function ceil(int|float $number): float
	{
		return ceil($number);
	}

	public static function floor(int|float $number): float
	{
		return floor($number);
	}

	public static function range(int $start, int $end, int $step = 1): array
	{
		if ($step === 0) {
			throw new InvalidArgumentException("The step cant be zero!");
		}

		return range($start, $end, $step);
	}

	public static function func(callable $callback, ...$params): mixed
	{
		$return = $callback(...$params);

		return $return;
	}

	public static function toString(int|float $number): string
	{
		return strval($number);
	}

	public static function toArray(int|float $number): array
	{
		return [$number];
	}

	public static function toInt(int|float $number): int
	{
		return intval($number);
	}

	public static function toFloat(int|float $number): float
	{
		return floatval($number);
	}

	public static function isEven(int $number): bool
	{
		return $number % 2 === 0;
	}

	public static function isOdd(int $number): bool
	{
		return $number % 2 !== 0;
	}

	public static function isPrime(int $number): bool
	{
		if ($number <= 1) {
			return false;
		}

		for ($i = 2; $i <= sqrt($number); $i++) {
			if ($number % $i === 0) {
				return false;
			}
		}

		return true;
	}

}