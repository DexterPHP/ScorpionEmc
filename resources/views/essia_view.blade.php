@include('statics.Main_header')
@if(isset($CaterTitle))
    @foreach($CaterTitle as $any)
      <h1 class="text-center">{{$any->title}}</h1>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
    @endforeach

@endif
@include('statics.Main_footer')
