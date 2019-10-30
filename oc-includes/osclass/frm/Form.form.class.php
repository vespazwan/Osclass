<?php
if ( ! defined( 'ABS_PATH' ) ) { exit( 'ABS_PATH is not loaded. Direct access is not allowed.' ); }

/*
 * Copyright 2014 Osclass
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

	/**
	 * Class Form
	 */
	class Form {
		/**
		 * @param $name
		 * @param $items
		 * @param $fld_key
		 * @param $fld_name
		 * @param $default_item
		 * @param $id
		 */
		protected static function generic_select( $name , $items , $fld_key , $fld_name , $default_item , $id, $attributes = '' ) {
    		$name = osc_esc_html($name);
            echo '<select name="' . $name . '" id="' . preg_replace('|([^_a-zA-Z0-9-]+)|', '', $name) . '" '.$attributes.'>';
	        if ( isset( $default_item ) ) {
		        echo '<option value="">' . $default_item . '</option>';
	        }
            foreach($items as $i) {
	            if ( isset( $fld_key ) && isset( $fld_name ) ) {
		            echo '<option value="' . osc_esc_html( $i[ $fld_key ] ) . '"' . ( ( $id == $i[ $fld_key ] ) ? ' selected="selected"' : '' ) . '>' . $i[ $fld_name ] . '</option>';
	            }
            }
            echo '</select>';
        }

		/**
		 * @param      $name
		 * @param      $value
		 * @param null $maxLength
		 * @param bool $readOnly
		 * @param bool $autocomplete
		 */
		protected static function generic_input_text( $name , $value , $maxLength = null , $readOnly = false , $autocomplete = true, $attributes = '' ) {
            $name = osc_esc_html($name);
            echo '<input id="' . preg_replace('|([^_a-zA-Z0-9-]+)|', '', $name) . '" type="text" name="' . $name . '" value="' . osc_esc_html(htmlentities( $value, ENT_COMPAT, 'UTF-8' )) . '"';
	        if ( isset( $maxLength ) ) {
		        echo ' maxlength="' . osc_esc_html( $maxLength ) . '"';
	        }
	        if ( ! $autocomplete ) {
		        echo ' autocomplete="off"';
	        }
	        if ( $readOnly ) {
		        echo ' disabled="disabled" readonly="readonly"';
	        }
			if ( $attributes != '' ) {
				echo ' '.$attributes;
			}

            echo ' />';
        }

		/**
		 * @param      $name
		 * @param      $value
		 * @param null $maxLength
		 * @param bool $readOnly
		 */
		protected static function generic_password( $name , $value , $maxLength = null , $readOnly = false, $attributes = '' ) {
            $name = osc_esc_html($name);
            echo '<input id="' . preg_replace('|([^_a-zA-Z0-9-]+)|', '', $name) . '" type="password" name="' . $name . '" value="' . osc_esc_html(htmlentities( $value, ENT_COMPAT, 'UTF-8' )) . '"';
	        if ( isset( $maxLength ) ) {
		        echo ' maxlength="' . osc_esc_html( $maxLength ) . '"';
	        }
	        if ( $readOnly ) {
		        echo ' disabled="disabled" readonly="readonly"';
	        }
			if ( $attributes != '' ) {
				echo ' '.$attributes;
			}

            echo ' autocomplete="off" />';
        }

		/**
		 * @param $name
		 * @param $value
		 */
		protected static function generic_input_hidden( $name , $value, $attributes = '' ) {
            $name = osc_esc_html($name);
            echo '<input id="' . preg_replace('|([^_a-zA-Z0-9-]+)|', '', $name) . '" type="hidden" name="' . $name . '" value="' . osc_esc_html(htmlentities( $value, ENT_COMPAT, 'UTF-8' )) . '" '.$attributes.' />';
        }

		/**
		 * @param      $name
		 * @param      $value
		 * @param bool $checked
		 */
		protected static function generic_input_checkbox( $name , $value , $checked = false, $attributes = '' ) {
            $name = osc_esc_html($name);
            echo '<input id="' . preg_replace('|([^_a-zA-Z0-9-]+)|', '', $name) . '" type="checkbox" name="' . $name . '" value="' . osc_esc_html(htmlentities( $value, ENT_COMPAT, 'UTF-8' )) . '"';
	        if ( $checked ) {
		        echo ' checked="checked"';
	        }
			if ( $attributes != '' ) {
				echo ' '.$attributes;
			}

            echo ' />';
        }

		/**
		 * @param $name
		 * @param $value
		 */
		protected static function generic_textarea( $name , $value, $attributes = '' ) {
            $name = osc_esc_html($name);
            echo '<textarea id="' . preg_replace('|([^_a-zA-Z0-9-]+)|', '', $name) . '" name="' . $name . '" rows="10" '.$attributes.'>' . $value . '</textarea>';
        }

    }
