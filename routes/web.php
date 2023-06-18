<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\UserSubmissionController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Asset\SubmissionAssetController;

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

Route::get('/', function () {
    return view('welcome');
})->name("landing");

Route::get("/dashboard/redirect", [PageController::class, "dashboard"])->middleware(["auth"])->name("dashboard");

Route::name("auth.")->group(function () {
    Route::middleware(["guest"])->group(function() {
        Route::get("/login", [AuthController::class, "login"])->name("login");
        Route::get("/register", [AuthController::class, "register"])->name("register");
        Route::post("/authenticate", [AuthController::class, "authenticate"])->name("authenticate");
        Route::post("/register/process", [AuthController::class, "registerProcess"])->name("register.process");
    });
    Route::post("/logout", [AuthController::class, "logout"])->middleware(["auth"])->name("logout");
});

Route::middleware(["auth", "user"])->name("user.")->group(function () {
    Route::get("/dashboard", [DashboardController::class, "dashboard"])->name("dashboard");
    Route::get("/profile", [DashboardController::class, "profile"])->name("profile");
    Route::patch('/{user}/profile/save', [DashboardController::class, 'profileSave'])->name("profile.save");

    Route::prefix("/pengajuan")->name("submission.")->group(function() {
        Route::middleware(["withUserAllowedDocumentTypes"])->group(function() {
            Route::get("/", [UserSubmissionController::class, "index"])->name('index');
            Route::get("/tambah", [UserSubmissionController::class, "create"])->name('create');
        });
        Route::get("/{submission}/detail", [UserSubmissionController::class, "detail"])->name("detail");
        Route::get("/{submission}/edit", [UserSubmissionController::class, "edit"])->name("edit");
        Route::post("/{type}", [UserSubmissionController::class, "store"])->name('store');
        Route::patch("/{submission}", [UserSubmissionController::class, "update"])->name('update');
        Route::patch("/{submission}/cancel", [UserSubmissionController::class, "cancel"])->name('cancel');
    });
});

Route::prefix("/admin")->middleware(["auth", "admin"])->name("admin.")->group(function () {
    Route::get("/dashboard", function() {
        return "dashboard admin bang";
    })->name("dashboard");
});

Route::prefix("/assets")->middleware(["auth"])->name("assets.")->group(function() {
    Route::prefix("/pengajuan")->name("submission.")->group(function() {
        Route::get("/file/{submission}", [SubmissionAssetController::class, "file"])->name("file");
        Route::get("/details/{submissionDetail}", [SubmissionAssetController::class, "detail"])->name("detail");
    });
});