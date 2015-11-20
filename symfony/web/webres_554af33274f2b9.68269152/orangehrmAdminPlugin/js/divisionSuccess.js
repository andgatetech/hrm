$(document).ready(function() {

    $('#btnSave').click(function() {
        $('#frmDivision').submit();
    });

    $('#division').hide();

    $('#btnAdd').click(function() {
        $('#division').show();
        $('.top').hide();
        $('#division_code').val('');
        $('#division_name').val('');
        $('#division_divisionId').val('');
        $('#divisionHeading').html(lang_addDivision);
        $(".messageBalloon_success").remove();
    });

    $('#btnCancel').click(function() {
        $('#division').hide();
        $('.top').show();
        $('#btnDelete').show();
        validator.resetForm();
    });

    $('a[href="javascript:"]').click(function(){
        var row = $(this).closest("tr");
        var statId = row.find('input').val();
        var url = divisionInfoUrl+statId;
        $('#divisionHeading').html(lang_editDivision);
        getDivisionInfo(url);

    });

    $('#btnDelete').attr('disabled', 'disabled');


    $("#ohrmList_chkSelectAll").click(function() {
        if($(":checkbox").length == 1) {
            $('#btnDelete').attr('disabled','disabled');
        }
        else {
            if($("#ohrmList_chkSelectAll").is(':checked')) {
                $('#btnDelete').removeAttr('disabled');
            } else {
                $('#btnDelete').attr('disabled','disabled');
            }
        }
    });

    $(':checkbox[name*="chkSelectRow[]"]').click(function() {
        if($(':checkbox[name*="chkSelectRow[]"]').is(':checked')) {
            $('#btnDelete').removeAttr('disabled');
        } else {
            $('#btnDelete').attr('disabled','disabled');
        }
    });

    $('#btnDelete').click(function(){
        $('#frmList_ohrmListComponent').submit(function(){
            $('#deleteConfirmation').dialog('open');
            return false;
        });
    });

    $('#frmList_ohrmListComponent').attr('name','frmList_ohrmListComponent');
    $('#dialogDeleteBtn').click(function() {
        document.frmList_ohrmListComponent.submit();
    });
    $('#dialogCancelBtn').click(function() {
        $("#deleteConfirmation").dialog("close");
    });

    $.validator.addMethod("uniqueName", function(value, element, params) {
        var temp = true;
        var currentStatus;
        var id = $('#division_divisionId').val();
        var natCount = divisionList.length;
        for (var j=0; j < natCount; j++) {
            if(id == divisionList[j].id){
                currentStatus = j;
            }
        }
        var i;
        var name = $.trim($('#division_name').val()).toLowerCase();
        for (i=0; i < natCount; i++) {

            arrayName = divisionList[i].name.toLowerCase();
            if (name == arrayName) {
                temp = false
                break;
            }
        }
        if(currentStatus != null){
            if(name == divisionList[currentStatus].name.toLowerCase()){
                temp = true;
            }
        }

        return temp;
    });

    var validator = $("#frmDivision").validate({

        rules: {
            'division[name]' : {
                required:true,
                maxlength: 100,
                uniqueName: true
            }
        },
        messages: {
            'division[code]' : {
                required: lang_NameRequired,
                maxlength: lang_exceed50Charactors,
                uniqueName: lang_uniqueName
            }

        }

    });
});

function getDivisionInfo(url){

    $.getJSON(url, function(data) {
        $('#division_divisionId').val(data.id);
        $('#division_name').val(data.name);
        $('#division').show();
        $(".messageBalloon_success").remove();
        $('.top').hide();
    });
}