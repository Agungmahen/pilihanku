@extends('welcome')
@section('content')
<!-- Di dalam view2.blade.php -->
<div style="padding-top: 80px"></div>

@if($soalView3)
    @foreach($soalView3 as $index => $item)
        <p>{{ $item['pertanyaan'] }}</p>
        <form action="/cek_jawaban/{{ $index + 1 }}" method="post">
            @csrf
            <ul>
                @if(isset($item['jawaban']) && is_array($item['jawaban']))
                    @foreach($item['jawaban'] as $option)
                        <li>
                            <label>
                                <input required type="radio" name="jawaban" value="{{ $option }}"> {{ $option }}
                            </label>
                        </li>
                    @endforeach
                @endif
            </ul>
            @if($index + 1 == count($soalView3))
                <button type="submit">Next Page</button>
            @endif
        </form>
    @endforeach
@else
    <p>Belum ada soal yang tersedia.</p>
@endif

@endsection