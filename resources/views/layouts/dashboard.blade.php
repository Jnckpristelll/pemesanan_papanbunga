@extends('layouts.template')

@section('title','dashboard')

@section('page')
    Dashboard
@endsection

@section('content1')
<ul class="pcoded-item pcoded-left-item">
    <li class="">
        <a href="index.html">
            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
            <span class="pcoded-mcaret"></span>
        </a>
    </li>
</ul>
@endsection
