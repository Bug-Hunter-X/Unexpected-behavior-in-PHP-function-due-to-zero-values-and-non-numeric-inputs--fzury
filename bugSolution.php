function foo(a, b) {
  //Check if the input is a number
  if (is_numeric($a) && is_numeric($b)) {
    if ($b === 0) {
      return INF; // Handle division by zero. Return INF (infinity) or throw an exception, depending on your needs
    } else {
      return $a / $b;
    }
  } else {
    return NAN; // Handle non-numeric inputs.
  }
}