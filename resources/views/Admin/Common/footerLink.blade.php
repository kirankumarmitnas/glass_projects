<?php  $disableDataTable=checkVariable($disableDataTable,0);?>
<!-- Bootstrap core JavaScript-->
<script src="{!! asset('assets/vendor/bootstrap-5.1.3/js/bootstrap.bundle.min.js') !!}"></script>
<script src="{!! asset('assets/vendor/bootstrap-5.1.3/js/2.10.2.popper.min.js') !!}"></script>
<!-- Core plugin JavaScript-->
<script src="{!! asset('assets/vendor/jquery-easing/jquery.easing.min.js') !!}"></script>
<!-- Custom scripts for all pages-->
<script src="{!! asset('assets/js/moment-with-locales.js') !!}"></script>
<script src="{!! asset('assets/js/bootstrap-datetimepicker.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/vendor/form-validator/jquery.form-validator.js') !!}"></script>
<script src="{!! asset('assets/js/jquery.numeric.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/vendor/jquery-confirm/jquery-confirm.min.js') !!}"></script>
<?php if($disableDataTable==0){ ?>
<script type="text/javascript" src="{!! asset('assets/vendor/datatable/datatables.min.js') !!}"></script>
<?php } ?>
<script type="text/javascript" src="{!! asset('assets/vendor/select2/js/select2.min.js') !!}"></script>
<script src="{!! asset('assets/js/custom.min.js?v='.time()) !!}"></script>
</body>
</html>
