#!/usr/bin/env php
<?php

declare(strict_types=1);

use Aws\S3\S3Client;

require __DIR__ . '/vendor/autoload.php';

$s3 = new S3Client([
    'endpoint' => 'http://minio:9000',
    'use_path_style_endpoint' => true,
    'signature_version' => 'v4'
]);

$s3->putObject([
    'Bucket' => "test-bucket",
    'Key' => "example-key",
    'Body' => 'Hello, world!',
    'ACL' => 'private',
]);
