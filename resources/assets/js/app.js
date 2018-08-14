
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
// const app = new Vue({
//     el: '#app'
// });

$('#send-question').click(function(){

    $.post('/send.php', {
        'name': $('#qname').val(),
        'phone': $('#qphone').val(),
        'question': $('#qquestion').val(),
    })
    .done(function(data) {
        if (data.status && data.status == 'success')
            $('#form-question').html("<div style='text-align: center; padding: 100px; font-size: 1.2em; color: green; font-weight: 500;'>Ваше сообшение отправлено</div>");
        else
            $('#form-question').html("<div style='text-align: center; padding: 100px; font-size: 1.2em; color: red; font-weight: 500;'>Ваше сообшение не отправлено</div>");
    })
    .fail(function() {
        $('#form-question').html("<div style='text-align: center; padding: 100px; font-size: 1.2em; color: red; font-weight: 500;'>Ваше сообшение не отправлено</div>");
    })

});