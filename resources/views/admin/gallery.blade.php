@extends('admin.layout')
@section('title','Gallery')
@section('content')
<h1>Gallery categories</h1>
<p class="sub">Each category is a card in "Interior collections" and opens its own photo popup on the website.</p>

<div class="card">
 <h2>Add a category</h2>
 <form method="post" action="{{ route('admin.gallery') }}">@csrf
  <label>Name</label><input type="text" name="name" required placeholder="e.g. Dining Room">
  <label>Short line under the name <small>(optional)</small></label><input type="text" name="description" placeholder="e.g. Table · Chairs · Crockery unit">
  <p><button class="btn">Create category</button></p>
 </form>
</div>

<div class="card">
 <table>
  <tr><th>#</th><th>Cover</th><th>Name</th><th>Photos</th><th>Status</th><th></th></tr>
  @foreach($categories as $c)
   <tr>
    <td>{{ $c->sort }}</td>
    <td>@php($cv = $c->coverPath())@if($cv)<img src="{{ asset($cv) }}" alt="" style="width:70px;height:48px;object-fit:cover;border-radius:4px">@endif</td>
    <td><b>{{ $c->name }}</b></td>
    <td>{{ $c->photos_count }}</td>
    <td>{{ $c->is_active ? 'Visible' : 'Hidden' }}</td>
    <td><a class="btn sm" href="{{ route('admin.gallery.edit', $c) }}">Edit</a></td>
   </tr>
  @endforeach
 </table>
</div>
@endsection
