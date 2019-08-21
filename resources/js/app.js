/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import 'jquery-ui/ui/widgets/autocomplete.js';

$(document).ready(function () {
    $('.delete-address').on('click', function (e) {
        e.preventDefault();
        var item = $(e.target).closest('.item');
        var id = $(this).data("id");
        var token = $(this).data("token");
        $.ajax(
            {
                url: "address/"+id,
                type: 'DELETE',
                dataType: "JSON",
                data: {
                    "id": id,
                    "_method": 'DELETE',
                    "_token": token,
                },
                success: function (responce)
                {
                    if (responce && responce.result) {
                        $(item).hide();
                    }
                }
            });
    });
});
