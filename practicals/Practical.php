<?php
class Practical {
    /**
     * Static function to print "Hello, World!"
     */
    public static function printHello() {
        echo "Hello, World!";
    }

    /**
     * Static function to add two numbers and return the result
     * 
     * @param int $a The first number
     * @param int $b The second number
     * @return int The sum of the two numbers
     */
    public static function add($a, $b) {
        return $a + $b;
    }

    /**
     * Static function to generate a Fibonacci sequence with the specified number of terms.
     * 
     * @param int $terms The number of terms to generate
     * @return array An array containing the Fibonacci sequence
     */
    public static function generateFibonacciSequence($terms) {
        $fibonacciSequence = [0, 1];

        for ($i = 2; $i < $terms; $i++) {
            $nextTerm = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
            $fibonacciSequence[] = $nextTerm;
        }

        return $fibonacciSequence;
    }
}

// Usage examples:
Practical::printHello();
echo "\n";
$result = Practical::add(5, 3);
echo "5 + 3 = $result\n";
$fibonacci = Practical::generateFibonacciSequence(10);
echo "Fibonacci Sequence: " . implode(", ", $fibonacci);
?>

