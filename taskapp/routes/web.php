<?php
 use App\Task;
 use illuminate\Http\Request;
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

  
/**
 *
 * Display All Tasks
 */
  
Route::group(['middleware' => ['web']], function(){
Route::get('/',function(){


   return view('tasks',[
    'tasks'=>Task::orderby('created_at','asc')->get()
    ]);
});

/**
 *
 * Add New Task
 */

Route::post('/task', function(Request $request){
  $validator = Validator::make($request->all(),[
    'name'=> 'required|max:255',
    ]);

  if($validator->fails()){
    return redirect('/')
    ->withInput()
    ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');

  //create The Task..
});

/**
 *
 * Delete An Existing Tasl
 */
Route::delete('task/{id}',function($id){
  Task::findOrFail($id)->delete();

  return redirect('/');

  //
});

});