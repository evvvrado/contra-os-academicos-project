<form method="post" action="{{ route('payment') }}">
    @csrf
    pagar
    <input type="hidden" value="200" name="amount">
    <input type="submit">
</form>