<?php
// Debug script to check base_url detection
echo "=== Environment Variables ===\n";
echo "APP_BASE_URL: " . var_export(getenv('APP_BASE_URL'), true) . "\n";
echo "FORCE_HTTPS: " . var_export(getenv('FORCE_HTTPS'), true) . "\n";
echo "\n=== Server Variables ===\n";
echo "HTTP_HOST: " . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'not set') . "\n";
echo "HTTP_X_FORWARDED_PROTO: " . (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) ? $_SERVER['HTTP_X_FORWARDED_PROTO'] : 'not set') . "\n";
echo "HTTP_X_FORWARDED_PORT: " . (isset($_SERVER['HTTP_X_FORWARDED_PORT']) ? $_SERVER['HTTP_X_FORWARDED_PORT'] : 'not set') . "\n";
echo "HTTP_X_FORWARDED_HOST: " . (isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : 'not set') . "\n";
echo "HTTPS: " . (isset($_SERVER['HTTPS']) ? $_SERVER['HTTPS'] : 'not set') . "\n";
echo "SERVER_PORT: " . (isset($_SERVER['SERVER_PORT']) ? $_SERVER['SERVER_PORT'] : 'not set') . "\n";

echo "\n=== Loading Config ===\n";
define('BASEPATH', true);
include 'application/config/config.php';
echo "base_url: " . $config['base_url'] . "\n";
