<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;



Container::make('post_meta', 'Заголовок. Адрес, почта, телефон 1, телефон 2')
->show_on_page('36')
->add_fields(array(
 Field::make('text', 'addres', 'Адрес'),
 Field::make('text', 'email', 'Электронная почта'),
 Field::make('text', 'phone1', 'Телефон 1'),
 Field::make('text', 'phone2', 'Телефон 2'),
 
));


Container::make('post_meta', 'Слайдеры')
->show_on_page('36')
->add_fields(array( 
 Field::make( 'complex', 'slider', 'Слайдер' )
 ->set_max( 5 )
 ->set_duplicate_groups_allowed( true )
	->add_fields( array(
		Field::make( 'image', 'photo', 'Изображение слайда' ),
  Field::make( 'text', 'title', 'Заголовок слайда' )->set_width( 25 ),
		Field::make( 'text', 'description', 'Описание слайда' )->set_width( 25 ),
		Field::make( 'text', 'btn', 'Ссылка на кнопке слайда' )->set_width( 25 ),

	) )
));


Container::make('post_meta', 'Категории')
->show_on_page('36')
->add_fields(array(
 Field::make('text', 'cat_title', 'Заголовок категории'), 
 Field::make( 'complex', 'categories', 'Блоки категорий' ) 
 ->set_duplicate_groups_allowed( true )
	->add_fields( array(
		Field::make( 'image', 'photo_1', 'Изображение категории' ),
  Field::make( 'text', 'title_1', 'Заголовок категории' ),		
		Field::make( 'text', 'btn_1', 'Ссылка на кнопке слайда' )->set_width( 25 ),
		Field::make( 'text', 'btn_text', 'Текст на кнопке слайда' )->set_width( 25 ),

	) )
));



Container::make('post_meta', 'Выгоды')
->show_on_page('36')
->add_fields(array(	
	Field::make('text', 'reason_title', 'Заголовок выгоды'),
 Field::make( 'complex', 'features', 'Выгода' ) 
 ->set_duplicate_groups_allowed( true )
	->add_fields( array(	  
		Field::make( 'text', 'descr', 'Описание выгоды' )->set_width( 80 ),
  

	) )
));

Container::make('post_meta', 'Популярная мебель')
->show_on_page('36')
->add_fields(array(	
	Field::make('text', 'popular_title', 'Заголовок '),
 Field::make( 'complex', 'popular_furniture', 'Мебель' ) 
 ->set_duplicate_groups_allowed( true )
	
));


