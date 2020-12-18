<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\App;


class XenditController extends Controller
{
  function __construct()
  {
    // $environment = App::environment();
    $this->secret_api_key = config('xendit.secret_key');
    $this->server_domain = config('xendit.server_domain');
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

  public  function createInvoice(Request $request)
  {

    $data = [
      'external_id' => 'xendit-test-' . time(),
      'payer_email' => $request->email,
      'description' => 'XENDIT LIVE TEST',
      'amount' => $request->amount,
      'should_send_email' => true,
      'success_redirect_url' => "https://www.vconex.id/",
      'failure_redirect_url' => "https://www.vconex.id/"
    ];

    $response = Http::withBasicAuth($this->secret_api_key, '')->post($this->server_domain . '/v2/invoices', $data);

    return $response->json();
  }

  public  function getInvoice($id)
  {

    $response = Http::withBasicAuth($this->secret_api_key, '')->get($this->server_domain . '/v2/invoices/' . $id);

    return $response->json();
  }
  
  public  function getAllInvoice()
  {

    $response = Http::withBasicAuth($this->secret_api_key, '')->get($this->server_domain . '/v2/invoices');

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
  
  //virtual account
  public  function getAllBanks()
  {

    $response = Http::withBasicAuth($this->secret_api_key, '')->get($this->server_domain . '/available_virtual_account_banks');

    return $response->json();
  }
  
  public  function createVirtualAccount(Request $request)
  {
    // dd($request->all());
    $data = [
      'external_id' => 'xendit-test-' . time(),
      'bank_code' => $request->bank_code,
      'name' => $request->name,
    ];

    $response = Http::withBasicAuth($this->secret_api_key, '')->post($this->server_domain . '/callback_virtual_accounts', $data);

    return $response->json();
  }
}
