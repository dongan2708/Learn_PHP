
<?php

//use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use App\Models\Task;
//Route::get('/', function () {
//    return view('welcome');
//});

//Show dashboard
Route::get('/',function (){
    $tasks = Task::orderby('created_at','desc')->get();

    return view('task',[
        'tasks'=>$tasks
    ]);
});

//Add new task
Route::post('/task',function (Request $request){

    $validated = Validator::make($request->all(),[
        'name' => 'required|max:255',
    ]);
//    $validated = $request->validate(
//        'name' => 'required|unique:tasks|max:255'
//    );

    if ($validated->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validated);
    }
    $task = new Task();
    $task->name=$request->name;
    $task->save();

    return redirect('/');
});

//delete
Route::any('/task/{task}',function ($id){
    Task::findOrFail($id)->delete();
    return redirect('/');
});
