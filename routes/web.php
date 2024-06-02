  <?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'indexAction'])->name('index');
Route::post('/', [IndexController::class, 'addEmployeeAction'])->name('addEmployee');
Route::get('/list_employee', [IndexController::class, 'employeeListAction'])->name('list_employee');
Route::get('/info_employee/{employee}', [IndexController::class, 'infoEmployeeAction'])->name('info_employee');







