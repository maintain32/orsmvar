<!-- start js include path -->
<script src="{{ URL::asset('/js/admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('/js/admin/plugins/popper/popper.min.js') }}"></script>
<script src="{{ URL::asset('/js/admin/plugins/jquery-blockui/jquery.blockui.min.js') }}"></script>
<script src="{{ URL::asset('/js/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ URL::asset('/js/admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Common js-->
<script src="{{ URL::asset('/js/admin/app.js') }}"></script>
<script src="{{ URL::asset('/js/admin/layout.js') }}"></script>
<script src="{{ URL::asset('/js/admin/theme-color.js') }}"></script>
<!-- Material -->
<script src="{{ URL::asset('/js/admin/plugins/material/material.min.js') }}"></script>
<script src="{{ URL::asset('/js/admin/pages/material_select/getmdl-select.js') }}"></script>
<!-- dropzone -->
<script src="{{ URL::asset('/js/admin/plugins/dropzone/dropzone.js') }}"></script>
<script src="{{ URL::asset('/js/admin/plugins/dropzone/dropzone-call.js') }}"></script>
<!-- date and time 	 -->
<script src="{{ URL::asset('/js/admin/plugins/flatpicker/flatpickr.min.js') }}"></script>
<script src="{{ URL::asset('/js/admin/pages/datetime/datetime-data.js') }}"></script>
<!-- animation -->
<script src="{{ URL::asset('/js/admin/pages/ui/animations.js') }}"></script>
<!-- end js include path -->
<script src="{{ URL::asset('js/front/lib/sweetalert2.all.min.js') }}"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
