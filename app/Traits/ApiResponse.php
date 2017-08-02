<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponse 
{
    /**
    * use api_* prefix for all variables here to 
    * not collide variables in the future
    */

    protected $api_status_code = 200; // HTTP_CODE
    protected $api_message = '';
    protected $api_data = [];
    protected $api_headers = [];

    /**
     * set status code
     * please refer to HTTP_STATUS_CODE in web or
     * vendor/symfony/http-foundation/Response.php
     * @param integer $code [description]
     */
    protected function set_status_code($code = 200)
    {
        $this->api_status_code = $code;
        return $this;
    }

    /**
     * set api response message
     * @param string $message [message to requestor]
     */
    protected function set_message($message = '')
    {
        $this->api_message = $message;
        return $this;
    }

    /**
     * set api response data
     * @param array $data []
     */
    protected function set_data($data = [])
    {
        $this->api_data = $data;
        return $this;
    }

    /**
     * set api response header
     * @param array $headers []
     */
    protected function set_headers($headers = [])
    {
        $this->api_headers = $headers;
        return $this;
    }

    /**
     * [respond_success set respond or use default "success"]
     * @param  string  $message     [message to requestor]
     * @param  array   $data        [data response]
     * @param  integer $status_code [status code]
     * @return [json]               [api respond]
     */
    protected function respond_success($message = 'Success!', $data = [], $status_code = 200)
    {
        return $this->set_status_code($status_code)->respond_with_success($message, $data);
    }

    /**
     * [respond_success set respond or use default "success"]
     * @param  string  $message     [message to requestor]
     * @param  array   $data        [data response]
     * @param  integer $status_code [status code]
     * @return [json]               [api respond]
     */
    protected function respond_warning($message = 'warning!', $data = [], $status_code = 200)
    {
        return $this->set_status_code($status_code)->respond_with_warning($message, $data);
    }

    /**
     * [respond_created set respond or use default "created"]
     * @param  string  $message     [message to requestor]
     * @param  array   $data        [data response]
     * @param  integer $status_code [status code]
     * @return [json]               [api respond]
     */
    protected function respond_created($message = 'Created', $data = [], $status_code = 201)
    {
        return $this->set_status_code($status_code)->respond_with_success($message, $data);
    }


    /**
     * [respond_accepted set respond or use default "accepted"]
     * @param  string  $message     [message to requestor]
     * @param  array   $data        [data response]
     * @param  integer $status_code [status code]
     * @return [json]               [api respond]
     */
    protected function respond_accepted($message = 'Accepted', $data = [], $status_code = 202)
    {
        return $this->set_status_code($status_code)->respond_with_success($message, $data);
    }


    /**
     * [respond_success set respond to success content]
     * @param  string  $message     [message to requestor]
     * @param  array   $data        [data response]
     * @return [json]               [api respond]
     */
    protected function respond_with_success($message, $data)
    {
        $this->api_message = $message;
        $this->api_data = $data;
        return $this->respond('success');
    }


    /**
     * [respond_error set respond or use default "something went wrong"]
     * @param  string  $message     [message to requestor]
     * @param  array   $data        [data response]
     * @param  integer $status_code [status code]
     * @return [json]               [api respond]
     */
    protected function respond_error($message = 'Something went wrong!', $data = [], $status_code = 500)
    {
        return $this->set_status_code($status_code)->respond_with_error($message, $data);
    }


    /**
     * [respond_unauthorize set respond or use default "unauthorized"]
     * @param  string  $message     [message to requestor]
     * @param  array   $data        [data response]
     * @param  integer $status_code [status code]
     * @return [json]               [api respond]
     */
    protected function respond_unauthorize( $message = "Unauthorized.", $data = [], $status_code = 401)
    {
        return $this->set_status_code($status_code)->respond_with_error($message, $data);
    }


    /**
     * [respond_not_found set respond or use default "not found"]
     * @param  string  $message     [message to requestor]
     * @param  array   $data        [data response]
     * @param  integer $status_code [status code]
     * @return [json]               [api respond]
     */
    protected function respond_not_found( $message = 'Resource Not Found.', $data = [], $status_code = 404)
    {
        return $this->set_status_code($status_code)->respond_with_error($message, $data);
    }


    /**
     * [respond_with_error set respond to an error content]
     * @param  string  $message     [message to requestor]
     * @param  array   $data        [data response]
     * @return [json]               [api respond]
     */
    protected function respond_with_error($message, $data)
    {
        $this->api_message = $message;
        $this->api_data = $data;
        return $this->respond('error');
    }

    /**
     * [respond_with_error set respond to an warning content]
     * @param  string  $message     [message to requestor]
     * @param  array   $data        [data response]
     * @return [json]               [api respond]
     */
    protected function respond_with_warning($message, $data)
    {
        $this->api_message = $message;
        $this->api_data = $data;
        return $this->respond('warning');
    }

    /**
     * the actual responded method
     * @param  [string] $status ['success' or 'error']
     * @return [json]           [ the actual respond build]
     */
    protected function respond($status)
    {
        $response_data = [
            'status'  => $status, //either success or error
            'message' => $this->api_message,
            'code'    => $this->api_status_code,
            'items'   => $this->api_data
        ];

        return response()->json($response_data, $this->api_status_code, $this->api_headers);
    }
}