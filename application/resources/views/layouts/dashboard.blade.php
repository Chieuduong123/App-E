    {{-- @yield('title') --}}
    <br>
    @if (session('success'))
        <span class="alert alert-success">{{ session('success') }}</span>
    @endif
    @if (session('msg'))
        <span class="alert alert-info">{{ session('msg') }}</span>
    @endif
    @if (session('error'))
        <span class="alert alert-danger">{{ session('error') }}</span>
    @endif
    @yield('main')
