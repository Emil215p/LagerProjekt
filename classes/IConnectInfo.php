<?php

/**
 * Description of IConnectInfo
 *
 * @author zzm
 */
interface IConnectInfo {

    const CONN_HOST = ''; //put hostname
    const CONN_USER = ''; //put username
    const CONN_PASS = ''; //put password (if you have one)
    const CONN_DB = ''; //put database name
    const CONN_PORT = ; //put port number
    const MYSQL_CHARSET = 'utf8'; //database charset, utf8 is usually fine.

    public static function doConnect();
}
