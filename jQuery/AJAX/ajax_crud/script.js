//-----Insert Data---------//
function insertEmployee() {
    var form = $('#form')[0];
    var formData = new FormData(form);
    var page = $("#page").val();

    if (!validate()) {
        return false;
    }

    formData.append('action', 'insert');

    $.ajax({
        url: "action.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            $('#addEmployee').modal('hide');
            $("#msg").html(data);
            setTimeout(function () {
                $('.msg').fadeOut('slow');
            }, 3000);
            searchFilter(page);
            $('#form')[0].reset();
        }
    });
}

//------------------ Validation Function ------------------//
function validate(e) {
    let isValid = true;

    // Patterns
    const namePattern = /^[a-zA-Z ]{3,15}$/;
    const emailPattern = /^[a-zA-Z0-9.]+\@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
    const imagePattern = /\.(jpg|jpeg|png|gif)$/i;

    // Input Values
    const name = $('#name').val();
    const names = $('#name').val().trim();
    const email = $('#email').val().trim();
    const city = $('#city').val();
    const image = $('#image').val();

    // Clear previous error messages
    $('.remove').text("");

    // ----------- Name Validation ------------
    if (name === "") {
        $("#errname").text("Name field is required...!");
        isValid = false;
    } else if (names === "") {
        $("#errname").text("Only spaces are not allowed...!");
        isValid = false;
    } else if (!namePattern.test(names)) {
        $("#errname").text("Minimum 3 And Maximum 15 Characters Allowed...!");
        isValid = false;
    }

    // ----------- Gender Validation ------------
    if (!$("input[name='gender']:checked").val()) {
        $("#errgender").text("Gender field is required...!");
        isValid = false;
    }

    // ----------- Email Validation ------------
    if (email === "") {
        $("#erremail").text("Email field is required...!");
        isValid = false;
    } else if (!emailPattern.test(email)) {
        $("#erremail").text("Enter a valid email...!");
        isValid = false;
    }

    // ----------- Language Validation ------------
    if (!$("input[name='language[]']:checked").val()) {
        $("#errlanguage").text("Language field is required...!");
        isValid = false;
    }

    // ----------- City Validation ------------
    if (city === "") {
        $("#errcity").text("City field is required...!");
        isValid = false;
    }

    // ----------- Image Validation ------------
    if (image === "") {
        $("#errimage").text("Image field is required...!");
        isValid = false;
    } else if (!imagePattern.test(image)) {
        $("#errimage").text("Only JPG, JPEG, PNG and GIF images allowed...!");
        isValid = false;
    }
    if ($("#insert").val() == 1) {
        $("#erremail").text("Email Already Exists...!");
        isValid = false;
    }

    return isValid;


}


//---------------Edit Validation--------------//

function editvalidate() {
    let isValid = true;

    // Patterns
    const namePattern = /^[a-zA-Z ]{3,15}$/;
    const emailPattern = /^[a-zA-Z0-9.]+\@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
    const imagePattern = /\.(jpg|jpeg|png|gif)$/i;

    // Input Values
    const name = $('#edit-name').val();
    const id = $('#userid').val();
    const names = $('#edit-name').val().trim();
    const email = $('#edit-email').val().trim();
    const city = $('#edit-city').val();
    const image = $('#edit-image').val();

    // Clear previous error messages
    $('.remove').text("");

    // ----------- Name Validation ------------
    if (name === "") {
        $("#erreditname").text("Name field is required...!");
        isValid = false;
    } else if (names === "") {
        $("#erreditname").text("Only spaces are not allowed...!");
        isValid = false;
    } else if (!namePattern.test(name)) {
        $("#erreditname").text("Minimum 3 And Maximum 15 Characters Allowed...!");
        isValid = false;
    }

    // ----------- Gender Validation ------------
    if (!$("input[name='editgender']:checked").val()) {
        $("#erreditgender").text("Gender field is required");
        isValid = false;
    }

    // ----------- Email Validation ------------
    if (email === "") {
        $("#erreditemail").text("Email field is required");
        isValid = false;
    } else if (!emailPattern.test(email)) {
        $("#erreditemail").text("Enter a valid email");
        isValid = false;
    }

    // ----------- Language Validation ------------
    if ($("input[name='editlanguage[]']:checked").length === 0) {
        $("#erreditlanguage").text("Language field is required...!");
        isValid = false;
    }

    // ----------- City Validation ------------
    if (city === "") {
        $("#erreditcity").text("City field is required");
        isValid = false;
    }

    // ----------- Image Validation ------------
    if (!imagePattern.test(image) && image != "") {
        $("#erreditimage").text("Only JPG, JPEG, PNG and GIF images allowed");
        isValid = false;
    }

    if ($("#update").val() == 1) {
        $("#erreditemail").text("Email Already Exists...!");
        isValid = false;
    }

    return isValid;
}

//----------Fetch Data For Edit------//

