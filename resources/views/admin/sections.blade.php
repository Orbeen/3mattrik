@extends('admin.layout')
@section('title','Section texts')
@section('content')
<h1>Section texts</h1>
<p class="sub">Change the small heading (sub-heading), the big heading and the paragraph of each section.<br>
In headings: <b>new line</b> = line break, and <b>*word*</b> (stars around it) = italic accent, like <i>possibilities.</i></p>

<form method="post" action="{{ route('admin.sections') }}">
@csrf
@foreach($defs as $key => $def)
 @php($row = $rows[$key] ?? null)
 <div class="card">
  <h2>{{ $def['label'] }}</h2>
  <label>Sub-heading</label>
  <input type="text" name="s[{{ $key }}][sub]" value="{{ old("s.$key.sub", $row->sub ?? $def['sub']) }}">
  <label>Heading</label>
  <textarea name="s[{{ $key }}][heading]" style="min-height:70px">{{ old("s.$key.heading", $row->heading ?? $def['heading']) }}</textarea>
  @if($def['para'] !== null)
   <label>Paragraph <small>(blank line = new paragraph)</small></label>
   <textarea name="s[{{ $key }}][para]">{{ old("s.$key.para", $row->para ?? $def['para']) }}</textarea>
  @endif
 </div>
@endforeach
<div class="sticky"><button class="btn">Save all texts</button></div>
</form>
@endsection
