<x-layout>
<body>
<div class="welcome-screen">
    <h1>Welcome to Asset & Employee Management</h1>
    <p>This application helps you manage your company's assets and employees efficiently.</p>
    <p>Get started by:</p>
    <button onclick="window.location='{{ route('asset.index') }}'" class="btn-show">View Assets</button>
    <button onclick="window.location='{{ route('employee.index') }}'" class="btn-show">View Employees</button>
</div>

</body>
</html>
</x-layout>