<?php

if (!defined('ABSPATH')){
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', _('Настройки сайта'))
->add_tab( 'О нас', [
    Field::make('text', 'about1', 'О нас 1'),
    Field::make('text', 'about2', 'О нас 2'),
    Field::make('text', 'about3', 'О нас 3'),
])
->add_tab( 'Игры', [
    Field::make('text', 'game_name1', 'Название игры 1'),
    Field::make('text', 'game_description1', 'Описание игры 1'),
    Field::make('text', 'game_name2', 'Название игры 2'),
    Field::make('text', 'game_description2', 'Описание игры 2'),
    Field::make('text', 'game_name3', 'Название игры 3'),
    Field::make('text', 'game_description3', 'Описание игры 3'),
])
->add_tab( 'Контакты', [
    Field::make('text', 'site_phone', 'Телефон'),
    Field::make('text', 'site_address', 'Адрес'),
    Field::make('text', 'site_mail', 'Почта'),
])
->add_tab( 'Вакансии', [
    Field::make('text', 'vacancy_name1', 'Название вакансии 1'),
    Field::make('text', 'vacancy_description1', 'Описание вакансии 1'),
    Field::make('text', 'vacancy_name2', 'Название вакансии 2'),
    Field::make('text', 'vacancy_description2', 'Описание вакансии 2'),
]);