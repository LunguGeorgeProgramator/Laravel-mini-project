import _ from 'lodash';
import Popper from 'popper.js';
import $ from 'jquery';
import 'bootstrap';
import axios from 'axios';

window._ = _;
window.Popper = Popper;
window.$ = window.jQuery = $;
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}
