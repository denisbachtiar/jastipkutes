<?php 

namespace App\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\RequestOptions;

class Guzzle
{
	public static function post($parameter = [], $base_url, $url, $token = null)
	{
		$headers = [
			'headers' => [
				'Content-Type' => 'application/json',
				'Accept' => 'application/json',
				'Authorization'=> 'BEARER '.$token,
			],
			'json' => $parameter
		];

		try {
			$client = new \GuzzleHttp\Client(['base_uri' => $base_url]);
			$response = $client->request('POST', $url, $headers);
		} catch (RequestException $exception) {
			$response = $exception->getResponse();
		}

		if(!is_null($response)){
			$result = [
				'status_code' => $response->getStatusCode(),
				'data' => json_decode($response->getBody()->getContents())
			];
			return $result;
		} else {
			abort(404,'API Error ! '.$base_url.$url);
			echo "API Error ".$base_url.$url;
		}
	}

	public static function get($parameter, $base_url, $url, $token = null)
	{
		$param = http_build_query($parameter); 
		$parameter = $url."?".$param;

		if ($token != null) {
			$auth = [
				'headers' => [
					'Authorization' => 'Bearer '.$token
				]
			];
		}else{
			$auth = [];
		}

		try {
	     	$client = new \GuzzleHttp\Client(['base_uri' => $base_url]);
	     	$response = $client->request('GET', $parameter, $auth);
		} catch (RequestException $exception) {
			$response = $exception->getResponse();
		}
		
		if(!is_null($response)){
			$result = [
				'status_code' => $response->getStatusCode(),
				'data' => json_decode($response->getBody()->getContents())
			];
			return $result;
		} else {
			abort(404,'API Error ! '.$base_url.$url);
			echo "API Error ".$base_url.$url;
		}
	}

	public static function getMod($parameter, $base_url, $url, $token)
	{
		$parameter = $url;

		if ($token != null) {
			$auth = [
				'headers' => [
					'Authorization' => 'Bearer '.$token
				]
			];
		}else{
			$auth = [];
		}

		try {
	     	$client = new \GuzzleHttp\Client(['base_uri' => $base_url]);
	     	$response = $client->request('GET', $parameter, $auth);
		} catch (RequestException $exception) {
			$response = $exception->getResponse();
		}
		
		if(!is_null($response)){
			$result = [
				'status_code' => $response->getStatusCode(),
				'data' => json_decode($response->getBody()->getContents())
			];
			return $result;
		} else return redirect()->route('error.apidown');
	}

	public static function put($parameter = [], $base_url, $url, $token = null)
	{
		$headers = [
			'headers' => [
				'Content-Type' => 'application/json',
				'Accept' => 'application/json',
				'Authorization'=> 'BEARER '.$token,
			],
			'json' => $parameter
		];

		try {
			$client = new \GuzzleHttp\Client(['base_uri' => $base_url]);
			$response = $client->request('PUT', $url, $headers);
		} catch (RequestException $exception) {
			$response = $exception->getResponse();
		}
		if(!is_null($response)){
			$result = [
				'status_code' => $response->getStatusCode(),
				'data' => json_decode($response->getBody()->getContents())
			];
			return $result;
		} else return redirect()->route('error.apidown');
	}

	public static function sendToken($parameter = [], $base_url = '', $url = '')
	{
		$auth = [
			'form_params' => $parameter
		];
		
		try {
			$client = new \GuzzleHttp\Client(['base_uri' => $base_url]);
			$response = $client->request('POST', $url, $auth);
		} catch (RequestException $exception) {
			$response = $exception->getResponse();
		}
		
		if(!is_null($response)){
			return $response;
		} else return redirect()->route('error.apidown');
	}

	public static function getContents($response)
	{
		$data = $response->getBody()->getContents();
		return json_decode($data);
	}

	/**
	* Get parameter API Value for internal
	* param array('value', 'condition')
	* recieve condition =, !=, <=, >=, like
	* not acceptable  for beetwen
	* return string
	*/
	public static function getParamValue($parameter)
	{
		return implode(',', $parameter);
	}

	public static function checkResponseCondition($request)
	{
		if (isset($request['status_code'])){
			if ($request['status_code'] == 200){
				return true;
			}else{
				return false;
			}
		}
	}

	public static function delete($parameter = null, $base_url, $url, $token = null)
	{
		$headers = [
			'headers' => [
				'Authorization'=> 'BEARER '.$token,
			]
		];

		try {
			$client = new \GuzzleHttp\Client(['base_uri' => $base_url]);
			$response = $client->request('delete', $url, $headers);
		} catch (RequestException $exception) {
			$response = $exception->getResponse();
		}

		if(!is_null($response)){
			$result = [
				'status_code' => $response->getStatusCode(),
				'data' => json_decode($response->getBody()->getContents())
			];
			return $result;
		} else return redirect()->route('error.apidown');
	}
}