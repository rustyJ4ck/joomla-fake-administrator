#!/usr/local/bin/php -n
<?php
/**
 * @project: ondtp
 * @author: Golovkin Vladimir <rustyj4ck@gmail.com>
 * @created: 11.11.2015 9:33
 */

$data = file_get_contents('log.txt');

preg_match_all('@^\d+\.\d+\.\d+\.\d+@m', $data, $matches);

$ips = (array_unique($matches[0]));

$ipfw = 'whois "%s"' . PHP_EOL;

foreach ($ips0 as $ip) {
    exec(sprintf($ipfw, $ip), $buffer);
    $buffer = join("\n", $buffer);
    //Abuse contact for '46.0.0.0 - 46.0.31.255' is 'abuse@domru.ru'
    preg_match('@Abuse contact for .* is \'(?P<abuse>.*)\'@U', $buffer, $matches);
    echo $ip, ' ', @$matches['abuse'], PHP_EOL;
}