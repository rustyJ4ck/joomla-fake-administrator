#!/usr/bin/env php
<?php
/**
 * @project: ondtp
 * @author: Golovkin Vladimir <rustyj4ck@gmail.com>
 * @created: 11.11.2015 9:33
 */

$myIps = ['78.25.110.80'];

$data = file_get_contents('log.txt');

preg_match_all('@^\d+\.\d+\.\d+\.\d+@m', $data, $matches);

$ips = array_count_values($matches[0]);

$ips0 = array_diff_key($ips, array_flip($myIps));

$ipfw = '/sbin/ipfw table 66 add %-15s # %d' . PHP_EOL;

foreach ($ips0 as $ip => $count) {
    printf($ipfw, $ip, $count);
}