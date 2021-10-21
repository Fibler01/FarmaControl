<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/cadastroprodutos', 'ProdutoController@getProduto')->name('ProdutoController@getProduto');
Route::post('/cadastroprodutos', 'ProdutoController@cadastraProduto')->name('ProdutoController@cadastraProduto');

Route::get('/alterarprodutos', 'AlterarProdutosController@getAlterarProdutos')->name('AlterarProdutosController@getAlterarProdutos');
Route::post('/alterarprodutos', 'AlterarProdutosController@AlterarProdutos')->name('AlterarProdutosController@AlterarProdutos');

Route::get('/entradaprodutos', 'EntradaProdutosController@getEntradaProdutos')->name('EntradaProdutosController@getEntradaProdutos');
Route::post('/entradaprodutos', 'EntradaProdutosController@EntradaProdutos')->name('EntradaProdutosController@EntradaProdutos');

Route::get('/fornecedor', 'FornecedorController@getFornecedor')->name('FornecedorController@getFornecedor');
Route::post('/fornecedor', 'FornecedorController@cadastraFornecedor')->name('FornecedorController@cadastraFornecedor');

Route::get('/laboratorio', 'LaboratorioController@getLaboratorio')->name('LaboratorioController@getLaboratorio');
Route::post('/laboratorio', 'LaboratorioController@cadastraLab')->name('LaboratorioController@cadastraLab');

Route::get('/cliente', 'ClienteController@getCliente')->name('ClienteController@getCliente');
Route::post('/cliente', 'ClienteController@cadastraCliente')->name('ClienteController@cadastraCliente');

Route::get('/pesquisarprodutos', 'PesquisarProdutosController@getPesquisa')->name('PesquisarProdutosController@getPesquisa');
Route::post('/pesquisarprodutos', 'PesquisarProdutosController@getPesquisa')->name('PesquisarProdutosController@getPesquisa');

Route::get('/pesquisarfornecedores', 'PesquisarFornecedoresController@getPesquisa')->name('PesquisarFornecedoresController@getPesquisa');
Route::post('/pesquisarfornecedores', 'PesquisarFornecedoresController@getPesquisa')->name('PesquisarFornecedoresController@getPesquisa');

Route::get('/pesquisarcliente', 'PesquisarClienteController@getPesquisa')->name('PesquisarClienteController@getPesquisa');
Route::post('/pesquisarcliente', 'PesquisarClienteController@getPesquisa')->name('PesquisarClienteController@getPesquisa');

Route::get('/pesquisarlaboratorio', 'PesquisarLaboratorioController@getPesquisa')->name('PesquisarLaboratorioController@getPesquisa');
Route::post('/pesquisarlaboratorio', 'PesquisarLaboratorioController@getPesquisa')->name('PesquisarLaboratorioController@getPesquisa');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
