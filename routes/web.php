<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AppraisalController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\AnalyticsController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\AdsReportController;




// TOP
Route::get('/', [FrontController::class, 'top'])->name('top');

// 買取実績
Route::get('result', [FrontController::class, 'result'])->name('result');

// よくある質問
Route::get('faq', [FrontController::class, 'faq'])->name('faq');

// プロフィール
Route::get('profile', [FrontController::class, 'profile'])->name('profile');

// アンケート
Route::get('voice', [FrontController::class, 'voice'])->name('voice');
Route::post('voice', [App\Http\Controllers\VoiceController::class, 'submit'])->name('voice.submit');

// 特定商取引法に基づく表記
Route::get('rule', [FrontController::class, 'rule'])->name('rule');

// プライバシーポリシー
Route::get('policy', [FrontController::class, 'policy'])->name('policy');





Auth::routes();

Route::get('admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::get('task', [App\Http\Controllers\HomeController::class, 'task'])->name('task');
Route::post('task/update', [App\Http\Controllers\HomeController::class, 'taskUpdate'])->name('task.update');
Route::post('task/delete', [App\Http\Controllers\HomeController::class, 'taskDelete'])->name('task.delete');
Route::get('holiday', [App\Http\Controllers\HomeController::class, 'holiday'])->name('holiday');

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('appraisal', AppraisalController::class);
    Route::resource('item', ItemController::class);
    Route::resource('task', TaskController::class);
    Route::resource('movie', MovieController::class);
    Route::post('movie/{movie}/first-set', [MovieController::class, 'firstSet'])->name('movie.firstSet');
    Route::post('movie/{movie}/first-reset', [MovieController::class, 'firstReset'])->name('movie.firstReset');
    Route::get('lp/analytics', [AnalyticsController::class, 'lpAnalytics'])->name('lp.analytics');
    Route::get('hp/analytics', [AnalyticsController::class, 'hpAnalytics'])->name('hp.analytics');
    Route::get('ads-report', [AdsReportController::class, 'adsReport'])->name('ads_report');
});













;
Route::post('/api/upload_webp', [FrontController::class, 'upload_webp']);
Route::get('/api/brands', [ItemController::class, 'searchBrand']);
Route::get('/api/makers', [ItemController::class, 'searchMaker']);
Route::get('/api/movies', [MovieController::class, 'getMovie']);












// use Spatie\Sitemap\Sitemap;
// use Spatie\Sitemap\Tags\Url;

// Route::get('/generate-sitemap', function () {
//     // 新しいサイトマップオブジェクトを作成
//     $sitemap = Sitemap::create()
//         // ホームページを追加
//         ->add(Url::create('/')
//             ->setLastModificationDate(now())
//             ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
//             ->setPriority(1.0))

//         // /passionページを追加
//         ->add(Url::create('/passion')
//             ->setLastModificationDate(now())
//             ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
//             ->setPriority(0.8))

//         // /menuページを追加
//         ->add(Url::create('/menu')
//             ->setLastModificationDate(now())
//             ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
//             ->setPriority(0.8))

//         // /infoページを追加
//         ->add(Url::create('/info')
//             ->setLastModificationDate(now())
//             ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
//             ->setPriority(0.6))

//         // /voiceページを追加
//         ->add(Url::create('/voice')
//             ->setLastModificationDate(now())
//             ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
//             ->setPriority(0.6));

//     // サイトマップを public/sitemap.xml に書き込む
//     $sitemap->writeToFile(public_path('sitemap.xml'));

//     return 'Sitemap generated!';
// });