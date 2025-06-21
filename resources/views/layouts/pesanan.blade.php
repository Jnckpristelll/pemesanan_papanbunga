@extends('layouts.template')

@section('title', 'pesanan')

@section('headline')
    Pesanan
@endsection

@section('content')
    <ul class="pcoded-item pcoded-left-item">
        <li class="">
            <a href="index.html">
                <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
    <ul class="pcoded-item pcoded-left-item">
        <li>
            <a href="form-elements-component.html">
                <span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Pelanggan</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
    <ul class="pcoded-item pcoded-left-item">
        <li>
            <a href="bs-basic-table.html">
                <span class="pcoded-micon"><i class="ti-bag"></i><b>FC</b></span>
                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Produk</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
    <ul class="pcoded-item pcoded-left-item">
        <li>
            <a href="chart.html">
                <span class="pcoded-micon"><i class="ti-shopping-cart"></i><b>FC</b></span>
                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Pesanan</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li>
            <a href="chart.html">
                <span class="pcoded-micon"><i class="ti-pencil-alt"></i><b>FC</b></span>
                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Detail Pesanan</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>

    </ul>
@endsection
