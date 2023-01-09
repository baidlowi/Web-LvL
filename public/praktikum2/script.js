function formjs() {
    var name = document.formval.user;
    
    var letters = /^[A-Za-z]+$/;
    if(name.value.match(letters)) {
        return true;
    }
    else {
        window.alert('Username must have alphabet characters only');
        name.focus();
        return false;
    }
}
$(function() {
    $("input[name='zipcode']").on('input', function(e) {
        $(this).val($(this).val().replace(/[^0-9]/g, ''));
    });
});