# joomla-fake-administrator
Joomla fake administrator for logging admin password bruteforce

demo: http://4zu.ru/administrator/

allow ban bad ips with firewall (ipfw)

```
#php parse.ips.php
/sbin/ipfw table 66 add 188.227.19.80   # 19      
/sbin/ipfw table 66 add 146.185.239.200 # 256     
/sbin/ipfw table 66 add 37.48.65.172    # 37      
/sbin/ipfw table 66 add 37.48.65.171    # 3       
/sbin/ipfw table 66 add 78.85.19.101    # 301     
/sbin/ipfw table 66 add 185.86.76.194   # 1       
/sbin/ipfw table 66 add 5.164.155.212   # 88      
/sbin/ipfw table 66 add 108.61.179.192  # 6       
/sbin/ipfw table 66 add 188.227.72.122  # 1       
/sbin/ipfw table 66 add 95.143.193.40   # 474     
/sbin/ipfw table 66 add 46.0.12.2       # 309     
```

[Описание на русском](http://www.skillz.ru/dev/php/article-joomla-fake-administrator-bruteforce.html)
