<ul class="p-1">
    @foreach($patient['contracts'] as $contract)
    <li>
        @if(isset($contract['contract']))
            {{$contract['contract']['title']}}
        @endif
    </li>
    @endforeach
</ul>