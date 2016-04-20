function jq_departamentos(){
    $.get('ubigeo.php',
    {tipo: 'dpto'},
    function(rpta){
        $('#divdpto').html(rpta);
		$('#divprov').html('');
    }
    )
}

function jq_provincias(){
    $.get('ubigeo.php',
    {
        tipo: 'prov',
        dpto: $('#cbodpto').val()
        },
    function(rpta){
        $('#divprov').html(rpta);
		$('#divdist').html('');
    }
    )
}

function jq_distritos(){
    $.get('ubigeo.php',
    {
        tipo: 'dist',
        dpto: $('#cbodpto').val(),
        prov: $('#cboprov').val()
        },
    function(rpta){
        $('#divdist').html(rpta);
    }
    )
}