<?php

get('/', ['as' => 'main', 'uses' => 'IndexController@index']);
get('projects', ['as' => 'projectList', 'uses' => 'IndexController@projectList']);
get('projects/{slug}', ['as' => 'projectCart', 'uses' => 'IndexController@projectCart']);

/*****************************************************************************************/
get('resumes', ['as' => 'resumeList', 'uses' => 'IndexController@resumeList']);
get('resumes/{slug}', ['as' => 'resumeCart', 'uses' => 'IndexController@resumeCart']);
/*****************************************************************************************/
/*****************************************************************************************/
get('tests', ['as' => 'testList', 'uses' => 'IndexController@testList']);
get('tests/{slug}', ['as' => 'testCart', 'uses' => 'IndexController@testCart']);
/*****************************************************************************************/

get('about-us', ['as' => 'about', 'uses' => 'IndexController@about']);

/*****************************************************************************************/
get('about-me', ['as' => 'aboutme', 'uses' => 'IndexController@aboutme']);
/*****************************************************************************************/
/*****************************************************************************************/
get('contact-me', ['as' => 'contactme', 'uses' => 'IndexController@contactme']);
/*****************************************************************************************/

get('blog', ['as' => 'blog', 'uses' => 'BlogController@index']);
get('blog/{slug}', ['as' => 'blog.record', 'uses' => 'BlogController@cart']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
