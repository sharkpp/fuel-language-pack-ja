FuelPHP 日本語パッケージ
===================================

これはなに？
------------

このパッケージはFuelPHPに含まれる英語のメッセージの日本語訳を提供します。

このパッケージをインストールするとValidationクラスで検証に失敗した場合などで
表示されるメッセージが日本語になります。

要件
----

* FuelPHP 1.5

インストール
------------

1. ``` PKGPATH ``` に展開([Packages - General - FuelPHP Documentation](http://fuelphp.com/docs/general/packages.html)を参照)
2. ``` APPPATH/config/config.php ``` の ``` 'always_load' => array('packages' => array()) ``` にパッケージを追加
3. ``` APPPATH/config/config.php ``` の言語を日本語に変更。
   ``` 'language' ``` に ``` 'ja' ``` を指定し、``` 'locale' ``` に ``` 'ja_JP.UTF-8' ``` を指定。

使い方
------

インストール後はValidationクラスなどで表示されるメッセージが日本語で表示されます。

    $val = \Validation::forge();
    $val -> add('test', 'Test field')
         -> add_rule('required');
    if (!$val->run(array('test' => ''))) {
        Sesstion::set_flush('error', implode('', $val->error()));
        // ↑ "Test field は入力が必須です。" が設定される
    }

ライセンス
----------

Copyright(c) 2013 sharkpp All rights reserved.
このパッケージは、The MIT License の元で公開されています。
