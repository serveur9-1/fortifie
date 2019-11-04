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
                            <img title="{{ $g->legende }}" src="{{ asset("/assets/image/gallery/$g->img") }}" alt="">
                            <div class="hover">
                                <a title="{{ $g->legende }}" class="light" href="{{ asset("/assets/image/gallery/$g->img") }}"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    ####Aucune image
                @endif
                </div>
            </div>
        </section>
        <!--================Gallery Area =================-->


@endsection
