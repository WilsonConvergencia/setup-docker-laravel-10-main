function deleteRegistroPOaginacao(rotaUrl, idDoRegistro){
    if (confirm('Deseja confirmar a exclusão?')){
            $.ajax({
                url: rotaUrl,
                method: 'DELETE',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    id: idDoRegistro,
                },
                beforeSend: function(){
                    $.blockUI({
                        message: 'Carregando....',
                        timeout: 2000,
                    });
                },
            }).done(function(data){
                $.unblockUI();
                if(data.sucess == true){
                    window.location.reload();
                }else{
                    alert('nao foi possivel deletar')
                }
            }).fail(function (data){
                $.unblockUI();
                alert('Não foi possivel buscar os dados');
            })
    }

}

$('#mascara_valor').mask('#.##0,00', {reverse: true})