<?php

namespace App\Http\Controllers;

use App\Http\Requests\SADocumentoEditFormRequest;
use App\Http\Requests\SADocumentoFormRequest;
use App\Listeners\SendMovUbicacion;
use App\SADocumento;
use App\Tag;
use App\Ubicacion;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SADocumentosController extends Controller
{


}
