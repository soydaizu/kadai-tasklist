@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li><font color = "RED">{{ $error }}</font></li>
        @endforeach
    </ul>
@endif
