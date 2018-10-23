| contains the "web" middleware group. Now create something great!
|
*/
use App\Task;
use Illuminate\Http\Request;


/**
* 顯示我們所有任務的清單
*/


Route::get('/', function () {
    return view('welcome');
});

/**
* 增加新的任務
*/
Route::post('/task', function (Request $request) {
//
});

/**
* 刪除任務
*/
Route::delete('/task/{task}', function (Task $task) {
//
});
