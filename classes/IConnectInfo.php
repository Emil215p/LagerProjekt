<?php
    /**
     * Description of IConnectInfo
     *
     * @author zzm
     */
    interface IConnectInfo
    {
        const CONN_HOST = 'localhost'; // webmin: https://10.136.128.101:10000/
        const CONN_USER = 'aemk01_skp-dp_sd';
        const CONN_PASS = 'q452zp4z'; // ny FTP user: skp-admin pass: hrzcoo3jhea7
        const CONN_DB = 'aemk01_skp_dp_sde_dk';
        const CONN_PORT = 3306;
        const MYSQL_CHARSET = 'utf8';
        public static function doConnect();
    }
    // Administration af din database, finder du påadressen: skp-dp.sde.dk/phpmyadmin