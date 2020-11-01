// Image upload script
$(document).ready(function () {
    $(document).on('change', '.btn-file :file', function () {
        var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function (event, label) {

        var input = $(this).parents('.input-group').find(':text'),
                log = label;

        if (input.length) {
            input.val(log);
        } else {
            if (log)
                alert(log);
        }

    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function () {
        readURL(this);
    });

});

//Modal code start
$(document).ready(function(){
	$(document).on("click", "#delete", function () {
		 var deleteID = $(this).data('id');
		 $(".modal-body #modal_id").val( deleteID );
    });
    
    $(document).on("click", "#restore", function () {
        var restoreID = $(this).data('id');
        $(".modal-body #modal_id").val( restoreID );
   });

  $(document).on("click", "#publish", function () {
		 var publishID = $(this).data('id');
		 $(".modal-body #modal_id").val( publishID );
	});

  $(document).on("click", "#unpublish", function () {
		 var unpublishID = $(this).data('id');
		 $(".modal-body #modal_id").val( unpublishID );
	});
});