function editUser(id, page, limit, value = '', gender = '', language_show = '', city = '', column = '', order = '') {
    $('.remove').text("");

    $.ajax({
        url: "action.php",
        type: "POST",
        data: { "id": id, action: "edit" },
        success: function (data) {
            $('#edit-form')[0].reset();
            var allData = JSON.parse(data);
            $("#userid").val(allData.id);
            $("#page").val(page);
            $("#show_limit").val(limit);
            $("#show_value").val(value);
            $("#show_gender").val(gender);
            $("#show_language").val(language_show);
            $("#show_city").val(city);
            $("#show_column").val(column);
            $("#show_order").val(order);
            $("#edit-name").val(allData.name);
            $("#edit-email").val(allData.email);
            $("#show_image").attr("src", "image/" + allData.image)
            $('input[name="editgender"][value=' + allData.gender + '].gender').prop('checked', true);
            var language = allData.language.toString();
            if (language.includes("Hindi")) {
                $('input[name="editlanguage[]"][value=' + 'Hindi' + '].language').prop('checked', true);
            } else {
                $('input[name="editlanguage[]"][value=' + 'Hindi' + '].language').prop('checked', false);
            }
            if (language.includes("English")) {
                $('input[name="editlanguage[]"][value=' + 'English' + '].language').prop('checked', true);
            } else {
                $('input[name="editlanguage[]"][value=' + 'English' + '].language').prop('checked', false);
            }
            if (language.includes("Gujrati")) {
                $('input[name="editlanguage[]"][value=' + 'Gujrati' + '].language').prop('checked', true);
            } else {
                $('input[name="editlanguage[]"][value=' + 'Gujrati' + '].language').prop('checked', false);
            }
            $("#edit-city").val(allData.city);
        }
    });
    $("#editEmployee").modal("show");
}

//---------------Delete Data---------------//
function deleteUser(id, page, limit, value = '', gender = '', language = '', city = '', column = '', order = '') {
    var conf = confirm("Are You Sure..?");
    if (conf == true) {
        $.ajax({
            url: "action.php",
            type: "POST",
            data: {
                "id": id, "page": page, "limit": limit, "value": value, "gender": gender, "language": language,
                "city": city, "column": column, "order": order, "action": "delete"
            },
            success: function (response) {
                var data = JSON.parse(response)
                $("#msg").html(data.success);
                var page = data.new_page;

                setTimeout(function () {
                    $('.msg').fadeOut('slow');
                }, 3000);
                searchFilter(page, limit, column, order, value, gender, language, city);
            }
        });
    }
}
//-------------------Update Data--------------------//
function editEmployee() {
    var form = $('#edit-form')[0];
    var formData = new FormData(form);
    var id = $("#userid").val();
    var page1 = $("#page").val();
    var value = $("#show_value").val();
    var limit = $("#show_limit").val();
    var gender = $("#show_gender").val();
    var language = $("#show_language").val();
    var city = $("#show_city").val();
    var column = $("#show_column").val();
    var order = $("#show_order").val();
    formData.append('action', 'update');
    formData.append('id', id);
    formData.append('page', page);
    if (!editvalidate()) {
        return false;
    }
  
    $.ajax({
        url: "action.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {
            $('#editEmployee').modal('hide');
            var data = JSON.parse(response)
            $("#msg").html(data.success);
            var page = data.new_page;
            setTimeout(function () {
                $('.msg').fadeOut('slow');
            }, 3000);
            searchFilter(page, limit, column, order, value, gender, language, city);
            $('#form')[0].reset();
        }
    });
}

//-------------Show Data with Filter And without filter------------//

