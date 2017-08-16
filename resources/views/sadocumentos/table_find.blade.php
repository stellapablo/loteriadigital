@if($documentos)
    <h2 class="m-t-40">Cantidad de resultados: {{ $documentos->total() }}</h2>
    <small>About 14,700 result ( 0.10 seconds)</small>
    <div style="text-align:center;">
        {{ $documentos->appends(Request::all())->links() }}
    </div>
    <table class="table" id="datos">
        <thead>
        <tr>
            <th>Tipo de DOCUMENTO</th>
            <th>Nro de DOC</th>
            <th>Fecha Carga</th>
            <th>Tomo</th>
            <th>Documento</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($documentos as $doc)
            <tr>
                <td>{{ $doc->tipo_documento }}</td>
                <td>{{ $doc->nro_documento }}</td>
                <td>{{ $doc->created_at->format('d/m/Y') }}</td>
                <td>{{ $doc->tomo }}</td>
                <td>
                    <a href="{{ route('saddocumentos.view', $doc->id) }}"><div class="col-sm-6 col-md-4 col-lg-3"> <i title="Descargar" class="ti-view-grid"></i></div></a>
                    <a href="{{ url('storage/'. $doc->tomo.'/'. $doc->archivo) }}" ><div class="col-sm-6 col-md-4 col-lg-3"> <i title="Ver" class="ti-download"></i></div></a>
                </td>
        @endforeach
        </tbody>
    </table>
    <div style="text-align:center;">
        {{ $documentos->appends(Request::all())->links() }}
    </div>
@endif