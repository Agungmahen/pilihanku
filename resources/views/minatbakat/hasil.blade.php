@extends('welcome')
@section('content')
    <style>
        .progress-circle {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100px;
            height: 100px;
            background-color: #f0f0f0;
            border-radius: 50%;
            overflow: hidden;
        }

        .progress-bar-circle {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: conic-gradient(#007bff 0% {!! $hasil !!}%,
                                      #f0f0f0 {!! $hasil !!}% 100%);
            transform: rotate(90deg);
            transform-origin: 50% 50%;
            animation: progress-animation 2s ease-in-out;
        }

        .progress-text {
            z-index: 2;
            font-size: 1.5em;
            font-weight: bold;
            color: #000;
        }

        @keyframes progress-animation {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
<body>
<div style="padding-top: 100px"></div>
<table>
    <tr>
        <td>
            <div class="container mt-5">
                <div class="progress-circle">
                    <div class="progress-bar-circle"></div>
                    <div class="progress-text">{{ $hasil }}%</div>
                </div>
            </div>
        </td>
        <td>
            {{$abjad}}
        </td>
    </tr>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
