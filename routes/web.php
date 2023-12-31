<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;
use App\Http\Controllers\GTcontroller;
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

Route::get("/lien-he", [TinController::class, "lienhe"]);
Route::get("/ct/{id}", [TinController::class, "lay1tin"]);
Route::get("/gt", [GTcontroller::class, "index"]);
Route::get("/", function () {
    $query = DB::table("users")->select("id", "name");
    $kq = $query->get();
    foreach ($kq as $row) {
        echo $row->id . " - " . $row->name . "<br>";
    }
});;
Route::get("/trangchu", function(){
    $query = DB::table("users")->select("id", "name") -> get();
    $kq = $query->get();
    return view("index",["data" => $kq]);
});
Route::get('/them',function(){
    DB::table('users')->insert([
        'name' => 'Nguyễn Văn A']);
    echo "Đã thêm thành công";
    $category = DB::table('users')->get();
    echo "<pre>";
    print_r($category);
    echo "</pre>";
});