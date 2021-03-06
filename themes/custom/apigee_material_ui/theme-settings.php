<?php

/**
 * Copyright 2018 Google Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2 as published by the
 * Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public
 * License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc., 51
 * Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 */

/**
 * @file
 * Theme settings file.
 */

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function apigee_material_ui_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {

  // Vertical tabs.
  $form['material'] = [
    '#type' => 'vertical_tabs',
    '#prefix' => '<h2><small>' . t('Material UI Settings') . '</small></h2>',
    '#weight' => -10,
  ];
  // Navbar.
  $form['navbar'] = [
    '#type' => 'details',
    '#title' => t('Navbar'),
    '#group' => 'material',
  ];
  $form['navbar']['fixed'] = [
    '#type' => 'details',
    '#title' => t('Fixed Navbar'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  ];
  $form['navbar']['fixed']['material_ui_navbar_fixed'] = [
    '#type' => 'checkbox',
    '#title' => t('Use Fixed navbar'),
    '#default_value' => theme_get_setting('material_ui_navbar_fixed'),
    '#description' => t('Select this checkbox to make the navbar always show on top'),
  ];
  // Layout.
  $form['layout'] = [
    '#type' => 'details',
    '#title' => t('Layout'),
    '#group' => 'material',
  ];
  $form['layout']['container'] = [
    '#type' => 'details',
    '#title' => t('Container'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  ];
  $form['layout']['container']['material_ui_container'] = [
    '#type' => 'checkbox',
    '#title' => t('Contain content instead of full width'),
    '#default_value' => theme_get_setting('material_ui_container'),
    '#description' => t('Set the content area to be contained by checking this box'),
  ];

  // Setting colors.
  $form['colors'] = [
    '#type' => 'details',
    '#title' => t('Colors'),
    '#group' => 'material',
  ];
  $form['colors']['color_options'] = [
    '#type' => 'details',
    '#title' => t('Color Options'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  ];
  $form['colors']['color_options']['material_ui_colors'] = [
    '#type' => 'select',
    '#title' => t('Choose primary colors'),
    '#default_value' => theme_get_setting('material_ui_colors'),
    '#description' => t('Choose options here to set primary colors for your portal'),
    '#empty_option' => t('Default'),
    '#options' => [
      'deep-orange' => t('Apigee Colors'),
      'blue accent-2' => t('Blue'),
      'green' => t('Green'),
      'grey darken-4' => t('Dark'),
      'white' => t('White'),
      'transparent' => t('Transparent'),
    ],
  ];

}
