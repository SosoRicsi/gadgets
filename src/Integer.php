<?php declare(strict_types=1);

namespace ApiPHP\Gadgets;

use InvalidArgumentException;

/**
 * Class Integer
 *
 * This class provides various mathematical operations and utilities for integer and floating-point numbers.
 */
class Integer
{

	/**
	 * Sums an array of numbers.
	 *
	 * @param array $numbers An array of integers or floats.
	 * @return int|float The sum of all numbers in the array.
	 * @throws InvalidArgumentException if any element in the array is not a number.
	 */
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

	/**
	 * Subtracts each number in the array from the initial value.
	 *
	 * @param array $numbers An array of integers or floats.
	 * @return int|float The result after subtraction.
	 * @throws InvalidArgumentException if any element in the array is not a number.
	 */
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

	/**
	 * Multiplies each number in the array.
	 *
	 * @param array $numbers An array of integers or floats.
	 * @return int|float The product of all numbers in the array.
	 * @throws InvalidArgumentException if any element in the array is not a number.
	 */
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

	/**
	 * Divides the initial value by each subsequent number in the array.
	 *
	 * @param array $numbers An array of integers or floats.
	 * @return int|float The result after division.
	 * @throws InvalidArgumentException if any element in the array is not a number or if division by zero occurs.
	 */
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

	/**
	 * Calculates the modulus of a number and a divisor.
	 *
	 * @param int|float $number The number to be divided.
	 * @param int|float $divisor The divisor.
	 * @return int|float The remainder.
	 * @throws InvalidArgumentException if the divisor is zero.
	 */
	public static function modulus(int|float $number, int|float $divisor): int|float
	{
		if ($divisor === 0) {
			throw new InvalidArgumentException("Cannot divide by zero!");
		}

		return $number % $divisor;
	}

	/**
	 * Calculates the average of numbers in an array.
	 *
	 * @param array $numbers An array of integers or floats.
	 * @return int|float The average of the numbers.
	 */
	public static function avarage(array $numbers): int|float
	{
		return count($numbers) > 0 ? self::add($numbers) / count($numbers) : 0;
	}

	/**
	 * Calculates the power of a base number to a given exponent.
	 *
	 * @param int|float $base The base number.
	 * @param int|float $exponent The exponent.
	 * @return int|float The result of the exponentiation.
	 */
	public static function power(int|float $base, int|float $exponent): int|float
	{
		return pow($base, $exponent);
	}

	/**
	 * Rounds a number to a specified precision.
	 *
	 * @param int|float $number The number to round.
	 * @param int $precision The number of decimal digits to round to.
	 * @return float The rounded number.
	 */
	public static function round(int|float $number, int $precision = 0): float
	{
		return round($number, $precision);
	}

	/**
	 * Rounds a number up to the nearest integer.
	 *
	 * @param int|float $number The number to round.
	 * @return float The rounded number.
	 */
	public static function ceil(int|float $number): float
	{
		return ceil($number);
	}

	/**
	 * Rounds a number down to the nearest integer.
	 *
	 * @param int|float $number The number to round.
	 * @return float The rounded number.
	 */
	public static function floor(int|float $number): float
	{
		return floor($number);
	}

	/**
	 * Creates an array of numbers within a specified range.
	 *
	 * @param int $start The starting value.
	 * @param int $end The ending value.
	 * @param int $step The step interval between each number.
	 * @return array The array of numbers.
	 * @throws InvalidArgumentException if step is zero.
	 */
	public static function range(int $start, int $end, int $step = 1): array
	{
		if ($step === 0) {
			throw new InvalidArgumentException("The step can't be zero!");
		}

		return range($start, $end, $step);
	}

	/**
	 * Executes a callback function with the given parameters.
	 *
	 * @param callable $callback The callback function.
	 * @param mixed ...$params The parameters for the callback.
	 * @return mixed The return value of the callback.
	 */
	public static function func(callable $callback, ...$params): mixed
	{
		return $callback(...$params);
	}

	/**
	 * Converts a number to a string.
	 *
	 * @param int|float $number The number to convert.
	 * @return string The string representation of the number.
	 */
	public static function toString(int|float $number): string
	{
		return strval($number);
	}

	/**
	 * Converts a number to an array containing the number.
	 *
	 * @param int|float $number The number to convert.
	 * @return array An array with the number as its sole element.
	 */
	public static function toArray(int|float $number): array
	{
		return [$number];
	}

	/**
	 * Converts a number to an integer.
	 *
	 * @param int|float $number The number to convert.
	 * @return int The integer representation of the number.
	 */
	public static function toInt(int|float $number): int
	{
		return intval($number);
	}

	/**
	 * Converts a number to a float.
	 *
	 * @param int|float $number The number to convert.
	 * @return float The float representation of the number.
	 */
	public static function toFloat(int|float $number): float
	{
		return floatval($number);
	}

	/**
	 * Checks if a number is even.
	 *
	 * @param int $number The number to check.
	 * @return bool True if the number is even, otherwise false.
	 */
	public static function isEven(int $number): bool
	{
		return $number % 2 === 0;
	}

	/**
	 * Checks if a number is odd.
	 *
	 * @param int $number The number to check.
	 * @return bool True if the number is odd, otherwise false.
	 */
	public static function isOdd(int $number): bool
	{
		return $number % 2 !== 0;
	}

	/**
	 * Checks if a number is a prime number.
	 *
	 * @param int $number The number to check.
	 * @return bool True if the number is prime, otherwise false.
	 */
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