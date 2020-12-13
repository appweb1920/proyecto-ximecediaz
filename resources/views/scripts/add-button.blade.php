<script type="text/javascript">
    $(document).ready(function(){
        var maxInputs = 10 //Número máximo permitido de añadir nuevas secciones
        var addButton = $('.add_boton'); //Botón de añadir
        var inputBox = $('.inputs');
        var x = 1; //Input inicial
        var inputHTML = '<div class="input_box"><input type="text" name="seccion[]" value=""/><a href="javascript:void(0);" class="remove_boton"><i class="fas fa-minus-circle fa-2x text-info"></i></a></div>'
        
        var num = $('.num');

        $(addButton).click(function(){
            if(x < maxInputs){
                x++;
                $(inputBox).append(inputHTML);
                $(num).val(x);
            }
        });

        $(inputBox).on('click', '.remove_boton',function(e){
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
            $(num).val(x);
        });
    });
</script>