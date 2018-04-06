<form id="logout-system" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>