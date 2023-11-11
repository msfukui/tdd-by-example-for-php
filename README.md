# tdd-by-emample-for-php

書籍「テスト駆動開発」を PHP で読み進めてみるレポジトリです。

テストは練習がてら PEST(https://pestphp.com/) で書いていきます。

## 環境構築

### ディレクトリ構成

`pds/skeleton` に合わせます。

https://github.com/php-pds/skeleton

### PHP

```
$ sudo port install php82 php82-mbstring php82-xdebug php82-openssl php82-iconv
...
$ sudo port select --set php php82
Selecting 'php82' for 'php' succeeded. 'php82' is now active.
```

### Composer

```
$ curl https://getcomposer.org/installer -o composer-setup.php
  % Total    % Received % Xferd  Average Speed   Time    Time     Time  Current
                                 Dload  Upload   Total   Spent    Left  Speed
100 58167  100 58167    0     0  39798      0  0:00:01  0:00:01 --:--:-- 40032
$ php composer-setup.php --install-dir=bin --filename=composer
All settings correct for using Composer
Downloading...

Composer (version 2.6.3) successfully installed to: /Users/msfukui/studies/learn-modern-php/bin/composer
Use it: php bin/composer
$ bin/composer --version
Composer version 2.6.3 2023-09-15 09:38:21
$ rm composer-setup.php
```

### PEST

```
$ bin/composer require pestphp/pest --dev --with-all-dependencies
..
$ ./vendor/bin/pest --init
..
$ ./vendor/bin/pest
```
