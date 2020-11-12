<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class XenditController extends Controller
{
  function __construct()
  {
    $options['secret_api_key'] = env('XENDIT_API_KEY');
    $this->server_domain = env('XENDIT_SERVER_DOMAIN');
    $this->secret_api_key = $options['secret_api_key'];
  }

  public function getBalance()
  {

    $headers = [];
    $headers[] = 'Content-Type: application / json';
    $end_point = $this->server_domain . '/balance';

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key . ":" . '');
    curl_setopt($curl, CURLOPT_URL, $end_point);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);

    return response($response);
  }

  public function createPayout(Request $request)
  {

    $data = [
      'external_id' => $request->external_id,
      'amount' => $request->amount,
      'email' => $request->email
    ];

    $headers = [];
    $headers[] = 'Content-Type: application/json';
    $end_point = $this->server_domain . '/payouts';

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key . ":" . '');
    curl_setopt($curl, CURLOPT_URL, $end_point);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);

    curl_close($curl);


    return response($response);
  }

  public function getPayout($id)
  {

    $headers = [];
    $headers[] = 'Content-Type: application/json';
    $end_point = $this->server_domain . '/payouts/' . $id;

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key . ":" . '');
    curl_setopt($curl, CURLOPT_URL, $end_point);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);

    return response($response);
  }

  public function voidPayout(Request $request)
  {

    $headers = [];
    $headers[] = 'Content-Type: application/json';
    $end_point = $this->server_domain . '/payouts/' . $request->id . '/void';

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key . ":" . '');
    curl_setopt($curl, CURLOPT_URL, $end_point);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);

    curl_close($curl);

    return response($response);
  }

  public static function createInvoice(Request $request)
  {
    // check ticket type
    $amount = $request->ticket_amount === 12 ? 50000 : 10000;

    $data = [
      'external_id' => 'ap2li-ticket-' . time(),
      'payer_email' => $request->email,
      'description' => 'AP2LI TICKET PAYMENT',
      'amount' => $amount,
      'should_send_email' => true,
      'success_redirect_url' => "https://ap2li.herokuapp.com/",
      'failure_redirect_url' => "https://ap2li.herokuapp.com/"
    ];

    $response = Http::withBasicAuth($this->secret_api_key, '')->post($this->server_domain . '/v2/invoices', $data);

    return $response->json();
  }

  public static function getInvoice($id)
  {

    $response = Http::withBasicAuth($this->secret_api_key, '')->get($this->server_domain . '/v2/invoices/' . $id);

    return $response->json();
  }

  public function voidInvoice(Request $request)
  {

    $headers = [];
    $headers[] = 'Content-Type: application/json';
    $end_point = $this->server_domain . '/invoices/' . $request->id . '/expire!';

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key . ":" . '');
    curl_setopt($curl, CURLOPT_URL, $end_point);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);

    curl_close($curl);

    return response($response);
  }
}
