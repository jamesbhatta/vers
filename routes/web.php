<?php
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MigrationController;
use App\Http\Controllers\DeathController;
use App\Http\Controllers\BirthController;
use App\Http\Controllers\MarriageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VdcController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MarriageWithnessController;
use App\Http\Controllers\WithnessRelationshipController;

Auth::routes(['register' => false]);
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::group(['middleware' => ['auth', 'role:super-admin']], function () {
    Route::view('backup', 'laravel_backup_panel::layout')->name('laravel-backup-panel.index');

    Route::resources([
        'user' => 'UserController',
        'province' => 'ProvinceController',
        'district' => 'DistrictController',
        'municipality' => 'MunicipalityController',
        'ward' => 'WardController',
        'country' => 'CountryController',
        'moyhertongue' => 'MotherTongueController',
    ]);

    // Route::resource('country', CountryController::class);

    Route::get('user/{user}/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::put('user/{user}/profile/update', [UserController::class, 'profileUpdate'])->name('user.profile.update');
    Route::get('user/{user}/pasword', [UserController::class, 'password'])->name('user.password');

    Route::get('change-password/{user}', 'UserPasswordController@form')->name('password.change.form');
    Route::put('change-password/{user}', 'UserController@change')->name('password.change');

    Route::get('settings-items', 'SettingsController@items')->name('settings.items');
    Route::get('settings', 'SettingsController@index')->name('settings.index');
    Route::post('settings', 'SettingsController@sync')->name('settings.sync');
    Route::post('settings/form', 'SettingsController@syncForm')->name('settings.sync.form');
    Route::put('settings/{mysetting}/update', 'SettingsController@syncUpdate')->name('settings.sync.update');
    Route::put('settings/{mysetting}/update-name', 'SettingsController@syncName')->name('settings.sync.update.name');

    Route::post('settings/registaar', 'SettingsController@registaar')->name('settings.registaar');
    Route::delete('settings/{registaar}/registaar', 'SettingsController@registaarDelete')->name('settings.registaar.delete');
    Route::get('settings/{registaar}/registaar', 'SettingsController@registaarEdit')->name('settings.registaar.edit');
    Route::put('settings/{registaar}/registaar', 'SettingsController@registaarUpdate')->name('settings.registaar.update');

    //For migration-notice
    Route::get('/migration-notice', [MigrationController::class, 'index'])->name('migration.index');
    Route::get('/migration-notice/create', [MigrationController::class, 'create'])->name('migration.create');
    Route::post('/migration-notice/store', [MigrationController::class, 'store'])->name('migration.store');
    Route::get('/migration-notice/{migrationCertificate}/add-family', [MigrationController::class, 'add_family'])->name('migration.add-family');
    Route::get('/migration-notice/{migrationCertificate}/edit', [MigrationController::class, 'edit'])->name('migration.edit');
    Route::put('/migration-notice/{migrationCertificate}/update', [MigrationController::class, 'update'])->name('migration.update');
    Route::delete('/migration-notice/{migrationCertificate}/delete', [MigrationController::class, 'destroy'])->name('migration.delete');
    Route::get('/migration-notice/{migrationCertificate}/show', [MigrationController::class, 'show'])->name('migration.show');
    Route::get('/migration-notice/filter', [MigrationController::class, 'filter'])->name('migration.filter');
    Route::get('/migration-notice/list-print', [MigrationController::class, 'listPrint'])->name('migration.listprint');
    Route::get('/migration-notice/excel-export', [MigrationController::class, 'excel'])->name('migration.excel');
    Route::get('/migration-notice/print/{migrationCertificate}', [MigrationController::class, 'print'])->name('migration.print');

    //For family add
    Route::get('/family/create', [FamilyController::class, 'create'])->name('family.create');
    Route::post('/family/store/{migrationCertificate}', [FamilyController::class, 'store'])->name('family.store');
    Route::get('/family/{family}/edit/{migrationCertificate}', [FamilyController::class, 'edit'])->name('family.edit');
    Route::put('/family/{family}/update', [FamilyController::class, 'update'])->name('family.update');
    // Route::get('/family/{migrationCertificate}/show', [FamilyController::class,'show'])->name('family.show');
    Route::delete('/family/{family}/delete', [FamilyController::class, 'destroy'])->name('family.delete');

    //For death-notice
    Route::get('/death-notice', [DeathController::class, 'index'])->name('death.index');
    Route::get('/death-notice/create', [DeathController::class, 'create'])->name('death.create');
    Route::post('/death-notice/store', [DeathController::class, 'store'])->name('death.store');
    Route::delete('/death-notice/{death}/delete', [DeathController::class, 'destroy'])->name('death.delete');
    Route::get('/death-notice/{death}/edit', [DeathController::class, 'edit'])->name('death.edit');
    Route::put('/death-notice/{death}/update', [DeathController::class, 'update'])->name('death.update');
    Route::get('/death-notice/{death}/show', [DeathController::class, 'show'])->name('death.show');
    Route::get('/death-notice/filter', [DeathController::class, 'filter'])->name('death.filter');
    Route::get('/death-notice/list-print', [DeathController::class, 'listPrint'])->name('death.listprint');
    Route::get('/death-notice/excel-export', [DeathController::class, 'excel'])->name('death.excel');
    Route::get('/death-notice/excel-detail/{death}', [DeathController::class, 'printDetail'])->name('death.printdetail');

    //for birth-notice
    Route::get('/birth-notice', [BirthController::class, 'index'])->name('birth.index');
    Route::get('/birth-notice/create', [BirthController::class, 'create'])->name('birth.create');
    Route::post('/birth-notice/store', [BirthController::class, 'store'])->name('birth.store');
    Route::get('/birth-notice/{birth}/edit', [BirthController::class, 'edit'])->name('birth.edit');
    Route::put('/birth-notice/{birth}/update', [BirthController::class, 'update'])->name('birth.update');
    Route::delete('/birth-notice/{birth}/destroy', [BirthController::class, 'destroy'])->name('birth.delete');
    Route::get('/birth-notice/filter', [BirthController::class, 'filter'])->name('birth.filter');
    Route::get('/birth-notice/{birth}/show', [BirthController::class, 'show'])->name('birth.show');
    Route::get('/birth-notice/list-print', [BirthController::class, 'listPrint'])->name('birth.listprint');
    Route::get('/birth-notice/excel-export', [BirthController::class, 'excel'])->name('birth.excel');
    Route::get('/birth-notice/birth-detail/{birth}', [BirthController::class, 'printDetail'])->name('birth.printdetail');

    //for marriage-notice
    Route::get('/marriage-notice', [MarriageController::class, 'index'])->name('marriage.index');
    Route::get('/marriage-notice/create', [MarriageController::class, 'create'])->name('marriage.create');
    Route::post('/marriage-notice/store', [MarriageController::class, 'store'])->name('marriage.store');
    Route::delete('/marriage-notice/{marriage}/delete', [MarriageController::class, 'destroy'])->name('marriage.delete');
    Route::get('/marriage-notice/{marriage}/edit', [MarriageController::class, 'edit'])->name('marriage.edit');
    Route::put('/marriage-notice/{marriage}/update', [MarriageController::class, 'update'])->name('marriage.update');
    Route::get('/marriage-notice/filter', [MarriageController::class, 'filter'])->name('marriage.filter');
    Route::get('/marriage-notice/{marriage}/show', [MarriageController::class, 'show'])->name('marriage.show');
    Route::get('/marriage-notice/list-print', [MarriageController::class, 'listPrint'])->name('marriage.listprint');
    Route::get('/marriage-notice/excel-export', [MarriageController::class, 'excel'])->name('marriage.excel');
    Route::get('/marriage-notice/marriage-detail/{marriage}', [MarriageController::class, 'printDetail'])->name('marriage.printdetail');

    //
    Route::get('/marriage-notice/{marriage}/create', [MarriageWithnessController::class, 'create'])->name('marriageWithness.create');
    Route::post('/marriage-withness/store/{marriage}', [MarriageWithnessController::class, 'store'])->name('marriageWithness.store');
    Route::get('/marriage-withness/{marriage}/{marriageWithness}/edit/', [MarriageWithnessController::class, 'edit'])->name('marriageWithness.edit');
    Route::put('/marriage-withness/{marriageWithness}/update', [MarriageWithnessController::class, 'update'])->name('marriageWithness.update');
    Route::delete('/marriage-withness/{marriageWithness}/delete', [MarriageWithnessController::class, 'destroy'])->name('marriageWithness.delete');

    //for VDC
    Route::get('vdc', [VdcController::class, 'index'])->name('vdc.index');
    Route::post('vdc', [VdcController::class, 'store'])->name('vdc.store');
    Route::delete('vdc/{vdc}/delete', [VdcController::class, 'delete'])->name('vdc.delete');
    Route::get('vdc/{vdc}/edit', [VdcController::class, 'edit'])->name('vdc.edit');
    Route::put('vdc/{vdc}/update', [VdcController::class, 'update'])->name('vdc.update');

    Route::get('book', [BookController::class, 'index'])->name('book.index');

    Route::post('book', [BookController::class, 'store'])->name('book.store');
    Route::get('book/create', [BookController::class, 'create'])->name('book.create');
    Route::get('book/edit/{book}', [BookController::class, 'edit'])->name('book.edit');
    Route::delete('book/delete/{book}', [BookController::class, 'delete'])->name('book.delete');
    Route::put('book/update/{book}', [BookController::class, 'update'])->name('book.update');
    Route::get('book/filter', [BookController::class, 'filter'])->name('book.filter');

    //for withness relationship
    Route::get('withness-relationship', [WithnessRelationshipController::class, 'index'])->name('withness-relationship.index');
    Route::post('withness-relationship', [WithnessRelationshipController::class, 'store'])->name('withness-relationship.store');
    Route::get('withness-relationship/edit/{withnessRelationship}', [WithnessRelationshipController::class, 'edit'])->name('withness-relationship.edit');
    Route::put('withness-relationship/update/{withnessRelationship}', [WithnessRelationshipController::class, 'update'])->name('withness-relationship.update');
    Route::delete('withness-relationship/{withnessRelationship}', [WithnessRelationshipController::class, 'destroy'])->name('withness-relationship.delete');

    Route::get('admin/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name('admin.logs');
});

Route::group(['middleware' => ['auth', 'role:super-admin|admin']], function () {
    Route::resources([
        'user' => 'UserController',
        'province' => 'ProvinceController',
        'district' => 'DistrictController',
        'municipality' => 'MunicipalityController',
        'ward' => 'WardController',
        'country' => 'CountryController',
        'moyhertongue' => 'MotherTongueController',
    ]);

    // Route::resource('country', CountryController::class);

    // Route::get('user/{user}/profile', [UserController::class, 'profile'])->name('user.profile');
    // Route::put('user/{user}/profile/update', [UserController::class, 'profileUpdate'])->name('user.profile.update');
    // Route::get('user/{user}/pasword', [UserController::class, 'password'])->name('user.password');

    // Route::get('change-password/{user}', 'UserPasswordController@form')->name('password.change.form');
    // Route::put('change-password/{user}', 'UserController@change')->name('password.change');

    //For migration-notice
    Route::get('/migration-notice', [MigrationController::class, 'index'])->name('migration.index');
    Route::get('/migration-notice/create', [MigrationController::class, 'create'])->name('migration.create');
    Route::post('/migration-notice/store', [MigrationController::class, 'store'])->name('migration.store');
    Route::get('/migration-notice/{migrationCertificate}/add-family', [MigrationController::class, 'add_family'])->name('migration.add-family');
    Route::get('/migration-notice/{migrationCertificate}/edit', [MigrationController::class, 'edit'])->name('migration.edit');
    Route::put('/migration-notice/{migrationCertificate}/update', [MigrationController::class, 'update'])->name('migration.update');
    // Route::delete('/migration-notice/{migrationCertificate}/delete', [MigrationController::class, 'destroy'])->name('migration.delete');
    Route::get('/migration-notice/{migrationCertificate}/show', [MigrationController::class, 'show'])->name('migration.show');
    Route::get('/migration-notice/filter', [MigrationController::class, 'filter'])->name('migration.filter');
    Route::get('/migration-notice/list-print', [MigrationController::class, 'listPrint'])->name('migration.listprint');
    Route::get('/migration-notice/excel-export', [MigrationController::class, 'excel'])->name('migration.excel');
    Route::get('/migration-notice/print/{migrationCertificate}', [MigrationController::class, 'print'])->name('migration.print');

    //For family add
    Route::get('/family/create', [FamilyController::class, 'create'])->name('family.create');
    Route::post('/family/store/{migrationCertificate}', [FamilyController::class, 'store'])->name('family.store');
    Route::get('/family/{family}/edit/{migrationCertificate}', [FamilyController::class, 'edit'])->name('family.edit');
    Route::put('/family/{family}/update', [FamilyController::class, 'update'])->name('family.update');
    // Route::get('/family/{migrationCertificate}/show', [FamilyController::class,'show'])->name('family.show');
    // Route::delete('/family/{family}/delete', [FamilyController::class, 'destroy'])->name('family.delete');

    //For death-notice
    Route::get('/death-notice', [DeathController::class, 'index'])->name('death.index');
    Route::get('/death-notice/create', [DeathController::class, 'create'])->name('death.create');
    Route::post('/death-notice/store', [DeathController::class, 'store'])->name('death.store');
    // Route::delete('/death-notice/{death}/delete', [DeathController::class, 'destroy'])->name('death.delete');
    Route::get('/death-notice/{death}/edit', [DeathController::class, 'edit'])->name('death.edit');
    Route::put('/death-notice/{death}/update', [DeathController::class, 'update'])->name('death.update');
    Route::get('/death-notice/{death}/show', [DeathController::class, 'show'])->name('death.show');
    Route::get('/death-notice/filter', [DeathController::class, 'filter'])->name('death.filter');
    Route::get('/death-notice/list-print', [DeathController::class, 'listPrint'])->name('death.listprint');
    Route::get('/death-notice/excel-export', [DeathController::class, 'excel'])->name('death.excel');
    Route::get('/death-notice/excel-detail/{death}', [DeathController::class, 'printDetail'])->name('death.printdetail');

    //for birth-notice
    Route::get('/birth-notice', [BirthController::class, 'index'])->name('birth.index');
    Route::get('/birth-notice/create', [BirthController::class, 'create'])->name('birth.create');
    Route::post('/birth-notice/store', [BirthController::class, 'store'])->name('birth.store');
    Route::get('/birth-notice/{birth}/edit', [BirthController::class, 'edit'])->name('birth.edit');
    Route::put('/birth-notice/{birth}/update', [BirthController::class, 'update'])->name('birth.update');
    // Route::delete('/birth-notice/{birth}/destroy', [BirthController::class, 'destroy'])->name('birth.delete');
    Route::get('/birth-notice/filter', [BirthController::class, 'filter'])->name('birth.filter');
    Route::get('/birth-notice/{birth}/show', [BirthController::class, 'show'])->name('birth.show');
    Route::get('/birth-notice/list-print', [BirthController::class, 'listPrint'])->name('birth.listprint');
    Route::get('/birth-notice/excel-export', [BirthController::class, 'excel'])->name('birth.excel');
    Route::get('/birth-notice/birth-detail/{birth}', [BirthController::class, 'printDetail'])->name('birth.printdetail');

    //for marriage-notice
    Route::get('/marriage-notice', [MarriageController::class, 'index'])->name('marriage.index');
    Route::get('/marriage-notice/create', [MarriageController::class, 'create'])->name('marriage.create');
    Route::post('/marriage-notice/store', [MarriageController::class, 'store'])->name('marriage.store');
    // Route::delete('/marriage-notice/{marriage}/delete', [MarriageController::class, 'destroy'])->name('marriage.delete');
    Route::get('/marriage-notice/{marriage}/edit', [MarriageController::class, 'edit'])->name('marriage.edit');
    Route::put('/marriage-notice/{marriage}/update', [MarriageController::class, 'update'])->name('marriage.update');
    Route::get('/marriage-notice/filter', [MarriageController::class, 'filter'])->name('marriage.filter');
    Route::get('/marriage-notice/{marriage}/show', [MarriageController::class, 'show'])->name('marriage.show');
    Route::get('/marriage-notice/list-print', [MarriageController::class, 'listPrint'])->name('marriage.listprint');
    Route::get('/marriage-notice/excel-export', [MarriageController::class, 'excel'])->name('marriage.excel');
    Route::get('/marriage-notice/marriage-detail/{marriage}', [MarriageController::class, 'printDetail'])->name('marriage.printdetail');

    //
    Route::get('/marriage-notice/{marriage}/create', [MarriageWithnessController::class, 'create'])->name('marriageWithness.create');
    Route::post('/marriage-withness/store/{marriage}', [MarriageWithnessController::class, 'store'])->name('marriageWithness.store');
    Route::get('/marriage-withness/{marriage}/{marriageWithness}/edit/', [MarriageWithnessController::class, 'edit'])->name('marriageWithness.edit');
    Route::put('/marriage-withness/{marriageWithness}/update', [MarriageWithnessController::class, 'update'])->name('marriageWithness.update');
    // Route::delete('/marriage-withness/{marriageWithness}/delete', [MarriageWithnessController::class, 'destroy'])->name('marriageWithness.delete');

    //for withness relationship
    Route::get('withness-relationship', [WithnessRelationshipController::class, 'index'])->name('withness-relationship.index');
    Route::post('withness-relationship', [WithnessRelationshipController::class, 'store'])->name('withness-relationship.store');
    Route::get('withness-relationship/edit/{withnessRelationship}', [WithnessRelationshipController::class, 'edit'])->name('withness-relationship.edit');
    Route::put('withness-relationship/update/{withnessRelationship}', [WithnessRelationshipController::class, 'update'])->name('withness-relationship.update');
    // Route::delete('withness-relationship/{withnessRelationship}', [WithnessRelationshipController::class, 'destroy'])->name('withness-relationship.delete');
});
