The solution is to always use strict comparison (`===`) instead of loose comparison (`==`) when comparing values in PHP.  Strict comparison requires that both the value and the type of the operands are identical. 

```php
$a = 0;
$b = "0.00";

if ($a === $b) {
  echo "Equal";
} else {
  echo "Not Equal";
}
```

This version will correctly output "Not Equal", because the type of `$a` (integer) is not the same as the type of `$b` (string).