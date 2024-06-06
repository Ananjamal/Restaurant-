<div class="main-panel p-4">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Messages Table</h1>

    </div>
{{-- 
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
            <div>
                {{ session('success') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif --}}

    <table class="table table-hover">
        <thead class="bg-light">
            <tr>
                <th scope="col" class="text-center align-middle">#</th>
                <th scope="col" class="text-center align-middle">Date</th>
                <th scope="col" class="text-center align-middle">Email</th>
                <th scope="col" class="text-center align-middle">Message</th>
                {{-- <th scope="col" class="text-center align-middle">Actions</th> --}}
            </tr>
        </thead>
        <tbody>
            <!-- Sample rows (replace with dynamic content) -->
            @foreach ($messages as $message)
                <tr>
                    <td class="text-center align-middle">
                        <h5>{{ ++$counter }}</h5>
                    </td>
                    <td class="text-center align-middle">
                        <h5>{{ $message->created_at }}</h5>
                    </td>
                    <td class="text-center align-middle">
                        <h5>{{ $message->email }}</h5>
                    </td>
                    <td class="text-center align-middle">
                        <h5>{{ $message->message }}</h5>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>
    {{ $messages->links('pagination-view') }}

</div>
