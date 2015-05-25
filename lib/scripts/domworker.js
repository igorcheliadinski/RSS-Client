/**
 * Created by igorcheliadinski on 5/24/15.
 */

define('domworker', ['jquery'], function($) {
    var getUrl = function() {
            return document.getElementById('rss-link').value;
        },
        getForm = function() {
            return document.getElementById('get-rss-form');
        },
        appendRSS = function(text) {
            var html = $.parseHTML(text);
            $('main').append(html);
        };

    return {
        getUrl: getUrl,
        getForm: getForm,
        appendRSS: appendRSS
    };
});