<?php
// Copyright 2004-present Facebook. All Rights Reserved.

class FBMock_MockCreatorTest extends FBMock_BaseTestCase {
  /**
   * @expectedException FBMock_MockObjectException
   * @expectedExceptionMessage mockSomething
   */
  public function testDisallowMethodStartingWithMock() {
    FBMock_MockCreator::createMock('FBMock_TestClassWithInvalidMethod');
  }
}

class FBMock_TestClassWithInvalidMethod {
  public function mockSomething() {}
}
