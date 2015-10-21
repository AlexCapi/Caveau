@extends("layouts.layout")

@section('title')
    Diaporama Caveau Quinard
@stop

@section('description')
    Consultez les plus belles photos du caveau quinard afin de prendre par à notre aventure bugiste.
@stop

@section("content")
<section class="header"></section>
<section id="diaporama">
    <div class="introduction">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Le caveau Quinard en photo</h1>
                        <p class="section-description">Visionner quelques uns des plus beaux clichés du caveau, de ses employés, et du magnifique cadre qu'est le Bugey.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <ul id="lightGallery" class="gallery list-unstyled">
                            @foreach ($images as $image)
                            @if( $image->selected)
                                <li data-src="{{ URL::asset('images/uploads/originals/'.$image->image) }}" data-sub-html="<p>{{ $image->description }}</p>">
                                    <img class="img-diaporama" src="{{ URL::asset('images/uploads/thumbs/medium/'.$image->image) }}" />
                                </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    window.onload = function() {
        $("#lightGallery").lightGallery();
    };
</script>