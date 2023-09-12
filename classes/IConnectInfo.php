<?php

/**
 * Description of IConnectInfo
 *
 * @author zzm
 */
interface IConnectInfo {

    const CONN_HOST = 'localhost'; //
    const CONN_USER = 'emko01_skp-dp_sde_dk';
    const CONN_PASS = 'pqk5235q'; // ny FTP user: skp-admin pass: pqk5235q
    const CONN_DB = 'emko01_skp_dp_sde_dk';
    const CONN_PORT = 2222;
    const MYSQL_CHARSET = 'utf8';

    public static function doConnect();
}

// Administration af din database, finder du påadressen: skp-dp.sde.dk/phpmyadmin