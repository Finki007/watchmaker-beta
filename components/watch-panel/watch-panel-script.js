/// <reference path="../../typings/jquery/jquery.d.ts"/>
$(document).ready(function () {
	setInterval(function () {
		var dt = new Date();
		$(".Layer1").attr('style', "background-color: red; height: " + (dt.getSeconds() + "px;").replace("\"", ""));
	}, 1000);
});