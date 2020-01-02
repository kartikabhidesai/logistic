<script src="{{ asset('public/frontend/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/comman_function.js') }}"></script>
<!-- popup-holder of the page end here -->
<!-- include jQuery -->
<script src="{{ asset('public/frontend/js/jquery.js') }}"></script>
<!-- include jQuery -->
<script src="{{ asset('public/frontend/js/plugins.js') }}"></script>
<!-- include jQuery -->
<script src="{{ asset('public/frontend/js/jquery.main.js') }}"></script>
<script src="{{ asset('public/frontend/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/toastr.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/ajaxfileupload.js') }}"></script>
<script src="{{ asset('public/frontend/js/jquery.form.min.js') }}"></script>

@if (!empty($pluginjs)) 
@foreach ($pluginjs as $value) 
<script src="{{ url('public/frontend/plugins/'.$value) }}" type="text/javascript"></script>
@endforeach
@endif
@if (!empty($js)) 
@foreach ($js as $value) 
<script src="{{ url('public/frontend/js/'.$value) }}" type="text/javascript"></script>
@endforeach
@endif



<script>
jQuery(document).ready(function () {
@if (!empty($funinit))
        @foreach ($funinit as $value)
{{ $value }}
@endforeach
@endif
});
</script>