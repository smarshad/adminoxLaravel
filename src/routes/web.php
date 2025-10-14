<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController as AdminLogin;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', [AdminLogin::class, 'index'])->name('login');
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::get('admin-forgot-password', [RegisterController::class, 'forgotPasswordForm'])->name('admin.forgot-password');
Route::get('admin/dashboard1', [AdminController::class, 'dashboard1'])->name('admin.dashboard1');
Route::get('admin/dashboard2', [AdminController::class, 'dashboard2'])->name('admin.dashboard2');

Route::prefix('pages')->group(function () {
    Route::get('/starter',[PageController::class,'starter'])->name('pages.starter');
    Route::get('/login',[PageController::class,'login'])->name('pages.login');
    Route::get('/register',[PageController::class,'register'])->name('pages.register');
    Route::get('/logout',[PageController::class,'logout'])->name('pages.logout');
    Route::get('/recoverpw',[PageController::class,'recoverpw'])->name('pages.recoverpw');
    Route::get('/lock-screen',[PageController::class,'lockScreen'])->name('pages.lockscreen');
    Route::get('/confirm-mail',[PageController::class,'confirmMail'])->name('pages.confirmmail');
    Route::get('/page-not-found',[PageController::class,'notFound'])->name('pages.notfound');
    Route::get('/page-not-found-alt',[PageController::class,'notFoundAlt'])->name('pages.notfoundalt');
    Route::get('/page-500',[PageController::class,'errorPage'])->name('pages.500');
});


Route::prefix('extra-pages')->group(function () {
    Route::get('/about',[PageController::class,'about'])->name('extra.pages.about');
    Route::get('/contact',[PageController::class,'contact'])->name('extra.pages.contact');
    Route::get('/companies',[PageController::class,'companies'])->name('extra.pages.companies');
    Route::get('/members',[PageController::class,'members'])->name('extra.pages.members');
    Route::get('/members2',[PageController::class,'members2'])->name('extra.pages.members2');
    Route::get('/timeline',[PageController::class,'timeline'])->name('extra.pages.timeline');
    Route::get('/invoice',[PageController::class,'invoice'])->name('extra.pages.invoice');
    Route::get('/maintenance',[PageController::class,'maintenance'])->name('extra.pages.maintenance');
    Route::get('/comingsoon',[PageController::class,'comingsoon'])->name('extra.pages.comingsoon');
    Route::get('/faq',[PageController::class,'faq'])->name('extra.pages.faq');
    Route::get('/pricing',[PageController::class,'pricing'])->name('extra.pages.pricing');
    Route::get('/profile',[PageController::class,'profile'])->name('extra.pages.profile');
    Route::get('/email-template',[PageController::class,'emailTemplate'])->name('extra.pages.email-template');
    Route::get('/search-result',[PageController::class,'searchResult'])->name('extra.pages.search-result');
    Route::get('/sitemap',[PageController::class,'sitemap'])->name('extra.pages.sitemap');
});

Route::prefix('email')->group(function () {
    Route::get('/inbox',[EmailController::class,'inbox'])->name('email.inbox');
    Route::get('/compose',[EmailController::class,'compose'])->name('email.compose');
    Route::get('/read',[EmailController::class,'read'])->name('email.read');
});

Route::get('/calendar',[PageController::class,'calendar'])->name('calendar');
Route::get('/todo',[PageController::class,'todo'])->name('todo');
Route::get('/tickets',[PageController::class,'tickets'])->name('tickets');
Route::get('/task-board',[PageController::class,'taskboard'])->name('taskboard');

Route::prefix('admin-ui')->group(function () {
    Route::get('/grid',[PageController::class,'grid'])->name('admin.ui.grid');
    Route::get('/sweetalert',[PageController::class,'sweetalert'])->name('admin.ui.sweetalert');
    Route::get('/tilesbox',[PageController::class,'tilesbox'])->name('admin.ui.tilesbox');
    Route::get('/nestable',[PageController::class,'nestable'])->name('admin.ui.nestable');
    Route::get('/rangeslider',[PageController::class,'rangeslider'])->name('admin.ui.rangeslider');
    Route::get('/ratings',[PageController::class,'ratings'])->name('admin.ui.ratings');
    Route::get('/filemanager',[PageController::class,'filemanager'])->name('admin.ui.filemanager');
    Route::get('/lightbox',[PageController::class,'lightbox'])->name('admin.ui.lightbox');
    Route::get('/slider',[PageController::class,'slider'])->name('admin.ui.slider');
    Route::get('/scrollbar',[PageController::class,'scrollbar'])->name('admin.ui.scrollbar');
    Route::get('/treeview',[PageController::class,'treeview'])->name('admin.ui.treeview');
});

