<h1>{{ $project['title'] }}</h1>
<p>{{ $project['desc'] }}</p>

<h3>Teknologi:</h3>
<ul>
    @foreach($project['tech'] as $t)
        <li>{{ $t }}</li>
    @endforeach
</ul>

<h3>Gallery:</h3>
@foreach($project['images'] as $img)
    <img src="{{ $img }}" width="300">
@endforeach

<br>
<a href="/">Kembali</a>