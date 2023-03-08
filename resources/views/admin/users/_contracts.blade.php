<ul class="p-1">
    @foreach($user['contracts'] as $contract)
    <li>
        @if(isset($contract['contract']))
            {{$contract['contract']['title']}}
        @endif
    </li>
    @endforeach
</ul>