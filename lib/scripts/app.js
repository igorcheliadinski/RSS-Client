/**
 * Created by igorcheliadinski on 5/21/15.
 */

requirejs.config({
    paths: {
        'jquery': '../../configs/bower_components/jquery/dist/jquery.min'
    }
});

requirejs(['jquery', 'domworker', 'requester'], function($, DOMWorker, Requester) {
    $('#get-rss-form').on('submit', function(event) {
        event.preventDefault();
        var data = DOMWorker.getUrl(),
            response = Requester.getResponse('../../classes/controllers/facade.php', data);
        DOMWorker.appendRSS(response);
    });
});