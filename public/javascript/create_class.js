$(document).ready(function () {
    $('.class_settings_id').hide();
    $('.js-example-basic-multiple').select2();
});
$('#generate-session').on('click', function () {
    $('#generate-session').hide();
    $('#append-row').show();
    $('.generate-session').show();
    var value_session = $("#append-row").find($("select")).length + 1;
    var index_val = value_session;
    var value_session = "Session-" + value_session;

    var firstDate = $('#class_date_time').val();
    $("#end_date_time").val(firstDate);
    var row = `
    <div class="row" style="padding:1rem;"> 
        <div class="col-md-3">
            <input type="text" onchange="getAvailability(event, '${value_session}')" name="session_start_date[]" class="showdatepicker form-control" value="${firstDate}" id="first_date_time" placeholder="Select Start Date & Time">
            <span id="${value_session}"></span>
        </div>
        <div class="col-md-2">
            <input class="form-control" name="session_name[]" value="${value_session}" placeholder="Session Name">
        </div> 
        <div class="col-md-3">
            <select name="topic_id[${value_session}]"  class="form-control js-example-basic-multiple" id="topic_id" placeholder="Select  Topic" >
            </select>
        </div>
        <div class="col-md-3">
            <input type="text" name="comment[]" class="form-control" placeholder="comment">
        </div>
        <button class="btn btn-danger" onclick="$(this).closest(\'div\').remove();"><i style="  margin-left:3px;" class="material-icons">delete</i></button>
        <div class="col-md-1">
            <button id="first_button" class="btn btn-success generate-session" onclick="addRow()" type="button">+</button>
        </div>
    </div>`;
    $('#row-list').append(row)


    $('.showdatepicker').datetimepicker({
        formatDate: 'Y/m/d',
        minDate: '-1970/01/01',//yesterday is minimum date(for today use 0 or -1970/01/01)
    });
    var subject_id_value = $('#subject_id').val();
    $.get("/api/topics/" + subject_id_value, function (data, status) {
        $('#topic_id').empty();
        $.each(data, function (index, subcategory) {
            $('#topic_id').append('<option value="' + subcategory.id + '">' + subcategory.name + '</option>');
        });
    });
    deletePlusButton();
});

function deletePlusButton() {
    var plusLength = $("#append-row").find($("select")).length;
    if (plusLength == 1) {
        $('#first_button').show();
    }
    if (plusLength == 2) {
        $('#first_button').hide();
    }
    if (plusLength > 2) {
        for (var lx = 2; lx < plusLength; lx++) {
            // var l = lx + 1;
            var l = lx;
            //  alert('#first_button' + l);
            $('#first_button' + l).hide();
        }
    }

}
/**
 * get availablity from add more button
 * @param {event} e 
 * @param {*} id 
 */
function getAvailability(e, id) {
    var batch_start_date_time = e.target.value;
    $("#end_date_time").val(batch_start_date_time);
    batch_start_date_time = batch_start_date_time.replaceAll("/", "-");
    var teacher_id = $('#class_name').val();
    var duration = $('#duration_per_sessions_id').val();
    $.get("/api/teacher/" + teacher_id + '/' + batch_start_date_time + '/' + duration, function (data, status) {
        // $("#teacher_available_status").val(data);
        if (data == 'NO') {
            $("#" + id).html("<span class='text-danger'>Teacher Not Available</span>");

            $('#saveForm').prop('disabled', true);
        } else {
            // if teacher is available
            $("#" + id).html("");

            $('#saveForm').prop('disabled', false);
        }
    });
}
function addRow() {
    $('#append-row').show();
    var value_session = $("#append-row").find($("select")).length + 1;
    var index_val = value_session;
    var value_session = "Session-" + value_session;
    var row = `
    <div class="row" style="padding:1rem;"> 
        <div class="col-md-3">
            <input type="text" onchange="getAvailability(event, '${value_session}')" name="session_start_date[]" class="showdatepicker form-control" id="first_date_time_${index_val}" placeholder="Select Start Date & Time">
            <span id="${value_session}"></span>
        </div>
        <div class="col-md-2">
            <input class="form-control" name="session_name[]" value="${value_session}" placeholder="Session Name">
        </div> 
        <div class="col-md-3">
            <select name="topic_id[${value_session}]" class="form-control js-example-basic-multiple topic_id" id="topic_id_${index_val}" placeholder="Select  Topic" >
            </select>
        </div>
        <div class="col-md-3">
            <input type="text" name="comment[]" class="form-control" placeholder="comment">
        </div>
        <button class="btn btn-danger" onclick="$(this).closest(\'div\').remove();"><i style="  margin-left:3px;" class="material-icons">delete</i></button>
        <div class="col-md-1">
            <button id="first_button${index_val}" class="btn btn-success generate-session" onclick="addRow()" type="button">+</button>
        </div>
    </div>`;
    // $('#first_button').hide();
    $('#row-list').append(row)

    if (index_val == 2) {
        var firstValue = $('#first_date_time').val();
        if (firstValue.length > 1) {
            var datetimeVal = firstValue.split('/');
            var year = datetimeVal[0];
            var month = datetimeVal[1];
            var date = datetimeVal[2];
            var maindate = date.slice(0, -5);
            var intDate = parseInt(maindate) + 1;
            var adate = `${year}/${('0' + month).slice(-2)}/${('0' + intDate).slice(-2)} 00:00`

            $(`#first_date_time_${index_val}`).datetimepicker({
                formatDate: 'Y/m/d',
                minDate: adate,//yesterday is minimum date(for today use 0 or -1970/01/01)
            });
        } else {
            zdate = $('#class_date_time').val();
            $('.showdatepicker').datetimepicker({
                formatDate: 'Y/m/d',
                minDate: zdate,//yesterday is minimum date(for today use 0 or -1970/01/01)
            });
        }
    } else {
        var firstValue = $(`#first_date_time_${index_val - 1} `).val();
        if (firstValue.length > 1) {
            var datetimeVal = firstValue.split('/');
            var year = datetimeVal[0];
            var month = datetimeVal[1];
            var date = datetimeVal[2];
            var maindate = date.slice(0, -5);
            var intDate = parseInt(maindate) + 1;
            var adate = `${year}/${('0' + month).slice(-2)}/${('0' + intDate).slice(-2)} 00: 00`
            $(`#first_date_time_${index_val} `).datetimepicker({
                formatDate: 'Y/m/d',
                minDate: adate,//yesterday is minimum date(for today use 0 or -1970/01/01)
            });
        } else {
            zdate = $('#class_date_time').val();
            $(`#first_date_time_${index_val} `).datetimepicker({
                formatDate: 'Y/m/d',
                minDate: zdate,//yesterday is minimum date(for today use 0 or -1970/01/01)
            });
        }
    }
    var subject_id_value = $('#subject_id').val();
    $.get("/api/topics/" + subject_id_value, function (data, status) {
        $(`#topic_id_${index_val}`).empty();
        $.each(data, function (index, subcategory) {
            $(`#topic_id_${index_val}`).append('<option value="' + subcategory.id + '">' + subcategory.name + '</option>');
        });
    });
    deletePlusButton();
}

