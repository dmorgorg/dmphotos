@extends('layouts.master')

@section('content')
    <!-- <script>console.log(window.devicePixelRatio);</script> -->
    <div class='container'>
      @foreach($images as $image)
          <span class='thumb'>
              <a href='http://dmp.loc/images/med/{{ $image->filename }}' class='popup mfp-iframe-scaler' title='{{$image->caption}}'>
                  <img src='/images/thumbs/{{ $image->filename }}' >
              </a>
          </span>
      @endforeach
    </div>
    {!! $images->render() !!}

@stop
