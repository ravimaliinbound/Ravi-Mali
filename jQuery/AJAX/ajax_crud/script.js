//-----Insert Data---------//

function insertEmployee(e) {
    var form = $('#form')[0];
    var formData = new FormData(form);
    validate();
    if (!validate()) {
        console.log("Hello Its failed")
        // $("#save").attr("data-bs-dismiss", "modal")
        return false;
    }
    else {
        console.log("fvmbdfvh") 
        var page = $("#page").val();
        formData.append('action', 'insert');
        $.ajax({
            url: "action.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                $("#save").prop("data-bs-dismiss", "modal")
                $("#msg").html(data);
                setTimeout(function () {
                    $('.msg').fadeOut('slow');
                }, 3000);
                searchFilter(page);
                $('#form')[0].reset();
            }
        });
    }

}

function validate() {


    var nameReg = /^[A-Za-z]+$/;
    var emailReg = /^[a-zA-Z0-9.]+\@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;

    var name = $('#name').val();
    var email = $('#email').val();
    var city = $('#city').val();
    var image = $('#image').val();



    $('.error').hide();

    if (name == "") {
        $("#errname").text("Name field is required...!");
    }
    else if (!nameReg.test(name)) {
        $("#errname").text("Name is invalid...!");
    }

    if (!$("input[name='gender']:checked").val()) {
        $("#errgender").text("Gender field is required...!");
    }

    if (email == "") {
        $("#erremail").text("Email field is required...!");
    }
    else if (!emailReg.test(email)) {
        $("#erremail").text("Enter a valid email...!");
    }

    if (!$("input[name='language[]']:checked").val()) {
        $("#errlanguage").text("Language field is required...!");
    }

    if (city == "") {
        $("#errcity").text("City field is required...!");
    }
    if (image == "") {
        $("#errimage").text("Image field is required...!");
    }
}


//----------Fetch Data For Edit------//

function editUser(id, page) {
    $.ajax({
        url: "action.php",
        type: "POST",
        data: { "id": id, action: "edit" },
        success: function (data) {
            $('#edit-form')[0].reset();
            var allData = JSON.parse(data);
            $("#userid").val(allData.id);
            $("#page").val(page);
            $("#page").val(page);
            $("#edit-name").val(allData.name);
            $("#edit-email").val(allData.email);
            $('input[name="gender"][value=' + allData.gender + '].gender').prop('checked', true);
            var language = allData.language.toString();
            if (language.includes("Hindi")) {
                $('input[name="language[]"][value=' + 'Hindi' + '].language').prop('checked', true);
            } else {
                $('input[name="language[]"][value=' + 'Hindi' + '].language').prop('checked', false);
            }
            if (language.includes("English")) {
                $('input[name="language[]"][value=' + 'English' + '].language').prop('checked', true);
            } else {
                $('input[name="language[]"][value=' + 'English' + '].language').prop('checked', false);
            }
            if (language.includes("Gujrati")) {
                $('input[name="language[]"][value=' + 'Gujrati' + '].language').prop('checked', true);
            } else {
                $('input[name="language[]"][value=' + 'Gujrati' + '].language').prop('checked', false);
            }
            $("#edit-city").val(allData.city);
        }
    });
    $("#editEmployee").modal("show");
}

//---------------Delete Data---------------//
function deleteUser(id, page, limit) {
    var conf = confirm("Are You Sure..?");
    if (conf == true) {
        $.ajax({
            url: "action.php",
            type: "POST",
            data: { "id": id, "page": page, "limit": limit, "action": "delete" },
            success: function (response) {
                var data = JSON.parse(response)
                $("#msg").html(data.success);
                setTimeout(function () {
                    $('.msg').fadeOut('slow');
                }, 3000);
                searchFilter(data.new_page, limit);
            }
        });
    }
}
//-------------------Update Data--------------------//
function editEmployee() {

    var form = $('#edit-form')[0];
    var formData = new FormData(form);
    var id = $("#userid").val();
    var page = $("#page").val();
    formData.append('action', 'update');
    formData.append('id', id);
    formData.append('page', page);
    $.ajax({
        url: "action.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            $("#msg").html(data);
            setTimeout(function () {
                $('.msg').fadeOut('slow');
            }, 3000);
            searchFilter(page);
            $('#form')[0].reset();
        }
    });
}

//-------------Show Data with Filter And without filter------------//

function searchFilter(page = 1, limit = 5, column = 'id', order = 'asc') {
    var keywords = $('#keywords').val();
    var gender = $('#genderfilter').val();
    var language = $('#languagefilter').val();
    var city = $('#cityfilter').val();
    var limit = $('#limit').val();
    if (order == 'desc') {
        arrow = '&nbsp;<i class="fa-solid fa-arrow-down"></i>';
    }
    else {
        arrow = '&nbsp;<i class="fa-solid fa-arrow-up"></i>';
    }
    $.ajax({
        type: 'POST',
        url: 'action.php',
        data: {
            "keywords": keywords, "gender": gender, "language": language, "city": city, "filter": "filter",
            "limit": limit, "page": page, "column": column, "order": order
        },
        success: function (response) {
            var data = JSON.parse(response);
            $("#show_records").html(data.table);
            $("#pagination").html(data.pagination);
            $("#page").val(data.page);
            $('.column').append(arrow);
        }
    });
}

