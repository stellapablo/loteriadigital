<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Example 2</title>
    <link href="{{ url('invoice/style.css') }}" rel="stylesheet">
</head>
<body>
<div id="details" class="clearfix">
    <div id="invoice">
        <h2>INDICE DE TOMO NUMERO: 200</h2>
        <h3>01/01/2107 - 01/07/2017</h3>
    </div>
</div>
<table border="0" cellspacing="0" cellpadding="0">
    <thead>
    <tr>
        <th class="no">NRO</th>
        <th class="no">FECHA</th>
        <th class="no">TEMA</th>
        <th class="no">DETALLE</th>
        <th class="total"></th>
    </tr>
    </thead>
    @foreach($documentos as $row)
        <tr>
            <td>{{ $row->nro_documento }}</td>
            <td>{{ $row->fecha_documento }}</td>
            <td>{{ $row->tipo_documento }}</td>
            <td style="text-align: justify">{{ $row->detalle }}</td>
        </tr>
    @endforeach
</table>
<script type="text/php">
    if ( isset($pdf) ) {
        $text = 'Pagina: {PAGE_NUM} de {PAGE_COUNT}';
        $font = Font_Metrics::get_font("helvetica", "bold");
        $pdf->page_text(520, 820, $text, $font, 8);
    }
</script>
</body>
</html>