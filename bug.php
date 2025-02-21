function foo(a, b) {
  if (a === 0 || b === 0) {
    return 0; //This will cause unexpected behavior if either a or b is not a number, it will return 0 even if it is not.
  }
  return a / b; //This will cause an error if b is 0, and unexpected behavior if a or b is not a number.
}