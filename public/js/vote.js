window.onload = function() {

    function upvote(img) {
        var id = document.getElementById(img).value;
        id.src.toggle('{{asset(\'assets\\images\\upvote_icons\\cow_orange.png\')}}')
    }

    function downvote(img) {
        var id = document.getElementById(img).value;
        id.src.toggle('{{asset(\'assets\\images\\upvote_icons\\burger_blue.png\')}}');
    }
}
