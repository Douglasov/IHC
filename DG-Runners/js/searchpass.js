function save(){

    window.localStorage.setItem('searchs', $('#searchs').val());

}
function load(){

    window.localStorage.getItem('searchs');

}
function erase(){
    window.localStorage.removeItem('searchs');
    
}

