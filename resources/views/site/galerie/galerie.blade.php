@extends('layout')
@section('title','Galerie')
@section('content')


        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area br_image">
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Image Gallery</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Gallery</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        <!--================Breadcrumb Area =================-->
        <section class="gallery_area section_gap">
            <div class="container">
                <div class="row imageGallery1" id="gallery">
                @if($gallery->count() > 0)
                    @foreach($gallery as $g)
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img title="{{ $g->legende }}" src='{{ asset("/assets/img/galeries/$g->img") }}' alt="">
                            <div class="hover">
                                <a title="{{ $g->legende }}" class="light" href='{{ asset("/assets/img/galeries/$g->img") }}'><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <div class="quotes" style="text-align: center; font-size: 30px;opacity: 0.3">
                            <span class="fa fa-picture-o mb-4" style="font-size: 80px "></span><br>
                            Aucune image dans la galérie
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </section>
        <!--================Gallery Area =================-->


@endsection
