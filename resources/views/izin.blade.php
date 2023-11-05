@extends('layouts.web')

@section('title', 'Privacy Policy')

@section('content')
<section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Izin</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Izin</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>

<section class="section-padding faq-page-section">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-10 col-lg-offset-1">
                        <div class="section-title">
                            <span>Perizinan</span>
                            <h2>Berikut Perizinan Yang kami <span>CV. Woka Project Mandiri</span></h2>
                        </div>
                        <div class="faq-section">
                            <div class="panel-group faq-accordion theme-accordion-s1" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="true">NIB</a>
                                    </div>
                                    <div id="collapse-1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                        <embed src="nib.pdf" type="application/pdf" width="100%" height="600">
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-2">NPWP</a>
                                    </div>
                                    <div id="collapse-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        <embed src="npwp.pdf" type="application/pdf" width="100%" height="600">
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-3">Dokumen Lainnya</a>
                                    </div>
                                    <div id="collapse-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Jika anda butuh dokumen lainnya, silahkan hubungi kami pada kontak yang tersedia.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection