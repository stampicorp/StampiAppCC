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
//**** relation OneToOne*************************
// Route::get('/', function () {
   
//  $user = factory('App\User')->create();
// 	$user->phone()->create([
//       'phone_number'=>'05 94 20 20 20',
// 	]);

// });

//************************************************

//**** relation OneToMany*************************
//Route::get('/', function () {
    //recuperer les utilisateur avec leur postes
   	//$user = App\User::first();


    //voir a qui appartient un poste
   	//$post = App\Poste::first();

	// $user->postes()->create([

	// 	'title' => 'stagiaire 2',
	// 	'content' => 'du contenu 2'
	// ]);
	//dd($post->user);
	//dd($user->postes);
//});

//************************************************


//**** relation ManyToMany*************************
	Route::get('/', function () {


	  
	});
//************************************************