//----------Document.ready--------------------//

$(document).ready(function () {
    searchFilter();
    $(".remove-btn").click(function () {
        $('.remove').text("");
        $('#form')[0].reset();
    });

    //---------- For Sorting--------------//

    $(document).on("click", ".column", function () {
        var column = $(this).attr("id");
        var page = $(this).attr("value");
        var order = $(this).data("order");
        var limit = $("#limit").val();
        searchFilter(page, limit, column, order);
    });

    //------------------->> Validation <<----------------------//

    $("input").blur(function (e) {
        var isValid = true;
        var inp_id = $(this).attr('id');
        if ($(this).val() == "") {
            $("#err" + inp_id).text(inp_id + " field is required...!");
        }
        if (!isValid) {
            e.preventDefault();
        }
    });
    $("input").focus(function () {
        var inp_id = $(this).attr('id');
        if ($(this).val() == "") {
            $("#err" + inp_id).text("");
        }
    });

    //-----------Name Validation------------//
    $("#name").blur(function (e) {
        var isValid = true;
        var name_val = $("#name").val().trim();
        var namePattern = /^[a-zA-Z ]{3,15}$/;
        if (namePattern.test(name_val)) {
            $("#errname").text("");
        }
        else {
            $("#errname").text("Minimum 3 And Maximum 15 Characters Allowed...!");
            isValid = false;
        }
        if (name_val == "") {
            $("#errname").text("Only spaces are not allowed...!");
        }
        if ($("#name").val() == "") {
            $("#errname").text("Name field is required...!");
            isValid = false;
        }
        if (!isValid) {
            e.preventDefault();
        }
    });

    //------------Email Validation----------------//

    $("#email").blur(function (e) {
        var isValid = true;
        var mail = $("#email").val();
        var emailPattern = /^[a-zA-Z0-9.]+\@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
        var a = emailPattern.test(mail);
        if (a == true) {
            $("#erremail").text("");
        }
        else {
            $("#erremail").text("Enter A Valid Email...!");
            isValid = false;
        }
        if ($("#email").val() == "") {
            $("#erremail").text("Email field is required...!");
            isValid = false;
        }
        if (!isValid) {
            e.preventDefault();
        }
    });

    //--------------Gender Validation---------------//

    $("input[name='gender']").blur(function (e) {
        var isValid = true;
        if (!$("input[name='gender']:checked").val()) {
            $("#errgender").text("Gender field is required...!");
            isValid = false;
        }
        if (!isValid) {
            e.preventDefault();
        }
    });
    $("input[name='gender']").change(function () {
        $("#errgender").text("");
    });

    //----------------Language Validation------------//

    $("input[name='language[]']").blur(function (e) {
        var isValid = true;
        if (!$("input[name='language[]']:checked").val()) {
            $("#errlanguage").text("Language field is required...!");
            isValid = false;
        }
        if (!isValid) {
            e.preventDefault();
        }
    });
    $("input[name='language[]']").change(function (e) {
        var isValid = true;
        if ($(this).val() == "") {
            $("#errlanguage").text("Language field is required...!");
            isValid = false;
        } else {
            $("#errlanguage").text("");
        }
        if (!$("input[name='language[]']:checked").val()) {
            $("#errlanguage").text("Language field is required...!");
            isValid = false;
        }
        if (!isValid) {
            e.preventDefault();
        }
    });

    //----------------------City Validation---------------//

    $("#city").blur(function (e) {
        var isValid = true;
        if ($(this).val() == "") {
            $("#errcity").text("City field is required...!");
            isValid = false;
        }
        if (!isValid) {
            e.preventDefault();
        }
    });

    $("#city").change(function (e) {
        var isValid = true;
        if ($(this).val() == "") {
            $("#errcity").text("City field is required...!");
            isValid = false;
        } else {
            $("#errcity").text("");
        }
        if (!isValid) {
            e.preventDefault();
        }
    });

    //-------------------Image Validation------------------//

    $("#image").blur(function (e) {
        var isValid = true;
        var image = $("#image").val();
        var imgPattern = /\.(jpg|JPG|jpeg|JPEG|png|PNG|gif|PNG)$/;

        if ($("#image").val() == "") {
            $("#errimage").text("Image field is required...!");
            isValid = false;

        }
        else if (!imgPattern.test(image)) {
            $("#errimage").text("Only JPG, JPEG, PNG and GIF images allowed");
            isValid = false;

        }
        else {
            $("#errimage").text("");
        }
        if (!isValid) {
            e.preventDefault();
        }
    });
    $("#image").change(function (e) {
        var isValid = true;
        var image = $("#image").val();
        var imgPattern = /\.(jpg|JPG|jpeg|JPEG|png|PNG|gif|PNG)$/;
        if ($("#image").val() == "") {
            $("#errimage").text("Image field is required...!");
            isValid = false;
        }
        else if (!imgPattern.test(image)) {
            $("#errimage").text("Only JPG, JPEG, PNG and GIF images allowed");
            isValid = false;
        }
        else {
            $("#errimage").text("");
        }
        if (!isValid) {
            e.preventDefault();
        }
    });

});

