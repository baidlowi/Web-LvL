function formvalidation(){
    var user = document.formval.name;

    var username = /^[A-Za-z]+$/;
    if(user.value.match(username)) {
        return true;
    }
    else {
        window.alert("Username Only For Letters");
        user.focus()
        return false;
    }
}
