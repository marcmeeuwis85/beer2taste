
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import $ from 'jquery';
window.jQuery = $;
window.$ = $;
window.sortable = require('jquery-sortable');
require('jquery-ui');
import 'jquery-ui-dist/jquery-ui';
import 'jquery-ui/ui/widgets/slider.js';
require('jquery-ui-touch-punch/jquery.ui.touch-punch.js');
require('chart.js');
require('./bapp.js');
