# tdd-by-example-for-php

[![UnitTest](https://github.com/msfukui/tdd-by-example-for-php/actions/workflows/php.yml/badge.svg)](https://github.com/msfukui/tdd-by-example-for-php/actions/workflows/php.yml)

書籍「テスト駆動開発」を PHP で読み進めてみるレポジトリです。

Part 1 のテストは練習がてら PEST(https://pestphp.com/) で書いていきます。

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

### Pest

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

### PHP Coding Standards Fixer

```
$ bin/composer require --dev friendsofphp/php-cs-fixer
Info from https://repo.packagist.org: #StandWithUkraine
./composer.json has been updated
Running composer update friendsofphp/php-cs-fixer
Loading composer repositories with package information
Updating dependencies
Lock file operations: 24 installs, 0 updates, 0 removals
...
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 24 installs, 0 updates, 0 removals
...
2 package suggestions were added by new dependencies, use `composer suggest` to see details.
Generating autoload files
44 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
No security vulnerability advisories found.
Using version ^3.26 for friendsofphp/php-cs-fixer
$ vendor/bin/php-cs-fixer --version
PHP CS Fixer 3.26.1 Crank Cake by Fabien Potencier and Dariusz Ruminski.
PHP runtime: 8.2.10
```

### PHP Mess Detector

```
composer require --dev phpmd/phpmd
./composer.json has been updated
Running composer update phpmd/phpmd
Loading composer repositories with package information
Updating dependencies
Lock file operations: 5 installs, 0 updates, 0 removals
  - Locking pdepend/pdepend (2.16.2)
  - Locking phpmd/phpmd (2.15.0)
  - Locking symfony/config (v6.4.0)
  - Locking symfony/dependency-injection (v6.4.1)
  - Locking symfony/var-exporter (v7.0.1)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 5 installs, 0 updates, 0 removals
  - Downloading symfony/var-exporter (v7.0.1)
  - Downloading symfony/dependency-injection (v6.4.1)
  - Downloading symfony/config (v6.4.0)
  - Downloading pdepend/pdepend (2.16.2)
  - Downloading phpmd/phpmd (2.15.0)
  - Installing symfony/var-exporter (v7.0.1): Extracting archive
  - Installing symfony/dependency-injection (v6.4.1): Extracting archive
  - Installing symfony/config (v6.4.0): Extracting archive
  - Installing pdepend/pdepend (2.16.2): Extracting archive
  - Installing phpmd/phpmd (2.15.0): Extracting archive
Generating autoload files
57 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
No security vulnerability advisories found.
Using version ^2.15 for phpmd/phpmd
```

## 章立て

* Part 1 Moneyの例 (The Money Example)
    * [x] 第1章 複数通貨のMoney (Multi-Currency Money)
    * [x] 第2章 オブジェクトの退化 (Degencrate Objetcs)
    * [x] 第3章 すべてに対する等価性 (Equality for All)
    * [x] 第4章 プライベート化 (Privacy)
    * [x] 第5章 「フランク」に話す (Franc-ly Speaking)
    * [x] 第6章 再度、すべてに対する等価性 (Equality for All, Redux)
    * [x] 第7章 りんごとみかん (Apples and Orange)
    * [x] 第8章 オブジェクトの生成 (Makin'Objects)
    * [x] 第9章 生きている時（times） (Times We're Livin'In)
    * [x] 第10章 興味深い時（times） (Interesting Times)
    * [x] 第11章 諸悪の根源 (The Root of All Evil)
    * [x] 第12章 ついに、加法 (Addition, Finally)
    * [x] 第13章 動作 (Make It)
    * [x] 第14章 変化 (Change)
    * [x] 第15章 通貨の混合 (Mixed Currencies)
    * [x] 第16章 最後に抽象化 (Abstraction, Finally)
    * [x] 第17章 Moneyの例の回顧 (Money Retrospective)
* Part 2 xUnit の例 (The xUnit Example)
    * [x] 第18章 xUnitへの第1歩 (First Steps to xUnit)
    * [x] 第19章 テーブルの設定 (Set the Table)
    * [x] 第20章 完了後の掃除 (Cleaning Up After)
    * [x] 第21章 カウント (Counting)
    * [x] 第22章 失敗の扱い (Dealing with Failure)
    * [ ] 第23章 スイートにまとめる方法 (How Suite It Is)
    * [ ] 第24章 xUnitの回顧 (xUnit Retrospective)
* Part 3 テスト駆動開発のためのパターン (Patterns for Test-Driven Devekopment)
    * [ ] 第25章 テスト駆動開発のパターン (Test-Driven Development Patterns)
    * [ ] 第26章 レッドバーに関するパターン (Red Bar Patterns)
    * [ ] 第27章 テストに関するパターン (Testing Patterns)
    * [ ] 第28章 グリーンバーに関するパターン (Green Bar Patterns)
    * [ ] 第29章 xUnitに関するパターン (xUnit Patterns)
    * [ ] 第30章 デザインパターン (Design Patterns)
    * [ ] 第31章 リファクタリング (Refactaring)
    * [ ] 第32章 TDDの習得 (Mastering TDD)
* [ ] 付録 I 影響図 (Appendix I: Influence)
* [ ] 付録 II フィボナッチ (Appendix II: Fibonacci)
