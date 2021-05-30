<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Tepanhaky_Theme
 */
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
    Container::make('theme_options', __('Theme Options'))
        ->add_fields(array(
            Field::make('text', 'crb_text', 'Text Field'),
        ));
}

add_action('carbon_fields_register_fields', 'crb_attach_menu_item');
function crb_attach_menu_item()
{

    Container::make('post_meta', 'Detalhes do item')
        ->where('post_type', '=', 'menu-item')
        ->add_fields(array(
            Field::make('text', 'crb_menu_item_number', 'Código')
                ->set_attribute('type', 'number')
                ->set_attribute('step', '1')
                ->set_attribute('min', '1')
                ->set_attribute('max', '99999'),
            Field::make('text', 'crb_menu_item_description', 'Descrição'),
            Field::make('association', 'crb_menu_item_category', 'Categoria')
                ->set_types(array(
                    array(
                        'type' => 'post',
                        'post_type' => 'menu-category',
                    ),
                ))
                ->set_min(1)
                ->set_max(1),
            Field::make('complex', 'crb_menu_item_value_options', 'Opções de tamanho')
                ->add_fields(array(
                    Field::make('text', 'price', 'Preço')
                        ->set_attribute('placeholder', '29,00')
                        ->set_attribute('type', 'number'),
                    Field::make('text', 'quantity', 'Quantidade (Ex. "2 unidades", "10 fatias", "100g")'),
                ))
                ->set_min(1),
            // Field::make('image', 'crb_photo'),
        ));

    //     Field::make( 'text', 'crb_phone_number', __( 'Phone Number' ) )
    // ->set_attribute( 'placeholder', '(***) ***-****' )

    // Container::make('post_meta', __('Book Data'))
    //     ->where('post_type', '=', 'page')
    //     ->add_fields(
    //         Field::make('image', 'crb_photo')
    //     );
}
