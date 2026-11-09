@extends('admin.layout')
@section('title','Images')
@section('content')
<h1>Images</h1>
<p class="sub">Pick a new file under any picture and press Save. JPG, PNG or WebP, up to 8 MB each. Big photos are resized automatically.<br>Room galleries are managed in <a href="{{ route('admin.gallery') }}">Gallery</a>.</p>

<form method="post" action="{{ route('admin.images') }}" enctype="multipart/form-data">
@csrf
<div class="grid">
@foreach($images as $img)
 <div class="card" style="margin:0">
  <img src="{{ asset($img->path) }}" alt="">
  <label>{{ $img->label }}</label>
  <input type="file" name="file[{{ $img->key }}]" accept="image/png,image/jpeg,image/webp">
  <label>Alt text <small>(for SEO and accessibility)</small></label>
  <input type="text" name="alt[{{ $img->key }}]" value="{{ $img->alt }}">
 </div>
@endforeach
</div>
<div class="sticky"><button class="btn">Save images</button></div>
</form>
@endsection
