<?php
/*
 * @Author: Ferdhika Yudira 
 * @Website: http://dika.web.id 
 * @Date:   2018-09-28 09:10:05 
 * @Email: fer@dika.web.id 
 */
namespace App\Helpers;

use App\Visitor;

class HelperVisitor{
    public static function get_visitor($req)
    {
      // if ($req == 'all') {
        // $data = Visitor::groupBy('ip_pengunjung')->distinct()->count();
        // $data = Visitor::count();
        // $par = $data/1000;
        // if ($par > 1) {
        //   $data = number_format($par,2).'K';
        // }
        // return $data;
      // }
      // if all
      // $data = Visitor::where('hari_kunjungan',date("Y-m-d"))->sum('jumlah_kunjungan');
      // return $data;

      // if all
      if ($req == 'all') {
        // $data = Visitor::groupBy('ip_pengunjung')->distinct()->count();
        $data = Visitor::count();
        $par = $data/1000;
        if ($par > 1) {
          $data = number_format($par,2).'K';
        }
        return $data;
      }
      $data = Visitor::where('hari_kunjungan',date("Y-m-d"))->count();
      return $data;

    }
    public static function visitor()
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
          var_dump("test2");
      }
      
      else{
        $input['ip_pengunjung'] = $ip;
        $input['jumlah_kunjungan'] = 1;
        $input['hari_kunjungan'] = date("Y-m-d");
        Visitor::create($input);
        // echo 'Selamat Datang , ini adalah Kunjungan pertama anda hari ini';
        var_dump("test");
      }
    }
}