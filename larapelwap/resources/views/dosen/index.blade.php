<h2>Fakultas</h2>
{{-- -{{ $ilkom  }}--}}
<ul>
    @foreach ($fakultas as $item)
    <li> {{ $item }} </li>
    @endforeach
@else
<li>Belum ada data</li>
@endif
</ul>

@include('layout.footer')