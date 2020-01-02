var ContactUs = function () {
    var contactus = function () {
        var form = $('#contactus');
        var rules = {
            name: {required: true},
            email: {required: true, email: true},
            msg: {required: true},
        };
       

        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form, true);
        });
    }
    return{
        init: function () {
            contactus();
        },
    }
}();