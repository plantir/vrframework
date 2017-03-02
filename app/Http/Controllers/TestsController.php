<?php 
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class TestsController extends Controller {

    // const MODEL = "App\Test";
    // use RESTActions;
    public function __construct()
    {

    }

    public function show(Request $request, $id)
    {
        $content = 'armin';
        $status = 200;
        $value = 'Application/json';
        return (new Response($content, $status))
                  ->header('Content-Type', $value);
        // return User::findOrFail($id);
    }


}