//  <button type="button" class="btn del btn-danger btn-xs">x</button>
$('#select_year').on('change', function () {
    var year_id_value = $('#select_year').val();
    $.get("/api/subjects/" + year_id_value, function (data, status) {
        $('#subject_id').empty();
        $('#subject_id').append('<option value="">Choose Subject</option>');
        $.each(data, function (index, subcategory) {
            $('#subject_id').append('<option value="' + subcategory.id + '">' + subcategory.name + '</option>');
        });
    });
});
$('#class_name').on('change', function () {
    var batch_start_date_time = $('#class_date_time').val();
    batch_start_date_time = batch_start_date_time.replaceAll("/", "-");
    var teacher_id = $('#class_name').val();
    var duration = $('#duration_per_sessions_id').val();
    $.get("/api/teacher/" + teacher_id + '/' + batch_start_date_time + '/' + duration, function (data, status) {
        $("#teacher_available_status").val(data);
        if (data == 'NO') {

            $('#saveForm').prop('disabled', true);
            $("#not_available").html("<span class='text-danger'>Teacher Not Available</span>");
        } else {
            $("#not_available").html("");

            $('#saveForm').prop('disabled', false);
        }
    });
});

$('#class_date_time').on('change', function () {
    var batch_start_date_time = $('#class_date_time').val();
    batch_start_date_time = batch_start_date_time.replaceAll("/", "-");
    var teacher_id = $('#class_name').val();
    var duration = $('#duration_per_sessions_id').val();
    $.get("/api/teacher/" + teacher_id + '/' + batch_start_date_time + '/' + duration, function (data, status) {
        if (teacher_id != '... Select Teacher ...') {
            if (data == 'NO') {

                $('#saveForm').prop('disabled', true);
                $("#not_available").html("<span class='text-danger'>Teacher Not Available</span>");
            }
            else {
                $("#not_available").html("");

                $('#saveForm').prop('disabled', false);
            }
            $("#teacher_available_status").val(data);
        }
    });
});

function validateDateTime() {
    var source_val = $('#class_date_time').val();
    var nowDate = new Date(source_val);
    if (!$('#first_date_time').val()) {
        alert("Please Add Atleast 1 Session Before Saving the Class.");
        return false;
    }
    var Time1 = new Date($('#first_date_time').val());
    if (nowDate > Time1) {
        alert("Start Date Can Not Be Greater Than Batch Start Date");
        return false;
    }
    return true;
}

$('#subject_id').change(function () {
    var subject_id_value = $('#subject_id').val();
    $.get("/api/topics/" + subject_id_value, function (data, status) {
        $('#topic_id').empty();
        $.each(data, function (index, subcategory) {
            $('#topic_id').append('<option value="' + subcategory.id + '">' + subcategory.name + '</option>');
        });
    });
});

$('#class_settings_id').on('change', function () {
    if ($('#class_settings_id').val() == 5) {
        $('#select_class_master').hide();
        $('.class_settings_id').show();
    }
});


// date time picker
$('document').ready(function () {
    $('#class_date_time').datetimepicker({
        formatDate: 'Y/m/d',
        minDate: '-1970/01/01',//yesterday is minimum date(for today use 0 or -1970/01/01)
    });
    $('#end_date_time').datetimepicker({
        formatDate: 'Y/m/d',
        minDate: '-1970/01/01',//yesterday is minimum date(for today use 0 or -1970/01/01)
    });

    // Location
})
$("#location_address").hide();

$("#name").click(function () {
    $("#location_address").hide();
});

$("#name1").click(function () {
    $("#location_address").show();
});