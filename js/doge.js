$(document).ready(function(){
    if(location.search == '?doge'){
        $('body').addClass('doge');
        $('.datface img').attr('src', '/img/doge.jpg');
        $('#wow h1').html('Erwan Dogeville');
        var dev = $('#wow h2').html().replace('Développeur Web', 'Développeur Wow!');
        $('#wow h2').html(dev);
    }
});