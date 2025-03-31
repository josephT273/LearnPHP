<?php

use Core\Container;

test('it can resolve somthing out of the container', function(){
    // arrange
    $container = new Container();

    $container->bind('foo', fn() => 'foo');
    // act
    $result = $container->resolve('foo');

    // assert/expectation
    expect($result)->toEqual('foo');
});