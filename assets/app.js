import './styles/app.scss';

import 'bootstrap';

const $ = require('jquery');

require('bootstrap');

require('bootstrap/js/dist/popover');

$(document).ready(function () {
	$('[data-toggle="popover"]').popover();
});
