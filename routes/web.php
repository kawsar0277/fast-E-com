<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Route ::get('/', [HomeController::class, 'index']);

Route ::get('/shop', [HomeController::class, 'shop']);

Route ::get('/return-process', [HomeController::class, 'returnProcess']);

Route ::get('/view-cart', [HomeController::class, 'viewCart']);
Route ::get('/checkout', [HomeController::class, 'checkout']);
Route ::get('/category', [HomeController::class, 'category']);
Route ::get('/sub-category', [HomeController::class, 'subCategory']);
Route ::get('/product-details', [HomeController::class, 'productDetails']);
Route ::get('/view-product', [HomeController::class, 'viewProduct']);
Route ::get('/privacy-policy', [HomeController::class, 'privacyPolicy']);
Route ::get('/Terms$Conditions', [HomeController::class, 'termsCondition']);
Route ::get('/refund-policy', [HomeController::class, 'refundPolicy']);
Route ::get('/paymentpolicy', [HomeController::class, 'paymentPolicy']);
Route ::get('/contact-us', [HomeController::class, 'contactUs']);
Route ::get('/about-us', [HomeController::class, 'aboutUs']);



//admin login

Route ::get('/admin/login', [AuthController::class,'adminLoginFrom']);
Auth::routes();

Route ::get('/admin/dashboard', [AdminController::class,'adminDashboard']);
