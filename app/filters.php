Route::filter('allowOrigin', function($route, $request, $response)
{
    $response->header('access-control-allow-origin','*');
});