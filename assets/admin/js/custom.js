$(document).ready(function(e){
	$('body').on('click', '#auto-list-li', function(){
		var value = $(this).find('#value').html();
		var input = $(this).find('#input').text();
		var key = $(this).find('#key').text();
		$('#'+input).val(value);
		$('input[name="'+input+'"]').val(key);
	});
	setTimeout(function(){ $('.alert-hide').slideUp() }, 2000);
});

function showLoader(pos){
	$(pos).before('<div class="pre-load" style="display: block;"><span><i class="fa fa-circle-o-notch infinite"></i></span></div>');
}

function hideLoader(){
	$('.pre-load').remove();
}

function auto_hide_list(action, reset){
	$('#'+action).slideUp();
	$('#'+reset).val('');
}

function back(){
	if(history.back() === undefined){
		window.top.close();
	} else{
		window.history.go(-1);
	}
}

function confirmBox(title="", msg="", yesFn, e, noFn){
	var $confirm = $("#confirmBox_");
	$confirm.modal('show');
	$("#confirmBoxTitle_").html(title);
	$("#confirmBoxMsg_").html(msg);
	$("#confirmBox_Yes").off('click').click(function () {
		if(e!='')yesFn(e);
		else yesFn(e);
		$confirm.modal("hide");
	});
	$("#confirmBox_No").off('click').click(function () {
		noFn();
		$confirm.modal("hide");
	});
}
function _v(){ console.log("_v") }

function imagevalidation(oInput) {
  var _validFileExtensions = [".jpeg", ".png", ".jpg"]; 
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }             
            if (!blnValid) {
            	$('.content').prepend('<div class="alert alert-danger"><b>Only jpg, jpeg, png files are allowed...</b></div>');
            	setTimeout(function(){ $('.alert').slideUp('slow'); }, 2000);
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}
/***********Image Manager**************/
$(document).ready(function(){
$(document).on('click', 'a[data-toggle=\'image\']', function(e) {
		var $element = $(this);
		var $popover = $element.data('bs.popover'); // element has bs popover?

		e.preventDefault();

		// destroy all image popovers
		$('a[data-toggle="image"]').popover('destroy');

		// remove flickering (do not re-add popover when clicking for removal)
		if ($popover) {
			return;
		}

		$element.popover({
			html: true,
			placement: 'bottom',
			trigger: 'manual',
			content: function() {
				return '<button type="button" id="button-image" class="btn btn-info"><i class="fa fa-pencil"></i></button> <button type="button" id="button-clear" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';
			}
		});

		$element.popover('show');

		$('#button-image').on('click', function() {
			var $button = $(this);
			var $icon   = $button.find('> i');
			$('#modal-image').remove();

			$.ajax({
				url: base_url+'/mediamanager?target=' + $element.parent().find('input').attr('id') + '&thumb=' + $element.attr('id'),
				dataType: 'html',
				beforeSend: function() {
					$button.prop('disabled', true);
					if ($icon.length) {
						$icon.attr('class', 'fa fa-circle-o-notch fa-spin');
					}
				},
				complete: function() {
					$button.prop('disabled', false);

					if ($icon.length) {
						$icon.attr('class', 'fa fa-pencil');
					}
				},
				success: function(html) {
					$('body').append('<div id="modal-image" class="modal">' + html + '</div>');
					$('#modal-image').modal('show');
				}
			});

			$element.popover('destroy');
		});

		$('#button-clear').on('click', function() {
			$element.find('img').attr('src', $element.find('img').attr('data-placeholder'));

			$element.parent().find('input').val('');

			$element.popover('destroy');
		});
	});
});