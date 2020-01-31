function upvote(img) {
    img.src.toggle('{{asset(\'assets\\images\\upvote_icons\\cow_orange.png\')}}');
}
function downvote(img) {
    img.src.toggle('{{asset(\'assets\\images\\upvote_icons\\burger_blue.png\')}}');
}
