@extends('layouts.master')
@section('content')
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="row row-in">
                <div class="col-lg-3 col-sm-6 row-in-br">
                    <div class="col-in row">
                        <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                            <h5 class="text-muted vb">USUARIOS ACTIVOS</h5> </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h3 class="counter text-right m-t-15 text-danger">23</h3> </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                    <div class="col-in row">
                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon=""></i>
                            <h5 class="text-muted vb">DOCUMENTOS DIGITALIZADOS</h5> </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h3 class="counter text-right m-t-15 text-megna">169</h3> </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 row-in-br">
                    <div class="col-in row">
                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon=""></i>
                            <h5 class="text-muted vb">OFICINAS DIGITALIZADAS</h5> </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h3 class="counter text-right m-t-15 text-primary">15</h3> </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6  b-0">
                    <div class="col-in row">
                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon=""></i>
                            <h5 class="text-muted vb">TIPOS DE DOCUMENTOS</h5> </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h3 class="counter text-right m-t-15 text-success">41</h3> </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-md-7 col-lg-9 col-sm-12 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">Promedio de digitalizaciones</h3>
            <ul class="list-inline text-right">
                <li>
                    <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>Expedientes</h5> </li>
                <li>
                    <h5><i class="fa fa-circle m-r-5" style="color: #fb9678;"></i>Resolusiones</h5> </li>
                <li>
                    <h5><i class="fa fa-circle m-r-5" style="color: #9675ce;"></i>Actas</h5> </li>
            </ul>
            <div id="morris-area-chart" style="height: 340px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="340" version="1.1" width="757" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.515625" y="301" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.015625,301H732" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.515625" y="232" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.015625,232H732" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.515625" y="163" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">150</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.015625,163H732" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.515625" y="94" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">225</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.015625,94H732" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.515625" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">300</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.015625,25H732" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="732" y="313.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2016</tspan></text><text x="617.5548622204473" y="313.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan></text><text x="503.1097244408946" y="313.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan></text><text x="388.66458666134184" y="313.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="273.9059005591055" y="313.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="159.46076277955274" y="313.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="45.015625" y="313.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><path fill="#0bdae2" stroke="none" d="M45.015625,255C73.62690944488818,236.6,130.84947833466455,184.84999999999997,159.46076277955274,181.39999999999998C188.07204722444092,177.95,245.2946161142173,220.509439124487,273.9059005591055,227.39999999999998C302.5955720846646,234.30943912448697,359.97491513578274,248.11573187414498,388.66458666134184,236.6C417.27587110623006,225.115731874145,474.49843999600637,139.425,503.1097244408946,135.4C531.7210088857828,131.375,588.9435777755591,212.45,617.5548622204473,204.39999999999998C646.1661466653354,196.34999999999997,703.3887155551118,104.35,732,71L732,301L45.015625,301Z" fill-opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0;"></path><path fill="none" stroke="#00bfc7" d="M45.015625,255C73.62690944488818,236.6,130.84947833466455,184.84999999999997,159.46076277955274,181.39999999999998C188.07204722444092,177.95,245.2946161142173,220.509439124487,273.9059005591055,227.39999999999998C302.5955720846646,234.30943912448697,359.97491513578274,248.11573187414498,388.66458666134184,236.6C417.27587110623006,225.115731874145,474.49843999600637,139.425,503.1097244408946,135.4C531.7210088857828,131.375,588.9435777755591,212.45,617.5548622204473,204.39999999999998C646.1661466653354,196.34999999999997,703.3887155551118,104.35,732,71" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.015625" cy="255" r="3" fill="#00bfc7" stroke="#00bfc7" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="159.46076277955274" cy="181.39999999999998" r="3" fill="#00bfc7" stroke="#00bfc7" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="273.9059005591055" cy="227.39999999999998" r="3" fill="#00bfc7" stroke="#00bfc7" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="388.66458666134184" cy="236.6" r="3" fill="#00bfc7" stroke="#00bfc7" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="503.1097244408946" cy="135.4" r="3" fill="#00bfc7" stroke="#00bfc7" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="617.5548622204473" cy="204.39999999999998" r="3" fill="#00bfc7" stroke="#00bfc7" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="732" cy="71" r="3" fill="#00bfc7" stroke="#00bfc7" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#facfc3" stroke="none" d="M45.015625,227.39999999999998C73.62690944488818,222.79999999999998,130.84947833466455,206.7,159.46076277955274,209C188.07204722444092,211.3,245.2946161142173,257.284268125855,273.9059005591055,245.8C302.5955720846646,234.28426812585502,359.97491513578274,127.3641586867305,388.66458666134184,117C417.27587110623006,106.6641586867305,474.49843999600637,151.5,503.1097244408946,163C531.7210088857828,174.5,588.9435777755591,209,617.5548622204473,209C646.1661466653354,209,703.3887155551118,174.5,732,163L732,301L45.015625,301Z" fill-opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0;"></path><path fill="none" stroke="#fb9678" d="M45.015625,227.39999999999998C73.62690944488818,222.79999999999998,130.84947833466455,206.7,159.46076277955274,209C188.07204722444092,211.3,245.2946161142173,257.284268125855,273.9059005591055,245.8C302.5955720846646,234.28426812585502,359.97491513578274,127.3641586867305,388.66458666134184,117C417.27587110623006,106.6641586867305,474.49843999600637,151.5,503.1097244408946,163C531.7210088857828,174.5,588.9435777755591,209,617.5548622204473,209C646.1661466653354,209,703.3887155551118,174.5,732,163" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.015625" cy="227.39999999999998" r="3" fill="#fb9678" stroke="#fb9678" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="159.46076277955274" cy="209" r="3" fill="#fb9678" stroke="#fb9678" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="273.9059005591055" cy="245.8" r="3" fill="#fb9678" stroke="#fb9678" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="388.66458666134184" cy="117" r="3" fill="#fb9678" stroke="#fb9678" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="503.1097244408946" cy="163" r="3" fill="#fb9678" stroke="#fb9678" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="617.5548622204473" cy="209" r="3" fill="#fb9678" stroke="#fb9678" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="732" cy="163" r="3" fill="#fb9678" stroke="#fb9678" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#bba7dc" stroke="none" d="M45.015625,282.6C73.62690944488818,268.8,130.84947833466455,233.14999999999998,159.46076277955274,227.39999999999998C188.07204722444092,221.64999999999998,245.2946161142173,243.49056087551298,273.9059005591055,236.6C302.5955720846646,229.690560875513,359.97491513578274,180.26101231190148,388.66458666134184,172.2C417.27587110623006,164.1610123119015,474.49843999600637,165.29999999999998,503.1097244408946,172.2C531.7210088857828,179.1,588.9435777755591,234.29999999999998,617.5548622204473,227.39999999999998C646.1661466653354,220.49999999999997,703.3887155551118,144.6,732,117L732,301L45.015625,301Z" fill-opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0;"></path><path fill="none" stroke="#9675ce" d="M45.015625,282.6C73.62690944488818,268.8,130.84947833466455,233.14999999999998,159.46076277955274,227.39999999999998C188.07204722444092,221.64999999999998,245.2946161142173,243.49056087551298,273.9059005591055,236.6C302.5955720846646,229.690560875513,359.97491513578274,180.26101231190148,388.66458666134184,172.2C417.27587110623006,164.1610123119015,474.49843999600637,165.29999999999998,503.1097244408946,172.2C531.7210088857828,179.1,588.9435777755591,234.29999999999998,617.5548622204473,227.39999999999998C646.1661466653354,220.49999999999997,703.3887155551118,144.6,732,117" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.015625" cy="282.6" r="3" fill="#9675ce" stroke="#9675ce" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="159.46076277955274" cy="227.39999999999998" r="3" fill="#9675ce" stroke="#9675ce" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="273.9059005591055" cy="236.6" r="3" fill="#9675ce" stroke="#9675ce" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="388.66458666134184" cy="172.2" r="3" fill="#9675ce" stroke="#9675ce" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="503.1097244408946" cy="172.2" r="3" fill="#9675ce" stroke="#9675ce" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="617.5548622204473" cy="227.39999999999998" r="3" fill="#9675ce" stroke="#9675ce" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="732" cy="117" r="3" fill="#9675ce" stroke="#9675ce" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 439.11px; top: 51px; display: none;"><div class="morris-hover-row-label">2014</div><div class="morris-hover-point" style="color: #00bfc7">
                        iPhone:
                        180
                    </div><div class="morris-hover-point" style="color: #fb9678">
                        iPad:
                        150
                    </div><div class="morris-hover-point" style="color: #9675ce">
                        iPod Touch:
                        140
                    </div></div></div>
        </div>
    </div>
    <div class="col-md-3 col-lg-3 col-xs-12">
        <div class="white-box">
            <div class="user-bg"> <img src="" alt="user" style="100%">
                <div class="overlay-box">
                    <div class="user-content">
                        <a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle" src="{{ url('plugins/images/users/user_icon_big.png') }}"></a>
                        <h4 class="text-white">{{ auth()->user()->name }}</h4>
                        <h5 class="text-white">{{ auth()->user()->email}}</h5> </div>
                </div>
            </div>
            <div class="user-btm-box">
                <div class="stats-row col-md-12 m-t-20 m-b-0 text-center">
                    <div class="stat-item">
                        <h6>Contacto Info</h6> <b><i class="ti-mobile"></i> 123-456-789</b></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
