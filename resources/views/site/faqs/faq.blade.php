@extends('layout')
@section('title','foire aux questions')
@section('content')


        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area br_image">
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Foire aux questions</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li class="active">foire aux questions</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->




<style type="text/css">
  body {
  color: #6a6c6f;
  background-color: #f1f3f6;
  margin-top: 30px;
}

.container {
  max-width: 960px;
}

.panel-default>.panel-heading {
  color: #333;
  background-color:#f1f3f6;
  border-color: #e4e5e7;
  border-bottom: 1px solid #6c2f91;
  padding: 0;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.panel-default>.panel-heading a {
  display: block;
  padding: 10px 15px;
}

.panel-default>.panel-heading a:after {
  content: "";
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: 400;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  float: right;
  transition: transform .25s linear;
  -webkit-transition: -webkit-transform .25s linear;
}

.panel-default>.panel-heading a[aria-expanded="true"] {
  background-color: #f1f3f6;
}

.panel-default>.panel-heading a[aria-expanded="true"]:after {
  content: "\2212";
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);

}

.panel-default>.panel-heading a[aria-expanded="false"]:after {
  content: "\002b";
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

.accordion-option {
  width: 100%;
  float: left;
  clear: both;
  margin: 15px 0;
}

.accordion-option .title {
  font-size: 20px;
  font-weight: 400;
 text-align: center;
  padding: 0;
  margin: 0;
}

.accordion-option .toggle-accordion {
  float: right;
  font-size: 16px;
  color: #6a6c6f;

}

.accordion-option .toggle-accordion:before {
  content: "Expand All";
}

.accordion-option .toggle-accordion.active:before {
  content: "Collapse All";
}
</style>
<!-- <div class="container mt-5">
  <div class="container">
    <div class="container">
          <div class="container">
            @if($faq->count() > 0)

              @foreach ($faq as $f)
                  <h2 class="text-center">{{ $f->libelle }}</h2>
                  <div class="accordion">
                    @foreach($f->question as $q)
                      <div class="accordion-item">
                        <a>{{ $q->libelle }}</a>
                        <div class="content">
                            @foreach($q->answer as $a)
                            {!! $a->libelle !!}
                            @endforeach
                        </div>
                      </div>
                    @endforeach
                  </div>
              @endforeach
            @else
            <div class="col-12 fa fa-question text-muted text-center" style="font-size:200px"></div>
            @endif
        
          </div>
      </div>
    </div>
</div> -->





<div class="container">
  @if($faq->count() > 0) 
    @foreach ($faq as $f)   
      <div class="accordion-option">
        <h3 class="title ">{{ $f->libelle }}</h3>
      </div>
      <div class="clearfix"></div>
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
         @foreach($f->question as $q)
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
            <a role="button"  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              {{ $q->libelle }}
            </a>
          </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              @foreach($q->answer as $a)
                {!! $a->libelle !!}
              @endforeach
            </div>
          </div>
        </div>
        @endforeach
      </div>
      @endforeach
        @else
            <div class="col-12 fa fa-question text-muted text-center" style="font-size:200px"></div>
            @endif
</div>


<script type="text/javascript">
  $(document).ready(function() {

  $(".toggle-accordion").on("click", function() {
    var accordionId = $(this).attr("accordion-id"),
      numPanelOpen = $(accordionId + ' .collapse.in').length;
    
    $(this).toggleClass("active");

    if (numPanelOpen == 0) {
      openAllPanels(accordionId);
    } else {
      closeAllPanels(accordionId);
    }
  })

  openAllPanels = function(aId) {
    console.log("setAllPanelOpen");
    $(aId + ' .panel-collapse:not(".in")').collapse('show');
  }
  closeAllPanels = function(aId) {
    console.log("setAllPanelclose");
    $(aId + ' .panel-collapse.in').collapse('hide');
  }
     
});
</script>

@endsection
