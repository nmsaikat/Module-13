
@switch($result)
    @case(100)
        <h1>Result is 100</h1>
    @break
    @case(200)
        <h1>Result is 200</h1>
    @break
    @case(300)
        <h1>Result is 300</h1>
    @break
    @case(400)
        <h1>Result is 400</h1>
    @break
    @default
        <h1>Result is not found</h1>
@endswitch