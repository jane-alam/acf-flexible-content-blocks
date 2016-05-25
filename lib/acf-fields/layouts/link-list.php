<?php

/**
 *
 * Layout: Link List
 *
 * @author Michael W. Delaney
 * @since 1.0
 * 
 * List of links with titles and content
 */
$layouts_array[] =
    array ( 'order' => '60',
	'layout' =>  array (
        'key' => $layout,
		'name' => 'link_list',
		'label' => 'Link List',
		'display' => 'block',
		'sub_fields' => array (
            // Titles
            $fields_array['title'],
            $fields_array['navigation_title'],

            // Content tab
            $fields_array['tab_content'],
            $fields_array['content'],

            // Background tab
            $fields_array['tab_background'],
            $fields_array['background_image'],
            $fields_array['background_color'],

            // Tab Endpoint
            $fields_array['tab_endpoint'],

            // Call to Action
            $fields_array['cta_checkbox'],
            $fields_array['cta_placeholder'],
            $fields_array['cta_text'],
            $fields_array['cta_link'],
            $fields_array['cta_type'],

			array (
				'key' => 'field_573e0e351c7f6',
				'label' => 'Linked Items',
				'name' => 'linked_items',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => 'acf-media',
					'id' => '',
				),
				'collapsed' => 'field_573e0e481c7f7',
				'min' => '',
				'max' => '',
				'layout' => 'block',
				'button_label' => 'Add Item',
				'sub_fields' => array (
					array (
						'key' => 'field_573e0e481c7f7',
						'label' => 'Title',
						'name' => 'title',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
						'readonly' => 0,
						'disabled' => 0,
					),
					array (
						'key' => 'field_573e14e30b871',
						'label' => 'Content',
						'name' => '',
						'type' => 'tab',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'placement' => 'top',
						'endpoint' => 0,
					),
					array (
						'key' => 'field_573e15975480d',
						'label' => 'Content Source',
						'name' => 'content_source',
						'type' => 'radio',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'choices' => array (
							'excerpt' => 'Excerpt',
							'manual' => 'Manual Entry',
						),
						'other_choice' => 0,
						'save_other_choice' => 0,
						'default_value' => '',
						'layout' => 'horizontal',
					),
					array (
						'key' => 'field_573e15c95480e',
						'label' => 'Excerpt Placeholder',
						'name' => '',
						'type' => 'message',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => array (
							array (
								array (
									'field' => 'field_573e15975480d',
									'operator' => '==',
									'value' => 'excerpt',
								),
							),
						),
						'wrapper' => array (
							'width' => '',
							'class' => 'acf-media',
							'id' => '',
						),
						'message' => 'Content will be drawn from the linked item\'s excerpt.',
						'new_lines' => 'wpautop',
						'esc_html' => 0,
					),
					array (
						'key' => 'field_573e0e541c7f8',
						'label' => 'Content',
						'name' => 'content',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => array (
							array (
								array (
									'field' => 'field_573e15975480d',
									'operator' => '==',
									'value' => 'manual',
								),
							),
						),
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'full',
						'media_upload' => 1,
					),
					array (
						'key' => 'field_573e127e0b870',
						'label' => 'Background',
						'name' => '',
						'type' => 'tab',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'placement' => 'top',
						'endpoint' => 0,
					),
					array (
						'key' => 'field_573e14f30b872',
						'label' => 'Background Image',
						'name' => 'background_image',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => 'acf-media',
							'id' => '',
						),
						'return_format' => 'array',
						'preview_size' => 'thumbnail',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
					),
					array (
						'key' => 'field_573e15020b873',
						'label' => 'Background Color',
						'name' => 'background_color',
						'type' => 'color_picker',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
					),
					array (
						'key' => 'field_573e38faad25c',
						'label' => '',
						'name' => '',
						'type' => 'tab',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'placement' => 'top',
						'endpoint' => 1,
					),
					array (
						'key' => 'field_573e0e7f1c7f9',
						'label' => 'Link',
						'name' => 'link',
						'type' => 'post_object',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => 50,
							'class' => '',
							'id' => '',
						),
						'post_type' => array (
						),
						'taxonomy' => array (
						),
						'allow_null' => 0,
						'multiple' => 0,
						'return_format' => 'object',
						'ui' => 1,
					),
					array (
						'key' => 'field_573e15130b874',
						'label' => 'Link Text',
						'name' => 'link_text',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => 50,
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
						'readonly' => 0,
						'disabled' => 0,
					),
				),
			),

            // Background tab
            $fields_array['tab_background'],
            $fields_array['background_image'],
            $fields_array['background_color'],


            // Tab Endpoint
            $fields_array['tab_endpoint'],

            // Call to Action
            $fields_array['cta_checkbox'],
            $fields_array['cta_placeholder'],
            $fields_array['cta_text'],
            $fields_array['cta_link'],
            $fields_array['cta_type']
		)
    )
);