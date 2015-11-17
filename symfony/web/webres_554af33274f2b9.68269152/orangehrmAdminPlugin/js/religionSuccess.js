$(document).ready(function() {

    $('#btnSave').click(function() {
        $('#frmReligion').submit();
    });

    $('#religion').hide();

    $('#btnAdd').click(function() {
        $('#religion').show();
        $('.top').hide();
        $('#religion_code').val('');
        $('#religion_name').val('');
        $('#religion_religionId').val('');
        $('#religionHeading').html(lang_addReligion);
        $(".messageBalloon_success").remove();
    });

    $('#btnCancel').click(function() {
        $('#religion').hide();
        $('.top').show();
        $('#btnDelete').show();
        validator.resetForm();
    });

    $('a[href="javascript:"]').click(function(){ 	
        var row = $(this).closest("tr");
        var statId = row.find('input').val();
        var url = religionInfoUrl+statId;
        $('#religionHeading').html(lang_editReligion);
        getReligionInfo(url);

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
        var id = $('#religion_religionId').val();
        var natCount = religionList.length;
        for (var j=0; j < natCount; j++) {
            if(id == religionList[j].id){
                currentStatus = j;
            }
        }
        var i;
        var name = $.trim($('#religion_name').val()).toLowerCase();
        for (i=0; i < natCount; i++) {

            arrayName = religionList[i].name.toLowerCase();
            if (name == arrayName) {
                temp = false
                break;
            }
        }
        if(currentStatus != null){
            if(name == religionList[currentStatus].name.toLowerCase()){
                temp = true;
            }
        }

        return temp;
    });

    var validator = $("#frmReligion").validate({

        rules: {
            'religion[name]' : {
                required:true,
                maxlength: 100,
                uniqueName: true
            }
        },
        messages: {
            'religion[name]' : {
                required: lang_NameRequired,
                maxlength: lang_exceed50Charactors,
                uniqueName: lang_uniqueName
            }

        }

    });
});

function getReligionInfo(url){
    $.getJSON(url, function(data) {
        $('#religion_religionId').val(data.id);
        $('#religion_code').val(data.code);
        $('#religion_name').val(data.name);
        $('#religion').show();
        $(".messageBalloon_success").remove();
        $('.top').hide();
    });
}