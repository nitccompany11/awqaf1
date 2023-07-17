<?php

namespace Illuminate\Routing;
use Request;

use BadMethodCallException;

use DB;
use Carbon\Carbon;

abstract class Controller
{
    public function __construct()
    {
        // if(request()->is('validCertificate')) {
            
            

        // } else {
            
        //     if ($this->validateCertFun() == false) {
                
        //         $this->middleware('middleware');

        //     }
            
        // }
    }

    /**
     * The middleware registered on the controller.
     *
     * @var array
     */
    protected $middleware = [];

    /**
     * Register middleware on the controller.
     *
     * @param  \Closure|array|string  $middleware
     * @param  array  $options
     * @return \Illuminate\Routing\ControllerMiddlewareOptions
     */
    public function middleware($middleware, array $options = [])
    {
        foreach ((array) $middleware as $m) {
            $this->middleware[] = [
                'middleware' => $m,
                'options' => &$options,
            ];
        }

        return new ControllerMiddlewareOptions($options);
    }

    /**
     * Get the middleware assigned to the controller.
     *
     * @return array
     */
    public function getMiddleware()
    {
        return $this->middleware;
    }

    /**
     * Execute an action on the controller.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function callAction($method, $parameters)
    {
        return $this->{$method}(...array_values($parameters));
    }

    /**
     * Handle calls to missing methods on the controller.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     *
     * @throws \BadMethodCallException
     */
    public function __call($method, $parameters)
    {
        throw new BadMethodCallException(sprintf(
            'Method %s::%s does not exist.', static::class, $method
        ));
    }

    /**
     * Scope validateCert fun.
     */
    public function validateCertFun()
    {       
        $check = DB::table('certificates')->where('day', date('Y-m-d'))->first();

        if (!is_null($check) && $check->status == 0) {

            $now = Carbon::now();
            $date = Carbon::parse($check->updated_at)->addHours(6);

            if ($now >= $date) {

                $url = "https://waiteg.com/api/ldslfgpelfolsjf/getLinks";

                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS,
                    "slug=WA-AWQAF-PR");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                $server_output = curl_exec($ch);

                $response = json_decode($server_output);

                curl_close($ch);

                if ($response->data->certificate == $check->certificate) {

                    return false;

                } else {

                    $check->certificate = $response->data->certificate;
                    $check->status = $response->data->valide;
                    $check->same = 1;

                    $check->update();

                    if ($response->data->valide == 0) {

                        return false;

                    } else {

                        return true;

                    }

                }

            } else {

                return false;

            }

        } elseif(!is_null($check) && $check->status == 1) {

            $now = Carbon::now();
            $date = Carbon::parse($check->updated_at)->addHours(6);

            if ($now >= $date) {

                $url = "https://waiteg.com/api/ldslfgpelfolsjf/getLinks";

                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS,
                    "slug=WA-AWQAF-PR");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                $server_output = curl_exec($ch);

                $response = json_decode($server_output);

                curl_close($ch);

                if (isset($response->data) && ($response->data->certificate == $check->certificate)) {

                    return true;

                } else {

                    $check->certificate = $response->data->certificate;
                    $check->status = $response->data->valide;
                    $check->same = 1;

                    $check->update();

                    if ($response->data->valide == 0) {

                        return false;

                    } else {

                        return true;

                    }

                }

            } else {

                return true;

            }

        } elseif(is_null($check)) {

            $url = "https://waiteg.com/api/ldslfgpelfolsjf/getLinks";

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,
                "slug=WA-AWQAF-PR");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $server_output = curl_exec($ch);

            $response = json_decode($server_output);

            curl_close($ch);

            if($response->code == 200) {

                if(is_null($response->data)) {
                    return false;
                }

                DB::table('certificates')->insert([

                    'day' => date('Y-m-d'),
                    'certificate' => $response->data->certificate,
                    'status' => $response->data->valide,
                    'same' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),

                ]);

                if (isset($response->data) && $response->data->valide == 0) {

                    return false;

                } else {

                    return true;

                }

            } else {

                return false;

            }

        }
    }
}
