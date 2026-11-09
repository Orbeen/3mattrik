@extends('admin.layout')
@section('title', $cat->name)
@section('content')
<p><a href="{{ route('admin.gallery') }}">← All categories</a></p>
<h1>{{ $cat->name }}</h1>

<form method="post" action="{{ route('admin.gallery.edit', $cat) }}" enctype="multipart/form-data" class="card">
@csrf
 <h2>Category details</h2>
 <label>Name</label><input type="text" name="name" value="{{ old('name', $cat->name) }}" required>
 <label>Short line under the name</label><input type="text" name="description" value="{{ old('description', $cat->description) }}">
 <label>Order <small>(smaller number shows first)</small></label><input type="number" name="sort" min="0" value="{{ old('sort', $cat->sort) }}" style="width:120px">
 <label>Card cover picture <small>(optional. If empty, the first photo is used)</small></label>
 @if($cat->coverPath())<img src="{{ asset($cat->coverPath()) }}" alt="" style="height:90px;border-radius:6px;display:block;margin-bottom:6px">@endif
 <input type="file" name="cover" accept="image/png,image/jpeg,image/webp">
 @if($cat->cover_path)<label style="font-weight:400"><input type="checkbox" name="reset_cover" value="1"> Remove custom cover</label>@endif
 <label style="font-weight:400;margin-top:14px"><input type="checkbox" name="is_active" value="1" @checked(old('is_active', $cat->is_active))> Show on website</label>
 <p><button class="btn">Save category</button></p>
</form>

<form method="post" action="{{ route('admin.gallery.photos', $cat) }}" enctype="multipart/form-data" class="card">
@csrf
 <h2>Add photos</h2>
 <input type="file" name="photos[]" accept="image/png,image/jpeg,image/webp" multiple required>
 <p class="hint">Select many at once. Up to 8 MB each. If an upload fails, send fewer photos at a time.</p>
 <p><button class="btn">Upload photos</button></p>
</form>

<div class="card">
 <h2>Photos ({{ $cat->photos->count() }})</h2>
 <div class="grid">
 @foreach($cat->photos as $p)
  <div>
   <img src="{{ asset($p->path) }}" alt="" loading="lazy">
   <form method="post" action="{{ route('admin.gallery.photo.delete', [$cat, $p]) }}" onsubmit="return confirm('Delete this photo?')" style="margin-top:6px">@csrf @method('DELETE')<button class="btn red sm">Delete</button></form>
  </div>
 @endforeach
 </div>
</div>

<form method="post" action="{{ route('admin.gallery.delete', $cat) }}" onsubmit="return confirm('Delete this whole category and all its photos?')">@csrf @method('DELETE')<button class="btn red">Delete category</button></form>
@endsection
