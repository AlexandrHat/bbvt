<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make('post_meta', 'Настройки записи')
->show_on_page('18')
->add_fields(array(
 Field::make('text', 'mood', 'Настроение'),
 Field::make('text', 'impression', 'Впечатление'),
));


