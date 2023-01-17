<x-app title="Login">
    <x-navbar></x-navbar>

    <script>
        $(document).ready(function() {
            const login = new bootstrap.Modal('#login')
            login.show();
        })
    </script>
</x-app>
