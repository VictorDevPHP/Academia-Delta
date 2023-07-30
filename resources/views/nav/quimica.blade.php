@auth
    @if (auth()->user()->status_conta === 'enem:')
        <p>Teste ativo enem</p>

    @elseif(auth()->user()->status_conta === 'militar:')
        <p>Teste ativo militar</p>
        
    @elseif(auth()->user()->status_conta === 'militar:enem:')
        <p>Tem os dois</p>

    @else    
    @php
        abort(403);
    @endphp
    @endif
@endauth
