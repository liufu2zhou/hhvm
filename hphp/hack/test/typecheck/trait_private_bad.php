<?hh
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */

trait MyTrait {
  private function foo(): int {
    return 4;
  }
}

class A {
  use MyTrait;
}

class B extends A {
  public function bar(): int {
    return $this->foo();
  }
}
