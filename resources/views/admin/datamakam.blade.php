@extends('admin.master')
@section('dashboard')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Data Makam
                        <div class="page-title-subheading">This is an example dashboard created using
                            build-in elements and components.
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                        <button type="button" data-toggle="modal" data-target="#TambahDataMakam"
                            aria-expanded="false" class="btn-shadow btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-business-time fa-w-20"></i>
                            </span>
                            Tambah+
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="widget-heading">Income</div>
                                <div class="widget-subheading">Expected totals</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-focus">$147</div>
                            </div>
                        </div>
                        <div class="widget-progress-wrapper">
                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                            </div>
                            <div class="progress-sub-label">
                                <div class="sub-label-left">Expenses</div>
                                <div class="sub-label-right">100%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Data Makam
                        <div class="btn-actions-pane-right">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">NO</th>
                                    <th class="text-center">NIK</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Tanggal Lahir</th>
                                    <th class="text-center">Alamat</th>
                                    <th class="text-center">Longitude</th>
                                    <th class="text-center">Latitude</th>
                                    <th class="text-center">TPU</th>
                                    <th class="text-center">Kode Makam</th>
                                    <th class="text-center">Ketersediaan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datamakam as $index =>$dm)
                                <tr>
                                    <td class="text-center text-muted">{{ $index+1 }}</td>
                                    <td class="text-center">{{ $dm->nik }}</td>
                                    <td class="text-center">{{ $dm->name }}</td>
                                    <td class="text-center">{{ $dm->ttl }}</td>
                                    <td class="text-center">{{ $dm->alamat }}</td>
                                    <td class="text-center">{{ $dm->longitude }}</td>
                                    <td class="text-center">{{ $dm->latitude }}</td>
                                    <td class="text-center">{{ $dm->tpu }}</td>
                                    <td class="text-center">{{ $dm->kodemakam }}</td>
                                    <td>
                                        @if ($dm->ketersediaan == 1)
                                            Tersedia
                                        @else
                                            Tidak Tersedia
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/Konfirmasi/delete/{{ $dm->id }}" class="btn btn-danger btn-sm">Hapus</a>
                                        <button class="btn-wide btn btn-success center" data-toggle="modal" data-target="#Konfirmasi-{{ $dm->id }}">Update</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-block text-center card-footer">
                    </div>
                </div>
            </div>
        </div>
    <div class="app-wrapper-footer">
        <div class="app-footer">
            <div class="app-footer__inner">
                <div class="app-footer-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                Footer Link 1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                Footer Link 2
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="app-footer-right">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                Footer Link 3
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <div class="badge badge-success mr-1 ml-0">
                                    <small>NEW</small>
                                </div>
                                Footer Link 4
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
