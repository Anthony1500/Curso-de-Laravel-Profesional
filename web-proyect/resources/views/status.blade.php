<x-app-layout>
    <x-container>
        <h2 class="text-lg mb-4 text-gray-500">Friend requests</h2>
        @forelse ($requests as $user)
            <x-card class="mb-4">
                <div class="flex justify-between">
                    {{ $user->name }}
                    <form action="{{ route('friends.update',$user) }}"  method="POST">
                        @csrf
                        @method('PUT')
<x-submit-button>confirm</x-submit-button>
                    </form>
                </div>

            </x-card>
        @empty
            <p>No friend requests.</p>
        @endforelse
        <h2 class="text-lg mb-4 text-gray-500">Sent requests</h2>
        @forelse ($sends as $user)
            <x-card class="mb-4">
                {{ $user->name }}
            </x-card>
        @empty
            <p>No sent requests.</p>
        @endforelse

        <h2 class="text-lg mb-4 text-gray-500">Friends</h2>
        @forelse ($friends as $user)
            <x-card class="mb-4">
                {{ $user->name }}
            </x-card>
        @empty
            <p>No sent requests.</p>
        @endforelse
    </x-container>

</x-app-layout>
