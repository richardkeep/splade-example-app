<x-layout>
    <x-slot name="header">
        {{ __('Docs') }}
    </x-slot>
    <x-splade-modal :close-button="true">
        <x-splade-form :action="route('users.store')">
            <div>
                <input v-model="form.name" type="text" />
                <p v-text="form.errors.name" />
            </div>
            <div>
                <input v-model="form.email" type="email" />
                <p v-text="form.errors.email" />
            </div>
            <div>
                <input v-model="form.password" type="text" />
                <p v-text="form.errors.password" />
            </div>
            <div>
                <button type="submit">Send</button>
            </div>
            <div v-show="form.processing">Loading...</div>
        </x-splade-form>
    </x-splade-modal>
</x-layout>