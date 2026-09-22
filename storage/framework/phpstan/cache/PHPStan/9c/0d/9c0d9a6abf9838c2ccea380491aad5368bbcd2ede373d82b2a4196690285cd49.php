<?php declare(strict_types = 1);

// phpinternal-PHPStan\BetterReflection\Reflection\ReflectionConstant-STREAM_SERVER_LISTEN
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-dev-master@709e512-8.4.24',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\InternalLocatedSource',
      'data' => 
      array (
        'name' => 'STREAM_SERVER_LISTEN',
        'filename' => 'phpstorm-stubs:standard/standard_defines.stub',
        'extensionName' => 'standard',
        'aliasName' => NULL,
      ),
    ),
    'name' => 'STREAM_SERVER_LISTEN',
    'shortName' => 'STREAM_SERVER_LISTEN',
    'value' => 
    array (
      'code' => '8',
      'attributes' => 
      array (
        'startLine' => 11,
        'endLine' => 11,
        'startTokenPos' => 9,
        'startFilePos' => 431,
        'endTokenPos' => 9,
        'endFilePos' => 431,
      ),
    ),
    'docComment' => '/**
 * Tells a stream created with stream_socket_server
 * and bound using the STREAM_SERVER_BIND flag to start
 * listening on the socket. Connection-orientated transports (such as TCP)
 * must use this flag, otherwise the server socket will not be enabled.
 * Using this flag for connect-less transports (such as UDP) is an error.
 * @link https://php.net/manual/en/stream.constants.php
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 11,
    'endLine' => 11,
    'startColumn' => 1,
    'endColumn' => 33,
    'namespace' => NULL,
  ),
));