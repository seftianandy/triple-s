<div>
    <h2>Skor Peserta</h2>
    <ul>
        @foreach ($scores as $score)
            <li>{{ $score->participant_name }}: {{ $score->score }}</li>
        @endforeach
    </ul>
</div>
