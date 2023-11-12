# tdd-by-emample-for-php

書籍「テスト駆動開発」を PHP で読み進めてみるレポジトリです。

テストは練習がてら PEST(https://pestphp.com/) で書いていきます。

## 環境構築

### ディレクトリ構成

`pds/skeleton` に合わせます。

https://github.com/php-pds/skeleton

Pest は init で作られた構成を見ると tests 配下に Unit, Feature を作成してその下に各テストファイルを配置する様なので、その方式に従います。

今回はユニットテストを書いていくので Unit 配下にファイルを配置していきます。

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
$ mkdir -p bin; php composer-setup.php --install-dir=bin --filename=composer
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
pestphp/pest-plugin contains a Composer plugin which is currently not in your allow-plugins config. See https://getcomposer.org/allow-plugins
Do you trust "pestphp/pest-plugin" to execute code and wish to enable it now? (writes "allow-plugins" to composer.json) [y,n,d,?] y
..
$ ./vendor/bin/pest --version

  Pest Testing Framework 2.24.3.  

$ ./vendor/bin/pest --init

   INFO  Preparing tests directory.

  phpunit.xml ....................................................................................................... File created.  
  tests/Pest.php .................................................................................................... File created.  
  tests/TestCase.php ................................................................................................ File created.  
  tests/Unit/ExampleTest.php ........................................................................................ File created.  
  tests/Feature/ExampleTest.php ..................................................................................... File created.  

  Wanna show Pest some love by starring it on GitHub? (yes/no) [no]:
 > 

  Star ............................................................................................ https://github.com/pestphp/pest  
  News ................................................................................................ https://twitter.com/pestphp  
  Videos .......................................................................................... https://youtube.com/@nunomaduro  
  Sponsor .................................................................................. https://github.com/sponsors/nunomaduro  

$ ./vendor/bin/pest

   PASS  Tests\Feature\ExampleTest
  ✓ example

   PASS  Tests\Unit\ExampleTest
  ✓ example 0.01s  

  Tests:    2 passed (2 assertions)
  Duration: 0.07s
```

あとはやっていくだけ！
