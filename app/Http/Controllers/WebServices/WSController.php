<?php

namespace App\Http\Controllers\WebServices;
use App\Http\Controllers\Controller;
use SOAPClient;

class WSController extends Controller
{
    public function ws_SIAE($nombre, $num_cta, $key, $args = [])
    {
      error_reporting(E_ALL);
      ini_set("display_errors", 1);
      ini_set('soap.wsdl_cache_enabled', '0');
      ini_set('soap.wsdl_cache_ttl', '0');
      ini_set("default_socket_timeout", 50);
      $key = iconv("UTF-8//TRANSLIT", "WINDOWS-1252", $key);

      $key = SHA1($key);

      $parametros = array(
         'key' => (string)$key,
         'cta' => (string)$num_cta
      );
      $parametros = array_merge($parametros, $args);
      try {
        if ($nombre == 'trayectoria')
          $wsdl = 'https://www.dgae-siae.unam.mx/ws/soap/ssre_try_srv.php?wsdl';
        elseif ($nombre == 'identidad') {
          $wsdl = 'https://www.dgae-siae.unam.mx/ws/soap/dgae_idn_srv.php?wsdl';
        } elseif ($nombre == 'avance') {
          $wsdl = 'https://www.dgae-siae.unam.mx/ws/soap/ssre_avan_srv.php?wsdl';
        }
        if (env('APP_ENV') != 'local') {
          $opts = array(
            'connection_timeout' => 10, // tiempo de espera
            'encoding' => 'ISO-8859-1',
            'trace' => true,
            'exceptions' => true
          );
        } else {
          $opts = array(
            'proxy_host' => "132.248.205.1",
            'proxy_port' => 8080,
            'connection_timeout' => 10, // tiempo de espera
            'encoding' => 'ISO-8859-1',
            'trace' => true,
            'exceptions' => true
          );
        }
        $client = new SOAPClient($wsdl, $opts);
        if ($nombre == 'trayectoria') {
          try {
            $response = $client->return_trayectoria($parametros);
          } catch (\Exception $e) {
            $exception = $e->getMessage();
            Log::info("Solicitar datos de SIAE-Trayectorias, tuvo un error $exception");
          }
        } elseif ($nombre ==  'identidad') {
          try {
            $response = $client->return_identidad($parametros);
          } catch (\Exception $e) {
            $exception = $e->getMessage();
            Log::info("Solicitar datos de SIAE-Identidad, tuvo un error $exception");
            return array('message' => $e->getMessage(), 'code' => 500);
          }
        } elseif ($nombre ==  'avance') {
          try {
            $response = $client->return_avance($parametros);
          } catch (\Exception $e) {
            $exception = $e->getMessage();
            Log::info("Solicitar datos de SIAE-Avance, tuvo un error $exception");
            return array('message' => $e->getMessage(), 'code' => 500);
          }
        }
      } catch (\SoapFault $exception) {
        return array('message' => $exception->getMessage(), 'faultcode' => $exception->faultcode, 'code' => 500);
      }
      if (empty($response->cuenta)) {
        if (isset($response->cuenta)) {
          if (isset($response->mensaje)) {
            return $response->mensaje;
          } else {
            $msg = "No se obtuvo respuesta del WS de SIAE";
            return $msg;
          }
        }
      }
      return $response;
    }

}

