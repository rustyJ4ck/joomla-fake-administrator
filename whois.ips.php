#!/usr/local/bin/php -n
<?php
/**
 * @author: Golovkin Vladimir <rustyj4ck@gmail.com>
 */

$myIps = ['178.215.110.80', '195.208.58.114'];

$data = file_get_contents('log.txt');

preg_match_all('@^\d+\.\d+\.\d+\.\d+@m', $data, $matches);

$ips = (array_unique($matches[0]));

$ips0 = array_diff($ips, $myIps);

$ipfw = 'whois "%s"' . PHP_EOL;

foreach ($ips0 as $ip) {
    echo $ip, PHP_EOL;
    system(sprintf($ipfw, $ip));
}