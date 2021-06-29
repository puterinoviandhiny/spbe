<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Request;

function set_active($route, $output = 'active')
{
    if (is_array($route)) {
        return in_array(Request::path(), $route) ? $output : '';
    }
    return Request::path() == $route ? $output : '';
}

function confLocale() {
    setlocale(LC_TIME, 'id_ID');
    Carbon::setLocale('id');
}
function visitor()
    {
      // cek ip
      $client  = @$_SERVER['HTTP_CLIENT_IP'];
      $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
      $remote  = $_SERVER['REMOTE_ADDR'];

      if(filter_var($client, FILTER_VALIDATE_IP))
      {
          $ip = $client;
      }
      elseif(filter_var($forward, FILTER_VALIDATE_IP))
      {
          $ip = $forward;
      }
      else
      {
          $ip = $remote;
      }
      $ip;

      // // proses
      $data_lama = Visitor::where('ip_pengunjung',$ip)->where('hari_kunjungan',date("Y-m-d"))->first();
      // cek waktu sekarang
      $current = strtotime(date("Y-m-d"));
      if ($data_lama) {
        // cek waktu
          $input['ip_pengunjung'] = $ip;
          $input['jumlah_kunjungan'] = $data_lama->jumlah_kunjungan + 1;
          $data_baru =Visitor::where('ip_pengunjung',$ip)->where('hari_kunjungan',date("Y-m-d"))->update($input);
          // echo 'Selamat Datang Kembali, Hari ini anda telah berkunjung sebanyak '.$input['jumlah_kunjungan'].' Kali';
      }

      else{
        $input['ip_pengunjung'] = $ip;
        $input['jumlah_kunjungan'] = 1;
        $input['hari_kunjungan'] = date("Y-m-d");
        Visitor::create($input);
        // echo 'Selamat Datang , ini adalah Kunjungan pertama anda hari ini';
        var_dump('test');
      }
    }
