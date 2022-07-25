<x-layout>
    <x-slot name="header">
        {{ __('Demos') }}
    </x-slot>

    <x-panel>
        <h3 class="text-base font-bold text-blue-500 uppercase">State</h3>
        <x-splade-state>
            <p>Admin last seen at: <span v-text="state.shared.adminLastSeenAt" /></p>
        </x-splade-state>
    </x-panel>

    <x-panel>
        <h3 class="text-base font-bold text-red-500 uppercase">Defer</h3>

        <x-splade-defer method="GET" url="/api/quote">
            <div v-show="processing">Loading...</div>
            <div>@{{ response.xx }}</div>
        </x-splade-defer>
    </x-panel>

    <x-panel>
        <h3 class="text-base font-bold text-blue-500 uppercase">Toggle</h3>
        <x-splade-toggle>
            <button @click.prevent="toggle">Show text</button>

            <div v-show="toggled">
                <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor rerum libero accusantium asperiores
                    officia quasi minima rem excepturi nemo molestiae, unde accusamus voluptate vitae quisquam, ratione
                    sequi ipsa suscipit eius? </p>
                <!-- <button @click.prevent="setToggle(false)">Hide text</button> -->
            </div>
        </x-splade-toggle>
    </x-panel>

    <x-panel>
        <h3 class="text-base font-bold text-blue-500 uppercase">Event</h3>
        <x-splade-event channel="foo" listen="HighServerLoadDetected">
            <div v-for="event in events">
                <p v-text="event.name" />
                <p v-text="`Hello ${event.data.username}`" />
            </div>
        </x-splade-event>
    </x-panel>

    <x-panel>
        <h3 class="text-base font-bold text-red-500 uppercase">Data</h3>

        <x-splade-data remember="foo" default="{name: 'Richard'}" local-storage>
            <input type="text" v-model="data.name">
        </x-splade-data>
    </x-panel>

    <x-panel>
        <h3 class="text-base font-bold text-red-500 uppercase">Forms</h3>

        <Link modal href="{{ route('users.create') }}">Add users</Link>

        <x-splade-state>
            <div v-for="user in state.shared.users" v-text="user.name"></div>
        </x-splade-state>
    </x-panel>
</x-layout>