$(document).ready(function() {

    $('#btnSave').click(function() {
        $('#frmSubject').submit();
    });

    $('#subject').hide();

    $('#btnAdd').click(function() {
        $('#subject').show();
        $('.top').hide();
        $('#subject_code').val('');
        $('#subject_name').val('');
        $('#subject_subjectId').val('');
        $('#subjectHeading').html(lang_addSubject);
        $(".messageBalloon_success").remove();
    });

    $('#btnCancel').click(function() {
        $('#subject').hide();
        $('.top').show();
        $('#btnDelete').show();
        validator.resetForm();
    });

    $('a[href="javascript:"]').click(function(){ 	
        var row = $(this).closest("tr");
        var statId = row.find('input').val();
        var url = subjectInfoUrl+statId;
        $('#subjectHeading').html(lang_editSubject);
        getSubjectInfo(url);

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
        var id = $('#subject_subjectId').val();
        var natCount = subjectList.length;
        for (var j=0; j < natCount; j++) {
            if(id == subjectList[j].id){
                currentStatus = j;
            }
        }
        var i;
        var name = $.trim($('#subject_name').val()).toLowerCase();
        for (i=0; i < natCount; i++) {

            arrayName = subjectList[i].name.toLowerCase();
            if (name == arrayName) {
                temp = false
                break;
            }
        }
        if(currentStatus != null){
            if(name == subjectList[currentStatus].name.toLowerCase()){
                temp = true;
            }
        }

        return temp;
    });

    var validator = $("#frmSubject").validate({

        rules: {
            'subject[name]' : {
                required:true,
                maxlength: 100,
                uniqueName: true
            }
        },
        messages: {
            'subject[name]' : {
                required: lang_NameRequired,
                maxlength: lang_exceed50Charactors,
                uniqueName: lang_uniqueName
            }

        }

    });
});

function getSubjectInfo(url){
    $.getJSON(url, function(data) {
        $('#subject_subjectId').val(data.id);
        $('#subject_code').val(data.code);
        $('#subject_name').val(data.name);
        $('#subject').show();
        $(".messageBalloon_success").remove();
        $('.top').hide();
    });
}