<!-- Footer -->
<footer id="page-footer" class="opacity-0">
    <div class="content py-20 font-size-xs clearfix">
        <div class="float-right">
            Crafted </i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">ideewe</a>
        </div>
        <div class="float-left">
            <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase 3.1</a> &copy; <span class="js-year-copy"></span>
        </div>
    </div>
</footer>
<!-- END Footer -->
</div>
<script src="<?php echo base_url(); ?>assets/js/codebase.core.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/codebase.app.min.js"></script>
<!-- Page JS Plugins -->
<script src="<?php echo base_url(); ?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo base_url(); ?>assets/js/pages/be_tables_datatables.min.js"></script>
<script>
    jQuery(function() {
        Codebase.helpers(['datepicker']);
    });
</script>

<script>
    $(document).ready(function() {
        var base_url = "<?php echo base_url(); ?>";
        $(".btn-remove").on("click", function(e) {
            e.preventDefault();
            //alert("eliminando");
            var ruta = $(this).attr("href");
            $.ajax({
                url: ruta,
                type: "POST",
                success: function(resp) {
                    window.location.href = base_url + resp;
                    //alert(resp);
                }
            });
        });
        $(".btn-view").on("click", function() {

            var id = $(this).val();

            $.ajax({
                url: base_url + "mantenimiento/usuarios/view/" + id,
                type: "POST",
                success: function(resp) {
                    $("#modal-popin .modal-body").html(resp);
                }

            });

        });
    })
</script>