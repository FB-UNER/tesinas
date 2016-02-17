<script>
    $(document).ready(function()
    {

        if($('input:radio[name=modificacion_eval_1]:checked').val() == 0) {
            $('input[name=fecha_modificacion_eval_1]').val('0000-00-00');
            $('input[name=fecha_modificacion_eval_1]').prop('disabled', true);
        }

        if($('input:radio[name=modificacion_eval_2]:checked').val() == 0) {
            $('input[name=fecha_modificacion_eval_2]').val('0000-00-00');
            $('input[name=fecha_modificacion_eval_2]').prop('disabled', true);
        }

        if($('input:radio[name=modificacion_eval_3]:checked').val() == 0) {
            $('input[name=fecha_modificacion_eval_3]').val('0000-00-00');
            $('input[name=fecha_modificacion_eval_3]').prop('disabled', true);
        }



        $("input[name=modificacion_eval_1]").click(function () {
            if($('input:radio[name=modificacion_eval_1]:checked').val() == 1){
                $('input[name=fecha_modificacion_eval_1]').prop('disabled',false);
            }else{
                $('input[name=fecha_modificacion_eval_1]').val('0000-00-00');
                $('input[name=fecha_modificacion_eval_1]').prop('disabled',true);
            }
        });

        $("input[name=modificacion_eval_2]").click(function () {
            if($('input:radio[name=modificacion_eval_2]:checked').val() == 1){
                $('input[name=fecha_modificacion_eval_2]').prop('disabled',false);
            }else{
                $('input[name=fecha_modificacion_eval_2]').val('0000-00-00');
                $('input[name=fecha_modificacion_eval_2]').prop('disabled',true);
            }
        });

        $("input[name=modificacion_eval_3]").click(function () {
            if($('input:radio[name=modificacion_eval_3]:checked').val() == 1){
                $('input[name=fecha_modificacion_eval_3]').prop('disabled',false);
            }else{
                $('input[name=fecha_modificacion_eval_3]').val('0000-00-00');
                $('input[name=fecha_modificacion_eval_3]').prop('disabled',true);
            }
        });


    });
</script>