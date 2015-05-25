/**
 * Created by igorcheliadinski on 5/24/15.
 */

define('requester', ['jquery'], function($) {

    var createPostReq = function(url, data) {
        return $.ajax({
            url: url,
            method: 'post',
            data: {
                rss: data
            },
            async: false
        }).responseText;
    };

    return {
        getResponse: createPostReq
    };
});