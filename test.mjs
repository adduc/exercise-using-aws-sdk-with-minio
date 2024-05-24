#!/usr/bin/env node

import AWS from 'aws-sdk';

let s3 = new AWS.S3({
    endpoint: "http://minio:9000",
    s3ForcePathStyle: true,
    signatureVersion: 'v4',
});

await s3.putObject({
    Bucket: "test-bucket",
    Key: "example-key",
    Body: "Hello World!",
    ACL: 'private'
}).promise();