Route::prefix('ui-lit')->group(function () {
    Route::get('/typography',[PageController::class,'typography'])->name('admin.ui.kit.typography');
    Route::get('/cards',[PageController::class,'cards'])->name('admin.ui.kit.cards');
    Route::get('/buttons',[PageController::class,'buttons'])->name('admin.ui.kit.buttons');
    Route::get('/modals',[PageController::class,'modals'])->name('admin.ui.kit.modals');
    Route::get('/checkbox-radio',[PageController::class,'checkboxradio'])->name('admin.ui.kit.checkbox-radio');
    Route::get('/spinners',[PageController::class,'spinners'])->name('admin.ui.kit.spinners');
    Route::get('/ribbons',[PageController::class,'ribbons'])->name('admin.ui.kit.ribbons');
    Route::get('/portlets',[PageController::class,'portlets'])->name('admin.ui.kit.portlets');
    Route::get('/tabs',[PageController::class,'tabs'])->name('admin.ui.kit.tabs');
    Route::get('/progressbars',[PageController::class,'progressbars'])->name('admin.ui.kit.progressbars');
    Route::get('/notifications',[PageController::class,'notifications'])->name('admin.ui.kit.notifications');
    Route::get('/carousel',[PageController::class,'carousel'])->name('admin.ui.kit.carousel');
    Route::get('/video',[PageController::class,'video'])->name('admin.ui.kit.video');
    Route::get('/tooltips-popovers',[PageController::class,'tooltipspopovers'])->name('admin.ui.kit.tooltips-popovers');
    Route::get('/images',[PageController::class,'images'])->name('admin.ui.kit.images');
    Route::get('/bootstrap',[PageController::class,'bootstrap'])->name('admin.ui.kit.bootstrap');
});

Route::prefix('icons')->group(function(){
    Route::get('/colored', [PageController::class, 'colored'])->name('admin.icons.colored');
    Route::get('/dripicons', [PageController::class, 'dripicons'])->name('admin.icons.dripicons');
    Route::get('/materialdesign', [PageController::class, 'materialdesign'])->name('admin.icons.materialdesign');
    Route::get('/fontawesome', [PageController::class, 'fontawesome'])->name('admin.icons.fontawesome');
    Route::get('/feather', [PageController::class, 'feather'])->name('admin.icons.feather');
    Route::get('/simple-line', [PageController::class, 'simpleline'])->name('admin.icons.simple-line');
    Route::get('/flags', [PageController::class, 'flags'])->name('admin.icons.flags');
    Route::get('/file', [PageController::class, 'file'])->name('admin.icons.file');
    Route::get('/pe7', [PageController::class, 'pe7'])->name('admin.icons.pe7');
    Route::get('/typicons', [PageController::class, 'typicons'])->name('admin.icons.typicons');
});

Route::prefix('graphs')->group(function(){
    Route::get('/flot', [PageController::class, 'flot'])->name('admin.graphs.flot');
    Route::get('/morris', [PageController::class, 'morris'])->name('admin.graphs.morris');
    Route::get('/google', [PageController::class, 'google'])->name('admin.graphs.google');
    Route::get('/echart', [PageController::class, 'echart'])->name('admin.graphs.echart');
    Route::get('/chartist', [PageController::class, 'chartist'])->name('admin.graphs.chartist');
    Route::get('/chartjs', [PageController::class, 'chartjs'])->name('admin.graphs.chartjs');
    Route::get('/c3', [PageController::class, 'c3'])->name('admin.graphs.c3');
    Route::get('/sparkline', [PageController::class, 'sparkline'])->name('admin.graphs.sparkline');
    Route::get('/knob', [PageController::class, 'knob'])->name('admin.graphs.knob');
});

Route::prefix('form')->group(function(){
    Route::get('/elements', [FormController::class, 'elements'])->name('admin.form.elements');
    Route::get('/advanced', [FormController::class, 'advanced'])->name('admin.form.advanced');
    Route::get('/layouts', [FormController::class, 'layouts'])->name('admin.form.layouts');
    Route::get('/validation', [FormController::class, 'validation'])->name('admin.form.validation');
    Route::get('/pickers', [FormController::class, 'pickers'])->name('admin.form.pickers');
    Route::get('/wizard', [FormController::class, 'wizard'])->name('admin.form.wizard');
    Route::get('/mask', [FormController::class, 'mask'])->name('admin.form.mask');
    Route::get('/summernote', [FormController::class, 'summernote'])->name('admin.form.summernote');
    Route::get('/quilljs', [FormController::class, 'quilljs'])->name('admin.form.quilljs');
    Route::get('/typeahead', [FormController::class, 'typeahead'])->name('admin.form.typeahead');
    Route::get('/editable', [FormController::class, 'editable'])->name('admin.form.editable');
    Route::get('/uploads', [FormController::class, 'uploads'])->name('admin.form.uploads');
});

Route::prefix('tables')->group(function(){
    Route::get('/basic',[TableController::class, 'basic'])->name('admin.tables.basic');
    Route::get('/layouts',[TableController::class, 'layouts'])->name('admin.tables.layouts');
    Route::get('/datatable',[TableController::class, 'datatable'])->name('admin.tables.datatable');
    Route::get('/footables',[TableController::class, 'footables'])->name('admin.tables.footables');
    Route::get('/responsive',[TableController::class, 'responsive'])->name('admin.tables.responsive');
    Route::get('/tablesaw',[TableController::class, 'tablesaw'])->name('admin.tables.tablesaw');
    Route::get('/editable',[TableController::class, 'editable'])->name('admin.tables.editable');
});

Route::prefix('maps')->group(function(){
    Route::get('/google',[MapsController::class, 'google'])->name('admin.maps.google');
    Route::get('/vector',[MapsController::class, 'vector'])->name('admin.maps.vector');
    Route::get('/mapael',[MapsController::class, 'mapael'])->name('admin.maps.mapael');
});
