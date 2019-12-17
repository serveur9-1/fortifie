<style type="text/css">
    .btnadmin{
        background-color: #55acee !important;
        color: #ffffff;
    }
    .btnad{
        background-color: #6c3191 !important;
        color: #ffffff;
    }

    .main-section{
        margin:0 auto;
        padding: 20px;
        margin-top: 100px;
        background-color: #fff;
        box-shadow: 0px 0px 20px #c1c1c1;
    }
    .fileinput-remove,
    .fileinput-upload{
        display: none;
    }
    .tof{
        
        width: 100px;
    }
</style>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script> 

<script>
    $("#file-1").fileinput({
        theme: 'fa',
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: false,
        maxFileSize:2000,
        maxFilesNum: 10,
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
    });
</script>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('/dist/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('/dist/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('/dist/vendors/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('/dist/js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('/dist/js/chart-bar-demo.js') }}"></script>
<script src="{{ asset('/dist/css/all.min.css') }}"></script>


<!-- Page level plugins -->
<script src="{{ asset('/dist/vendors/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/dist/vendors/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('/dist/js/demo/datatables-demo.js') }}"></script>




 <script src="{{ asset('/dist/js/fileinput.js') }}"></script>
 <script src="{{ asset('/dist/js/theme.js') }}"></script>
<script src="{{ asset('/dist/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('/dist/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>


<script src="{{ asset('/dist/vendors/jquery-easing/jquery.easing.min.js') }}"></script>


<script src="{{ asset('/dist/js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('/dist/css/all.min.css') }}"></script>



<script src="{{ asset('/dist/vendors/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/dist/vendors/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ asset('/dist/js/demo/datatables-demo.js') }}"></script> 
 