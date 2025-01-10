function foo(array $arr) {
  $newArray = [];
  foreach ($arr as $value) {
    $newArray[] = $value * 2;
  }
  return $newArray;
} 