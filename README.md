## Information

### Install

1. composer install
2. Set config you DB in common/config/main-local
```
'dsn' => 'mysql:host=localhost;dbname='Name DB',
            'username' => 'root',
            'password' => '',
```
3. php init (initialisation of config)
4. ./yii migrat/up (created needed table 'number')

#### use api method
http://"you site name"/generate - generate rundom number from 0 to 1000000 without simple numbers

http://"you site name"/retrieve/<number> - method for checking exist number in BD .If number has existed will return true