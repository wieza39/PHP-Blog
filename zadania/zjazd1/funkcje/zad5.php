<?php
function calculateArea() {
    echo "1. Triangle\n";
    echo "2. Rectangle\n";
    echo "3. Trapezoid\n";
    $figure_choice = readline("Choose a figure (enter a number): ");

    switch ($figure_choice) {
        case 1:
            TriangleArea();
            break;
        case 2:
            RectangleArea();
            break;
        case 3:
            TrapezoidArea();
            break;
        default:
            echo "Invalid choice\n";
    }
}

function TriangleArea() {
    $base = readline("Enter the base of the triangle: ");
    $height = readline("Enter the height of the triangle: ");
    $area = 0.5 * $base * $height;
    echo "The area of the triangle is: " . $area . "\n";
}

function RectangleArea() {
    $length = readline("Enter the length of the rectangle: ");
    $width = readline("Enter the width of the rectangle: ");
    $area = $length * $width;
    echo "The area of the rectangle is: " . $area . "\n";
}

function TrapezoidArea() {
    $base1 = readline("Enter the length of the first base of the trapezoid: ");
    $base2 = readline("Enter the length of the second base of the trapezoid: ");
    $height = readline("Enter the height of the trapezoid: ");
    $area = 0.5 * ($base1 + $base2) * $height;
    echo "The area of the trapezoid is: " . $area . "\n";
}

calculateArea();

?>