function searchFilter(page = 1, limit = 5, column = 'id', order = 'asc', value = '', gender = '', language = '', city = '') {
    var keywords = value == "" ? $('#keywords').val() : value;
    var gender = gender == "" ? $('#genderfilter').val() : gender;
    var language = language == "" ? $('#languagefilter').val() : language;
    var city = city == "" ? $('#cityfilter').val() : city;
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
    $("#edit-name").focus(function () {
        $("#erreditname").text("");
    });
    $("#edit-email").focus(function () {
        $("#erreditemail").text("");
    });

    //-----------Name Validation------------//
    $("#name, #edit-name").blur(function (e) {
        var isValid = true;
        var name_val = $("#name").val().trim();
        var editname_val = $("#edit-name").val().trim();
        var namePattern = /^[a-zA-Z ]{3,15}$/;
        if (namePattern.test(name_val)) {
            $("#errname").text("");
        }
        else {
            $("#errname").text("Minimum 3 And Maximum 15 Characters Allowed...!");
            isValid = false;
        }
        if (namePattern.test(editname_val)) {
            $("#erreditname").text("");
        }
        else {
            $("#erreditname").text("Minimum 3 And Maximum 15 Characters Allowed...!");
            isValid = false;
        }
        if (name_val == "") {
            $("#errname").text("Only spaces are not allowed...!");
        }
        if ($("#name").val() == "") {
            $("#errname").text("Name field is required...!");
            isValid = false;
        }
        if (editname_val == "") {
            $("#erreditname").text("Only spaces are not allowed...!");
        }
        if ($("#edit-name").val() == "") {
            $("#erreditname").text("Name field is required...!");
            isValid = false;
        }
        if (!isValid) {
            e.preventDefault();
        }
    });

    //------------Email Validation----------------//

    $("#email, #edit-email").blur(function (e) {
        var isValid = true;
        var mail = $("#email").val();
        var id = $("#userid").val();
        var editemail = $("#edit-email").val();
        var emailPattern = /^[a-zA-Z0-9.]+\@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
        var a = emailPattern.test(mail);
        if (a == true) {
            $("#erremail").text("");
        }
        else {
            $("#erremail").text("Enter A Valid Email...!");
            isValid = false;
        }
        if (emailPattern.test(editemail)) {
            $("#erreditemail").text("");
        }
        else {
            $("#erreditemail").text("Enter A Valid Email...!");
            isValid = false;
        }
        if ($("#email").val() == "") {
            $("#erremail").text("Email field is required...!");
            isValid = false;
        }
        if ($("#edit-email").val() == "") {
            $("#erreditemail").text("Email field is required...!");
            isValid = false;
        }
        $.ajax({
            url: "action.php",
            type: "post",
            data: { "email": mail, "action": "email_check" },
            success: function (response) {
                var data = JSON.parse(response);
                if (data.status == 'failed') {
                    $("#insert").val(1);
                    $("#erremail").text("Email Already Exists...!");
                    // isValid = false;
                } else {
                    $("#insert").val(0);
                }
            }
        });

        $.ajax({
            url: "action.php",
            type: "post",
            data: { "email": editemail, "id": id, "action": "email_check_edit" },
            success: function (response) {
                var data = JSON.parse(response);
                if (data.status == 'failed') {
                    $("#update").val(1);
                    $("#erremail").text("Email Already Exists...!");
                    // isValid = false;
                } else {
                    $("#update").val(0);
                }
            }
        });

        if (!isValid) {
            e.preventDefault();
        }
    });

    //--------------Gender Validation For Insert---------------//

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

    //--------------Gender Validation For Edit---------------//
    $("input[name='editgender']").blur(function (e) {
        var isValid = true;
        if (!$("input[name='editgender']:checked").val()) {
            $("#erreditgender").text("Gender field is required...!");
            isValid = false;
        }
        if (!isValid) {
            e.preventDefault();
        }
    });
    $("input[name='editgender']").change(function () {
        $("#erreditgender").text("");
    });

    //----------------Language Validation For Insert------------//

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

    //------------Language Validation For Edit-----------//

    $("input[name='editlanguage[]']").blur(function (e) {
        var isValid = true;
        if (!$("input[name='editlanguage[]']:checked").val()) {
            $("#erreditlanguage").text("Language field is required...!");
            isValid = false;
        }
        if (!isValid) {
            e.preventDefault();
        }
    });
    $("input[name='editlanguage[]']").change(function (e) {
        var isValid = true;
        if ($(this).val() == "") {
            $("#erreditlanguage").text("Language field is required...!");
            isValid = false;
        } else {
            $("#erreditlanguage").text("");
        }
        if (!$("input[name='editlanguage[]']:checked").val()) {
            $("#erreditlanguage").text("Language field is required...!");
            isValid = false;
        }
        if (!isValid) {
            e.preventDefault();
        }
    });

    //----------------------City Validation---------------//

    $("#city, edit-city").blur(function (e) {
        var isValid = true;
        if ($("#city").val() == "") {
            $("#errcity").text("City field is required...!");
            isValid = false;
        }
        if ($("#edit-city").val() == "") {
            $("#erreditcity").text("City field is required...!");
            isValid = false;
        }
        if (!isValid) {
            e.preventDefault();
        }
    });

    $("#city, #edit-city").change(function (e) {
        var isValid = true;
        if ($("#city").val() == "") {
            $("#errcity").text("City field is required...!");
            isValid = false;
        } else {
            $("#errcity").text("");
        }
        if ($("#edit-city").val() == "") {
            $("#erreditcity").text("City field is required...!");
            isValid = false;
        } else {
            $("#erreditcity").text("");
        }
        if (!isValid) {
            e.preventDefault();
        }
    });

    //-------------------Image Validation------------------//

    $("#image, #edit-image").blur(function (e) {
        var isValid = true;
        var image = $("#image").val();
        var editimage = $("#edit-image").val();
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
        if (!imgPattern.test(editimage) && editimage != "") {
            $("#erreditimage").text("Only JPG, JPEG, PNG and GIF images allowed");
            isValid = false;

        }
        else {
            $("#erreditimage").text("");
        }
        if (!isValid) {
            e.preventDefault();
        }
    });
    $("#image, #edit-image").change(function (e) {
        var isValid = true;
        var image = $("#image").val();
        var editimage = $("#edit-image").val();
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
        if (!imgPattern.test(editimage)) {
            $("#erreditimage").text("Only JPG, JPEG, PNG and GIF images allowed");
            isValid = false;
        }
        else {
            $("#erreditimage").text("");
        }

        if (editimage == "") {
            $("#erreditimage").text("");
        }
        if (!isValid) {
            e.preventDefault();
        }
    });

});