window.onscroll = function() {
    var scrolled = window.pageYOffset || document.documentElement.scrollTop;
    var width = document.getElementById('categories').offsetWidth;
    if (scrolled > 310){
        document.getElementById('categories').className = 'list-group categoriesFixed';
        document.getElementById('categories').style.width = width  + "px";
    }else{
        document.getElementById('categories').className = 'list-group';
        document.getElementById('categories').style.width ='auto';
    }
}