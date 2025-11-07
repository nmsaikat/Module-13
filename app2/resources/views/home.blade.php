<!-- <h2>{{ $result }}</h2> -->

@if ($result == 100)
    <h2>Result is 100</h2>

@elseif( $result == 200 )
    <h2>Result is 200</h2>
@else
    <h2>Result is not in our range</h2>

@endif