$(document).ready(function() {

    const url = window.location.origin;
    var current_color_option = '';
    var target_color_option = '';
    $('.processing_paint_job_container').hide();
    $("#new_paint_job").addClass("a_select active");

    //A href clicker
    $('a.a_select').click(function(e) {
        e.preventDefault();
        if ($(this).is("#new_paint_job")) {
            $('.new_paint_job_container').show();
            $('.processing_paint_job_container').hide();
            $("#new_paint_job").addClass("a_select active");
            $("#processing_paint_job").removeClass("active");
        } else if ($(this).is("#processing_paint_job")) {
            $('.new_paint_job_container').hide();
            $('.processing_paint_job_container').show();
            $("#processing_paint_job").addClass("a_select active");
            $("#new_paint_job").removeClass("active");
            get_list_cars(url);
        } else {
            //none selected
        }
    });
    //End a href clicker


    //Select changes in car images for current_color
    $('#current_color').change(function() {
        current_color_option = $(this).find('option:selected').val();

        if (current_color_option == 0) {
            $(".left_car").attr("src", "images/default_car.png");
        } else if (current_color_option == 1) {
            $(".left_car").attr("src", "images/red_car.png");
        } else if (current_color_option == 2) {
            $(".left_car").attr("src", "images/green_car.png");
        } else if (current_color_option == 3) {
            $(".left_car").attr("src", "images/blue_car.png");
        }

        validation_checker(current_color_option, target_color_option);
    });

    //End changes in car images for current_color

    //Select changes in car images for target_color
    $('#target_color').change(function() {
        target_color_option = $(this).find('option:selected').val();

        if (target_color_option == 0) {
            $(".right_car").attr("src", "images/default_car.png");
        } else if (target_color_option == 1) {
            $(".right_car").attr("src", "images/red_car.png");
        } else if (target_color_option == 2) {
            $(".right_car").attr("src", "images/green_car.png");
        } else if (target_color_option == 3) {
            $(".right_car").attr("src", "images/blue_car.png");
        }

        validation_checker(current_color_option, target_color_option);
    });
    //End changes in car images for target_color


    //Submitting form0
    $('#form_paint').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            method: "POST",
            url: url + "/paint",
            data: new FormData(this),
            dataType: "json",
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {

                $('#form_paint')[0].reset();


            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
            }
        });
    });


});

function validation_checker(current, target) {

    if (current == target) {
        alert("Your current paint color is the same as your target paint color");
    }

}

function get_list_cars(url) {
    $.ajax({
        url: url + "paint/get_list_paints",
        type: "GET",
        dataType: "json",
        success: function(data) {

            console.log(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error adding / update data');
        }
    });
}
