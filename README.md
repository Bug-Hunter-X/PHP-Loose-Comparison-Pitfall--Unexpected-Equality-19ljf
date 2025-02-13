# PHP Loose Comparison Bug

This repository demonstrates a common pitfall in PHP programming related to loose comparisons.  The code showcases how PHP's automatic type juggling can lead to unexpected results when comparing numeric strings and integers using the `==` operator.

## Bug Description
The core issue lies in the loose comparison (`==`) between an integer (0) and a string representation of a floating-point number ("0.00"). PHP's type juggling converts the string to a number before comparison, leading to an incorrect `Equal` result.

## How to reproduce
Clone the repository, run `bug.php`.  The output should be "Equal", demonstrating the unexpected behavior.

## Solution
The solution uses strict comparison (`===`) which does not perform type juggling. This ensures a true comparison based on both the value and type.