<?php



use App\Http\Controllers\Api\V1\SkillController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    // Route::get('/skills', [SkillController::class, 'index']);
    // Route::get('/skills/{id}', [SkillController::class, 'show']);
    // Route::post('/skills', [SkillController::class, 'store']);
    // Route::put('/skills/{id}', [SkillController::class, 'update']);
    // Route::delete('/skills/{id}', [SkillController::class, 'destroy']);

    Route::apiResource('skills', SkillController::class);
});
