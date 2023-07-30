@auth
    {{-- Condição de exibição de conteudo somente para o produto "Enem:", por padrao, no final do produto sempre tera o operador ":" para indicar que pode ser adicionado mais de um produto --}}
    @if (auth()->user()->status_conta === 'enem:') 
        <p>Teste ativo enem</p>
    
    {{-- Condição de exibição de conteudo somente para o produto "Militar:", por padrao, no final do produto sempre tera o operador ":" para indicar que pode ser adicionado mais de um produto --}}
    @elseif(auth()->user()->status_conta === 'militar:')
        <p>Teste ativo militar</p>
    
    {{-- Condição de exibição de conteudo somente para o produto "Militar: e Enem:", por padrao, no final do produto sempre tera o operador ":" para indicar que pode ser adicionado mais de um produto --}}
    @elseif(auth()->user()->status_conta === 'militar:enem:')
        <p>Tem os dois</p>

    @else    
    @php
        abort(403);
    @endphp
    @endif
@endauth
