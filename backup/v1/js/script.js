/* Author: 

*/

$.getJSON("http://twitter.com/statuses/user_timeline/diegonavon.json?callback=?", function(data) {
     $("#twitter_last_tweet").html(data[0].text);
});






















