<script>
    $(document).ready(function() {
        if ($('input:checkbox[name=aprueba_comision_tfi]:checked').val() != 1) {
            $('#fadein').hide();
        }

        $("input[name=aprueba_comision_tfi]").click(function () {

            if ($('input:checkbox[name=aprueba_comision_tfi]:checked').val() == 1 || $('input:checkbox[name=aprueba_comision_tfi]:checked').val() == 0) {
                $('#fadein').slideDown("slow");
            }
            else {
                $('#fadein').slideUp("slow");
            }
        });
    });
</script>

